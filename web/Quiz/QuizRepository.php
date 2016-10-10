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
        if($id == 1111) {
            return new QuizResource("Powtórzenie HTML", "https://docs.google.com/forms/d/e/1FAIpQLSdfobu1FTD7uNAJbaojc75mRW_mcBzRlDXnwmNjUlSYpivS9Q/viewform");
        }
        else if($id == 1002) {
            return new QuizResource("CSS część 1", "https://goo.gl/forms/4mTL2efEfFBMb2Cr2");
        }
        return new QuizResource();
    }
}