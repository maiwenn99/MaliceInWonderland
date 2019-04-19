<?php
/**
 * Created by PhpStorm.
 * User: maiwenn/Vincent Ostyn
 * Date: 18/04/2019
 * Time: 22:19
 */

namespace App\Controller;

use App\Model\PageManager;

class PageController extends AbstractController
{
    public function enter()
    {
        $eggsManager = new PageManager();
        $eggs = $eggsManager->eggs();

        session_start();

        if (empty($_SESSION)) {
            $_SESSION['cart']= 0;
            $h = 6; //numbers of eggs
            $rand_keys = array_rand($eggs, $h);
            $k = $h - 3; // $h-3 equal of numbers of gold eggs
            for ($i = 0; $i < $k; $i++) {
                $_SESSION['eggs'][$i] = $eggs[$rand_keys[$i]];
            }
            for ($j = $k; $j < $h; $j++) {
                $_SESSION['eggsgold'][$j] = $eggs[$rand_keys[$j]];
            }
            $places = ['1.1', '1.2', '2.1', '2.2', '2.3', '2.4'];
            shuffle($places);
            $i = 0;
            foreach ($places as $place) {
                $_SESSION['placeswitheggs'][$place] = $eggs[$rand_keys[$i]];//place ramdom with eggs random
                $i++;
            }
        }

        return $this->twig->render('Page/enter.html.twig', ['eggs' => $_SESSION['eggs'],
            'eggsgold' => $_SESSION['eggsgold'],
            'placeswitheggs' => $_SESSION['placeswitheggs'],
            'cart'=>$_SESSION['cart']]);
    }

    public function page11()
    {
        for($i=3;$i<=5;$i++) {
            if (($_SESSION['placeswitheggs']["1.2"]["id"]) === ($_SESSION['eggsgold'][$i]["id"])) {
                $_SESSION['cart'] +=1;

            }
            if (($_SESSION['cart']) === 3){
                return $this->twig->render('Page/success.html.twig');
            }
        }
        return $this->twig->render('Page/page1-1.html.twig');
    }

    public function page12()
    {
        for($i=3;$i<=5;$i++) {
            if (($_SESSION['placeswitheggs']["1.2"]["id"]) === ($_SESSION['eggsgold'][$i]["id"])) {
                $_SESSION['cart'] +=1;

            }
            if (($_SESSION['cart']) === 3){
                return $this->twig->render('Page/success.html.twig');
            }
        }
        return $this->twig->render('Page/page1-2.html.twig');
    }

    public function page21()
    {
        for($i=3;$i<=5;$i++) {
            if (($_SESSION['placeswitheggs']["2.1"]["id"]) === ($_SESSION['eggsgold'][$i]["id"])) {
                $_SESSION['cart'] +=1;
            }
            if (($_SESSION['cart']) === 3){
                return $this->twig->render('Page/success.html.twig');
            }
        }
        return $this->twig->render('Page/page2-1.html.twig');
    }

    public function page22()
    {
        for($i=3;$i<=5;$i++) {
            if (($_SESSION['placeswitheggs']["2.2"]["id"]) === ($_SESSION['eggsgold'][$i]["id"])) {
                $_SESSION['cart'] ++;
            }
            if (($_SESSION['cart']) === 3){
                return $this->twig->render('Page/success.html.twig');
            }
        }
        return $this->twig->render('Page/page2-2.html.twig');
    }

    public function page23()
    {
        for($i=3;$i<=5;$i++) {
            if (($_SESSION['placeswitheggs']["2.3"]["id"]) === ($_SESSION['eggsgold'][$i]["id"])) {
                $_SESSION['cart'] +=1;

            }
            if (($_SESSION['cart']) === 3){
                return $this->twig->render('Page/success.html.twig');
            }
        }
        return $this->twig->render('Page/page2-3.html.twig');
    }

    public function page24()
    {
        for($i=3;$i<=5;$i++) {
            if (($_SESSION['placeswitheggs']["2.4"]["id"]) === ($_SESSION['eggsgold'][$i]["id"])) {
                $_SESSION['cart'] +=1;
            }
            if (($_SESSION['cart']) === 3){
                return $this->twig->render('Page/success.html.twig');
            }
        }
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
        return $this->twig->render('Page/modalEnter.html.twig', ['eggs' => $_SESSION['eggs'],
            'eggsgold' => $_SESSION['eggsgold'],
            'placeswitheggs' => $_SESSION['placeswitheggs']]);
    }

    public function modal1()
    {
        return $this->twig->render('Page/modalPage1-1.html.twig', ['eggs' => $_SESSION['eggs'],
            'eggsgold' => $_SESSION['eggsgold'],
            'placeswitheggs' => $_SESSION['placeswitheggs']]);
    }

    public function modal2()
    {
        return $this->twig->render('Page/modalPage1-2.html.twig', ['eggs' => $_SESSION['eggs'],
            'eggsgold' => $_SESSION['eggsgold'],
            'placeswitheggs' => $_SESSION['placeswitheggs']]);
    }

    public function modal3()
    {
        return $this->twig->render('Page/modalPage2-1.html.twig', ['eggs' => $_SESSION['eggs'],
            'eggsgold' => $_SESSION['eggsgold'],
            'placeswitheggs' => $_SESSION['placeswitheggs']]);
    }

    public function modal4()
    {
        return $this->twig->render('Page/modalPage2-2.html.twig', ['eggs' => $_SESSION['eggs'],
            'eggsgold' => $_SESSION['eggsgold'],
            'placeswitheggs' => $_SESSION['placeswitheggs']]);
    }

    public function modal5()
    {
        return $this->twig->render('Page/modalPage2-3.html.twig', ['eggs' => $_SESSION['eggs'],
            'eggsgold' => $_SESSION['eggsgold'],
            'placeswitheggs' => $_SESSION['placeswitheggs']]);
    }



    public function nul()
    {
        return $this->twig->render('Page/nul.html.twig');
    }

    public function index()
    {
        return $this->twig->render('Page/index.html.twig');
    }


    public function restart()
    {
        session_destroy();
        header('location:/');
    }
}
