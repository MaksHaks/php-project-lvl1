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

    foreach ($questions as &$value) {
        $value = rand(1, 100);
    }

// Generating answers for game.

    foreach ($answers as $key => &$value) {
        if ($questions[$key] % 2 === 0) {
            $value = 'yes';
        } else {
            $value = 'no';
        }
    }

//Run game using engine and pull of data.

    runner($questions, $answers, $instruction);
}
