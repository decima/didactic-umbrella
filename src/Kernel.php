<?php

namespace App;

use App\Controller\ErrorController;
use App\Controller\HomeController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Kernel
{
    private $request = null;


    public function __construct()
    {
        $this->request = Request::createFromGlobals();

    }

    public function run()
    {
        $response = $this->route($this->request);
        $response->send();


    }

    private function route(Request $request): Response
    {
        $defaultController = HomeController::class;
//we get the route here and clean it
        $path = $request->getPathInfo();
        $path = trim($path, "/");

        $className = $defaultController;
        $method = "index";
        if (strlen($path) > 0) {
            // if subroute is not specified, it is merged to /index
            list($controller, $method) = array_merge(explode("/", $path), ["index"]);

            $className = "App\\Controller\\" . ucfirst($controller) . "Controller";
            if ($className === $defaultController && $method === "index") {
                return new RedirectResponse("/");
            }
        }

        if (!class_exists($className)
            || !method_exists($className, $method)) {
            return new Response("Not Found", Response::HTTP_NOT_FOUND);
        }

        $resolvedArguments = $this->parametersResolver($className, $method);
        return call_user_func_array([new $className(), $method], $resolvedArguments);
    }

    private function parametersResolver($className, $method): array
    {

        $reflexion = new \ReflectionMethod($className, $method);

        $params = $reflexion->getParameters();
        $autoInject = [
            Request::class => $this->request
        ];
        $paramValues = [];
        foreach ($params as $param) {
            if ($param->hasType() && isset($autoInject[$param->getType()->getName()])) {
                $paramValues[$param->getPosition()] = $autoInject[$param->getType()->getName()];
            } else {
                $paramValues[$param->getPosition()] = $this->request->get($param->getName(), null);
            }
        }

        return $paramValues;
    }


}