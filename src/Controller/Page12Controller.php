<?php
/**
 * Created by PhpStorm.
 * User: maiwenn
 * Date: 18/04/2019
 * Time: 18:43
 */

namespace App\Controller;


class Page12Controller extends AbstractController
{


    /**
     * Display home page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function page12()
    {
        return $this->twig->render('Home/page1-2.html.twig');
    }
}