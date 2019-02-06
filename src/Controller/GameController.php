<?php

namespace App\Controller;


use App\Entity\Game;
use App\FakeData;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class GameController extends AbstractController
{


    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        /**
         * @todo lister les jeux de la base
         */
        $games = $entityManager->getRepository(Game::class)->findAll();
        return $this->render("game/index", ["games" => $games]);

    }

    public function add(Request $request): Response
    {
        $game = FakeData::games(1)[0];

        if ($request->getMethod() == Request::METHOD_POST) {
            /**
             * @todo enregistrer l'objet
             */
            return $this->redirectTo("/game");
        }
        return $this->render("game/form", ["game" => $game]);
    }


    public function show($id, EntityManagerInterface $entityManager): Response
    {
        $game = $entityManager->find(Game::class, $id);
        return $this->render("game/show", ["game" => $game]);
    }


    public function edit($id, Request $request): Response
    {
        $game = FakeData::games(1)[0];

        if ($request->getMethod() == Request::METHOD_POST) {
            /**
             * @todo enregistrer l'objet
             */
            return $this->redirectTo("/game");
        }
        return $this->render("game/form", ["game" => $game]);


    }

    public function delete($id): Response
    {
        /**
         * @todo supprimer l'objet
         */
        return $this->redirectTo("/game");

    }

}