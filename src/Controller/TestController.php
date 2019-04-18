<?php
/**
 * Created by PhpStorm.
 * User: maiwenn
 * Date: 18/04/2019
 * Time: 15:13
 */

namespace App\Controller;

class TestController extends AbstractController
{

    /**
     * Display home page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function test()
    {
        return $this->twig->render('Home/test.html.twig');
    }
}
