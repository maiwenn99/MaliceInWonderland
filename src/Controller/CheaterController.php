<?php


namespace App\Controller;


class CheaterController extends AbstractController
{
    public function imafuckincheater()
    {
        return $this->twig->render('Cheater/imafuckincheater.html.twig');
    }
}