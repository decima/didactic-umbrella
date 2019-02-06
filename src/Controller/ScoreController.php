<?php

namespace App\Controller;


use App\FakeData;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ScoreController extends AbstractController
{


    public function index(Request $request): Response
    {
        $scores = FakeData::scores();

        $games = FakeData::games();
        $players = FakeData::players();

        return $this->render("score/index", ["scores" => $scores,
            "games" => $games, "players" => $players]);
    }

    public function add(): Response
    {
        /**
         * @todo ajouter un score
         */
    }

}