<?php

namespace php\project\lvl1\BrainGcdGame;

use function php\project\lvl1\Engine\runner;

//This file provide & generate pull of data for game "Brain-gcd" and handles it with engine.php
//Data inlclude information about game ($instruction) and game-data ($questions and $answers)
//This file is only for maintenance of the engine for the game.

function runGcdGame()
{
    $instruction = 'Find the greatest common divisor of given numbers.';
    $questions = ['', '', ''];
    $answers = ['', '', ''];

    //Generating questions & answers for game.

    for ($i = 0; $i <= 2; $i++) {
        $numOne = rand(1, 100);
        $numTwo = rand(1, 100);
        $min = min($numOne, $numTwo);
        $questions[$i] = "$numOne $numTwo";

    //Checking for real gcd of generated numbers.

        while ($min >= 1) {
            if ($numOne % $min === 0 && $numTwo % $min === 0) {
                $answers[$i] = (string)$min;
                $min = 0;
            } else {
                $min--;
            }
        }
    }

    //Run game using engine and pull of data.

    runner($questions, $answers, $instruction);
}
