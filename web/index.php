<?php
require_once "../vendor/autoload.php";


$quiz = new Quiz\QuizResource();
echo Quiz\QuizTools::format($quiz);

