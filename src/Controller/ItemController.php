<?php
/**
 * Created by PhpStorm.
 * User: Vincent Ostyn
 * Date: 18/04/19
 * Time: 14:07
 * PHP version 7
 */

namespace App\Controller;

use App\Model\ItemManager;

/**
 * Class ItemController
 *
 */
class ItemController extends AbstractController
{

//
//    /**
//     * Display Random eggs listing
//     *
//     * @return string
//     * @throws \Twig\Error\LoaderError
//     * @throws \Twig\Error\RuntimeError
//     * @throws \Twig\Error\SyntaxError
//     */
    public function index()
    {
        $eggsManager = new ItemManager();
        $eggs = $eggsManager->eggs();

        session_start();

        if (empty($_SESSION)) {
            $h = 6; //numbers of eggs
            $rand_keys = array_rand($eggs, $h);
            $k= $h-3; // $h-3 equal of numbers of gold eggs
            for ($i=0; $i<$k; $i++) {
                $_SESSION['eggs'][$i] = $eggs[$rand_keys[$i]];
            }
            for ($j = $k; $j< $h; $j++) {
                $_SESSION['eggsgold'][$j] = $eggs[$rand_keys[$j]];
            }
            $places= ['1.1','1.2','2.1','2.2','2.3','2.4'];
            shuffle($places);
            $i=0;
            foreach ($places as $place){
                $_SESSION['placeswitheggs'][$place]= $eggs[$rand_keys[$i]];
                $i++;
            }
        }

        return $this->twig->render('Item/index.html.twig', ['eggs' => $_SESSION['eggs'],
                                                                  'eggsgold' => $_SESSION['eggsgold'],
                                                                    'placeswitheggs' => $_SESSION['placeswitheggs']]);
    }
}
