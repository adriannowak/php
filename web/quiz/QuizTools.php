<?php
/**
 * Created by PhpStorm.
 * User: anowak
 * Date: 18.08.16
 * Time: 13:59
 */

namespace Quiz;

class QuizTools {
    const QUIZ_FRAME_HTML = "<iframe src=\"%s\" width=\"80%%\" height=\"100%%\" frameborder=\"0\" marginheight=\"0\" marginwidth=\"0\">Ładowanie...</iframe>";


    static function format(QuizResource $quizResource) : string {
        return sprintf(QuizTools::QUIZ_FRAME_HTML, $quizResource->getUrl());
    }
}