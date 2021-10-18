<?php

namespace php\project\lvl1\BrainPrimeGame;

use function php\project\lvl1\Engine\runner;

//This file provide & generate pull of data for game "Brain-prime" and handles it with engine.php
//Data inlclude information about game ($instruction) and game-data ($questions and $answers)
//This file is only for maintenance of the engine for the game.

function runPrimeGame(): void
{
    $instruction = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $questions = ['', '', ''];
    $answers = ['', '', ''];


    //Generating questions and answers for game.

    for ($i = 0; $i <= 2; $i++) {
        $num = rand(2, 100);
        $x = $num;
        $count = 0;

        while ($x > 0) {
            if ($num % $x === 0) {
                $count++;
            }
            $x--;
        }
        $questions[$i] = $num;
        if ($count !== 2) {
            $answers[$i] = 'no';
        } else {
            $answers[$i] = 'yes';
        }
    }

    //Run game using engine and pull of data.

    runner($questions, $answers, $instruction);
}
