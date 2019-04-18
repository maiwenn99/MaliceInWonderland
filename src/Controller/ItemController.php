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
            $_SESSION['eggs'] = $rand_keys;
            $k= $h-3; // $h-3 equal of numbers of gold eggs
            for ($i=0; $i<$k; $i++) {
                $_SESSION['eggs'][$i] = $eggs[$rand_keys[$i]];
            }
            for ($j = $k; $j< $h; $j++) {
                $_SESSION['eggsgold'][$j] = $eggs[$rand_keys[$j]];
            }
        }
        return $this->twig->render('Item/index.html.twig', ['eggs' => $_SESSION['eggs'],
                                                                  'eggsgold' => $_SESSION['eggsgold']]);
    }
}
