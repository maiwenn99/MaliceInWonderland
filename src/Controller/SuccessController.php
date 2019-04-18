<?php


namespace App\Controller;


class SuccessController extends AbstractController
{

    /**
     * Display success page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function success()
    {
        return $this->twig->render('Success/success.html.twig');
    }
}