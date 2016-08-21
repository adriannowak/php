<?php
/**
 * Created by PhpStorm.
 * User: anowak
 * Date: 21.08.16
 * Time: 13:19
 */
namespace Quiz;

class QuizController {

    private $repository;
    private $twig;

    function __construct(\Twig_Environment $twig_Environment, QuizRepository $quizRepository)
    {
        $this->repository = $quizRepository;
        $this->twig = $twig_Environment;
    }

    function showAll() {
       echo self::render('Quiz/lists.twig', array('quiz' => $this->repository->getById(1)));
    }

    function show(int $id) {
        echo self::render('Quiz/quiz.twig', array('quiz' => $this->repository->getById($id)));
    }

    private function render(string $file, array $data) {
        echo $this->twig->render($file, $data);
    }

}