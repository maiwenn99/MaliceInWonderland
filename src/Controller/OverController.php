<?php
/**
 * Created by PhpStorm.
 * User: maiwenn
 * Date: 18/04/2019
 * Time: 13:55
 */

namespace App\Controller;


class OverController extends AbstractController
{

    /**
     * Display home page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function over()
    {
        return $this->twig->render('Home/gameOver.html.twig');
    }
}