<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/10/17
 * Time: 16:07
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
//     * Display item listing
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

        if(empty($_SESSION)){

            $rand_keys = array_rand($eggs,3);
            $_SESSION['eggs'] = $rand_keys;
            $j= count($rand_keys);
            for($i=0;$i<$j;$i++){

                $_SESSION['eggs'][$i] = $eggs[$rand_keys[$i]];
            }
        }

        return $this->twig->render('Item/index.html.twig', ['eggs' => $_SESSION['eggs']]);
    }
}
