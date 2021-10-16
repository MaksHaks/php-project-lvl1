<?php

namespace php\project\lvl1\BrainCalcGame;

use function php\project\lvl1\Engine\runner;

//This file provide & generate pull of data for game "Brain-calc" and handles it with engine.php
//Data inlclude information about game ($instruction) and game-data ($questions and $answers)
//This file is only for maintenance of the engine for the game.

function runCalcGame()
{
    $instruction = 'What is the result of the expression?';
    $questions = ['', '', ''];
    $answers = ['', '', ''];
    $operands = ['+', '-', '*'];

    //Generating questions and answers for game.

    for ($i = 0; $i <= 2; $i++) {
        $numOne = rand(1, 10);
        $numTwo = rand(1, 10);
        $operand = $operands[array_rand($operands)];
        $questions[$i] = "$numOne $operand $numTwo";

        switch ($operand) {
            case '+':
                $answers[$i] = (string)($numOne + $numTwo);
                break;
            case '-':
                $answers[$i] = (string)($numOne - $numTwo);
                break;
            case '*':
                $answers[$i] = (string)($numOne * $numTwo);
                break;
        }
    }

    //Run game using engine and pull of data.

    runner($questions, $answers, $instruction);
}
