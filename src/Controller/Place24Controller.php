<?php


namespace App\Controller;


class Place24Controller extends AbstractController
{
    public function place24()
    {
        return $this->twig->render('Home/place24.html.twig');
    }
}