<?php


namespace App\Controller;

class Place23Controller extends AbstractController
{
    public function place23()
    {
        return $this->twig->render('Home/place23.html.twig');
    }
}
