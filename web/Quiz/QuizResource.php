<?php
/**
 * Created by PhpStorm.
 * User: anowak
 * Date: 18.08.16
 * Time: 13:50
 */
namespace Quiz;

class QuizResource {

    const START_DATE = 0;
    const STOP_DATE = 1;

    private $url;
    private $name;

    private $dateContainer = array();

    function __construct($name, $url) {
        $this->name = $name;
        $this->url = $url;
        $this->setDate(QuizResource::START_DATE, "2016-01-01");
        $this->setDate(QuizResource::STOP_DATE, "2016-06-01");
    }

    public function getUrl() : string {
        return $this->url;
    }

    public function getName() : string {
        return $this->name;
    }

    public function getStartDate() : \DateTime {
        return $this->getDate(QuizResource::START_DATE);
    }

    public function getStopDate() : \DateTime {
        return $this->getDate(QuizResource::STOP_DATE);
    }

    private function getDate(int $type) {
        return $this->dateContainer[$type];
    }

    private function setDate(int $type, $value) {
        $this->dateContainer[$type] = $value;
    }

}
