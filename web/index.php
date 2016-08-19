<?php
require_once "../vendor/autoload.php";

$loader = new Twig_Loader_Filesystem("../web/Quiz/templates");

$twig = new Twig_Environment($loader);
$quiz = new Quiz\QuizResource();


echo $twig->render('lists.twig', array('quiz' => $quiz,
    'info' => "| Tables        | Are           | Cool  |
| ------------- |:-------------:| -----:|
| col 3 is      | right-aligned | $1600 |
| col 2 is      | centered      |   $12 |
| zebra stripes | are neat      |    $1 |

"));

