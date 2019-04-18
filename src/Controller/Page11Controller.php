<?php
/**
 * Created by PhpStorm.
 * User: maiwenn
 * Date: 18/04/2019
 * Time: 21:32
 */

namespace App\Controller;


class Page11Controller extends AbstractController
{

    public function page11()
    {
        return $this->twig->render('Home/page1-1.html.twig');
    }

}