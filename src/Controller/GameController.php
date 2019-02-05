<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class GameController extends AbstractController
{


    public function index(Request $request): Response
    {
        /**
         * @todo lister les jeux de la base
         */
        $games = [
            ["id" => "1", "name" => "Fortnite", "image" => "https://www.toornament.com/media/file/2182688003451494401/logo_large?v=1548968387"],
            ["id" => "2", "name" => "Super Smash Bros.", "image" => "https://yuzu-emu.org/images/game/boxart/super-smash-bros-ultimate.png"],
        ];
        return $this->render("game/index", ["games" => $games]);

    }

    public function add(Request $request): Response
    {
        $game = ["name" => "a", "image" => ""];

        if ($request->getMethod() == Request::METHOD_POST) {
            /**
             * @todo enregistrer l'objet
             */
            return $this->redirectTo("/game");
        }
        return $this->render("game/form", ["game" => $game]);
    }


    public function show($id): Response
    {
        $game = ["id" => $id, "name" => "A random game", "image" => ""];
        return $this->render("game/show", ["game" => $game]);
    }


    public function edit($id, Request $request): Response
    {
        $game = ["id" => $id, "name" => "Super Smash Bros.", "image" => "https://yuzu-emu.org/images/game/boxart/super-smash-bros-ultimate.png"];

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