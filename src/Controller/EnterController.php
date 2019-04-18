<?php


namespace App\Controller;

class EnterController extends AbstractController
{
    public function enter()
    {
        return $this->twig->render('Home/enter.html.twig');
    }
}
