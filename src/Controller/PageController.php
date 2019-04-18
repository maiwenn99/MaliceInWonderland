<?php
/**
 * Created by PhpStorm.
 * User: maiwenn
 * Date: 18/04/2019
 * Time: 22:19
 */

namespace App\Controller;


class PageController extends AbstractController
{

    public function enter()
    {
        return $this->twig->render('Page/enter.html.twig');
    }

    public function page11()
    {
        return $this->twig->render('Page/page1-1.html.twig');
    }

    public function page12()
    {
        return $this->twig->render('Page/page1-2.html.twig');
    }

    public function page21()
    {
        return $this->twig->render('Page/page2-1.html.twig');
    }

    public function page22()
    {
        return $this->twig->render('Page/page2-2.html.twig');
    }

    public function page23()
    {
        return $this->twig->render('Page/page2-3.html.twig');
    }

    public function page24()
    {
        return $this->twig->render('Page/page2-4.html.twig');
    }

    public function over()
    {
        return $this->twig->render('Page/gameOver.html.twig');
    }

    public function success()
    {
        return $this->twig->render('Page/success.html.twig');
    }

    public function cheater()
    {
        return $this->twig->render('Page/imafuckincheater.html.twig');
    }

    public function modal0()
    {
        return $this->twig->render('Page/modalEnter.html.twig');
    }

    public function modal1()
    {
        return $this->twig->render('Page/modalPage1-1.html.twig');
    }

    public function modal2()
    {
        return $this->twig->render('Page/modalPage1-2.html.twig');
    }

    public function modal3()
    {
        return $this->twig->render('Page/modalPage2-1.html.twig');
    }

    public function modal4()
    {
        return $this->twig->render('Page/modalPage2-2.html.twig');
    }

    public function modal5()
    {
        return $this->twig->render('Page/modalPage2-3.html.twig');
    }

    public function modal6()
    {
        return $this->twig->render('Page/modalPage2-4.html.twig');
    }
}