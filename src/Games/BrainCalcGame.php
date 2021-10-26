<?php

namespace Php\Project\Lvl1\BrainCalcGame;

use function Php\Project\Lvl1\Engine\runner;

use const Php\Project\Lvl1\Engine\ROUNDS_COUNT;

//This file provide & generate pull of data for game "Brain-calc" and handles it with engine.php
//Data inlclude information about game ($instruction) and game-data ($questions and $answers)
//This file is only for maintenance of the engine for the game.

function runCalcGame(): void
{
    $instruction = 'What is the result of the expression?';
    $gameData = [];
    $operands = ['+', '-', '*'];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $numOne = rand(1, 10);
        $numTwo = rand(1, 10);
        $operand = $operands[array_rand($operands)];
        $question = "{$numOne} {$operand} {$numTwo}";
        $answer = realCalc($numOne, $numTwo, $operand);
        $gameData[] = [$question, $answer];
    }

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
