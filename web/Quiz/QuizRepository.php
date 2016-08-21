<?php
namespace Quiz;

class QuizRepository {

    function getAll() : array
    {
        $result = array();

        for($i = 0;$i<10;$i++) {
            $result[] = new QuizResource();
        }
    }

    function getById(int $id)
    {
        return new QuizResource();
    }
}