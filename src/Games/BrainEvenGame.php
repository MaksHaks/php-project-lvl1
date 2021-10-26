<?php

namespace Php\Project\Lvl1\BrainEvenGame;

use function php\project\lvl1\Engine\runner;

use const php\project\lvl1\Engine\ROUNDS_COUNT;

//This file provide & generate pull of data for game "Brain-even" and handles it with engine.php
//Data inlclude information about game ($instruction) and game-data ($questions and $answers)
//This file is only for maintenance of the engine for the game.

function runEvenGame(): void
{
    $instruction = 'Answer "yes" if the number is even, otherwise answer "no".';
    $gameData = [];

    //Generating questions & answers for game.

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $question = rand(1, 100);
        if ($question % 2 === 0) {
            $answer = 'yes';
        } else {
            $answer = 'no';
        }

        //Writing the question and the correct answer in $gameData

        $gameData[] = [$question, $answer];
    }

    //Run game using engine and pull of data.

    runner($gameData, $instruction);
}
