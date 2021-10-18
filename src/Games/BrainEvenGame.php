<?php

namespace php\project\lvl1\BrainEvenGame;

use function php\project\lvl1\Engine\runner;

//This file provide & generate pull of data for game "Brain-even" and handles it with engine.php
//Data inlclude information about game ($instruction) and game-data ($questions and $answers)
//This file is only for maintenance of the engine for the game.

function runEvenGame(): void
{
    $instruction = 'Answer "yes" if the number is even, otherwise answer "no".';
    $questions = ['', '', ''];
    $answers = ['', '', ''];

    //Generating questions for game.

    for ($i = 0; $i <= 2; $i++) {
        $questions[$i] = rand(1, 100);
        if ($questions[$i] % 2 === 0) {
            $answers[$i] = 'yes';
        } else {
            $answers[$i] = 'no';
        }
    }

    //Run game using engine and pull of data.

    runner($questions, $answers, $instruction);
}
