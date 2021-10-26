<?php

namespace Php\Project\Lvl1\BrainGcdGame;

use function php\project\lvl1\Engine\runner;

use const php\project\lvl1\Engine\ROUNDS_COUNT;

//This file provide & generate pull of data for game "Brain-gcd" and handles it with engine.php
//Data inlclude information about game ($instruction) and game-data ($questions and $answers)
//This file is only for maintenance of the engine for the game.

function runGcdGame(): void
{
    $instruction = 'Find the greatest common divisor of given numbers.';
    $gameData = [];

    //Generating questions & answers for game.

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $numOne = rand(1, 100);
        $numTwo = rand(1, 100);

        //Writing the question and the correct answer in $gameData

        $question = "{$numOne} {$numTwo}";
        $answer = realGcd($numOne, $numTwo);
        $gameData[] = [$question, $answer];
    }

    //Run game using engine and pull of data.

    runner($gameData, $instruction);
}

function realGcd(int $numOne, int $numTwo): string
{
    $temp = 0;
    $min = min($numOne, $numTwo);
    while ($min >= 1) {
        if ($numOne % $min === 0 && $numTwo % $min === 0) {
            $temp = $min;
            $min = 0;
        } else {
            $min--;
        }
    }
    return (string)$temp;
}
