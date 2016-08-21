<?php
/**
 * Created by PhpStorm.
 * User: anowak
 * Date: 21.08.16
 * Time: 13:59
 */

class HomeController {
    private $twig;


    function __construct(Twig_Environment $twig_Environment)
    {
        $this->twig = $twig_Environment;
    }

    function __invoke()
    {
        echo $this->twig->render("main.twig");
    }
}