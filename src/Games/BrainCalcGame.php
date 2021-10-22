<?php

namespace php\project\lvl1\BrainCalcGame;

use function php\project\lvl1\Engine\runner;

//This file provide & generate pull of data for game "Brain-calc" and handles it with engine.php
//Data inlclude information about game ($instruction) and game-data ($questions and $answers)
//This file is only for maintenance of the engine for the game.
//It's easy to change number of rounds using $roundNumber

function runCalcGame(): void
{
    $instruction = 'What is the result of the expression?';
    $gameData = [];
    $roundNumber = 3;
    $operands = ['+', '-', '*'];

    //Generating questions and answers for game.

    for ($i = 0; $i < $roundNumber; $i++) {
        $numOne = rand(1, 10);
        $numTwo = rand(1, 10);
        $operand = $operands[array_rand($operands)];

        //Writing the question and the correct answer in $gameData

        $question = "{$numOne} {$operand} {$numTwo}";
        $answer = realCalc($numOne, $numTwo, $operand);
        $gameData[] = [$question, $answer];
    }

    //Run game using engine and pull of data.

    runner($gameData, $instruction);
}

function realCalc(int $numOne, int $numTwo, string $operand): string
{
    switch ($operand) {
        case '+':
            return (string)($numOne + $numTwo);
        case '-':
            return (string)($numOne - $numTwo);
        case '*':
            return (string)($numOne * $numTwo);
        default:
            throw new \Exception('Указан неверный математический символ');
    }
}
