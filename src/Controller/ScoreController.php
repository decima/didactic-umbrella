<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ScoreController extends AbstractController
{


    public function index(Request $request): Response
    {
        /**
         * @todo completer la liste des derniers scores.
         */
    }

    public function add():Response{
        /**
         * @todo ajouter un score
         */
    }

    public function show($id):Response{
        /**
         * @todo afficher un score en detail, le jeu en question, un lien vers le profil.
         */
    }

    public function edit($id):Response{
        /**
         * @todo editer un score
         */
    }
    public function delete($id):Response{
        /**
         * @todo supprimer un score
         */
    }

}