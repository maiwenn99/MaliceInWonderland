<?php
/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 08/04/19
 * Time: 18:40
 */

namespace App\Controller;

class PlaceController extends AbstractController
{

    /**
     * Display home page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function place11()
    {

        return $this->twig->render('Place/place1-1.html.twig');
    }

    public function place12()
    {

        return $this->twig->render('Place/place1-2.html.twig');
    }

    public function place21()
    {

        return $this->twig->render('Place/place2-1.html.twig');
    }

    public function place22()
    {

        return $this->twig->render('Place/place2-2.html.twig');
    }

    public function place23()
    {

        return $this->twig->render('Place/place2-3.html.twig');
    }

    public function place24()
    {

        return $this->twig->render('Place/place2-4.html.twig');
    }
}
