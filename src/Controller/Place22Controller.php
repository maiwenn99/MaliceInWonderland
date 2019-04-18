<?php


namespace App\Controller;

class Place22Controller extends AbstractController
{
    public function place22()
    {
        return $this->twig->render('Home/place22.html.twig');
    }
}
