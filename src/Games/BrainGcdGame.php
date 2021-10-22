<?php

namespace php\project\lvl1\BrainGcdGame;

use function php\project\lvl1\Engine\runner;

//This file provide & generate pull of data for game "Brain-gcd" and handles it with engine.php
//Data inlclude information about game ($instruction) and game-data ($questions and $answers)
//This file is only for maintenance of the engine for the game.
//It's easy to change number of rounds using $roundNumber

function runGcdGame(): void
{
    $instruction = 'Find the greatest common divisor of given numbers.';
    $gameData = [];
    $roundNumber = 3;

    //Generating questions & answers for game.

    for ($i = 0; $i < $roundNumber; $i++) {
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
    $min = min($numOne, $numTwo);
    while ($min >= 1) {
        if ($numOne % $min === 0 && $numTwo % $min === 0) {
            return $min;
        } else {
            $min--;
        }
    }
    return $min;
}
