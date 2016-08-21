<?php
namespace Quiz;

interface QuizRepositoryInterface
{
    function getAll() : array;
    function getById(int $id);
}