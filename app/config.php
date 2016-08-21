<?php
return [
    Twig_Environment::class => function() {
        $loader = new Twig_Loader_Filesystem(__DIR__ . '/../templates/');
        return new Twig_Environment($loader);
    },
    \Quiz\QuizRepository::class => DI\object(\Quiz\QuizRepository::class)
];