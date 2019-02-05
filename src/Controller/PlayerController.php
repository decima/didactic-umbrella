<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PlayerController extends AbstractController
{


    public function index(Request $request): Response
    {

        /**
         * @todo lister les joueurs
         */
    }

    public function add(): Response
    {

    }

    public function show($id): Response
    {
        /**
         * @todo afficher le joueur, ses derniers scores, et les jeux qu'il possede.
         * @todo pouvoir gerer ses jeux
         */
    }

    public function edit($id): Response
    {
        /**
         * @todo editer un joueur
         */
    }

    public function delete($id): Response
    {

    }

}