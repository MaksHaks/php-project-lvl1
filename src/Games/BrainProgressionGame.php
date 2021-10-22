<?php

namespace php\project\lvl1\BrainProgressionGame;

use function php\project\lvl1\Engine\runner;

//This file provide & generate pull of data for game "Brain-progression" and handles it with engine.php
//Data inlclude information about game ($instruction) and game-data ($questions and $answers)
//This file is only for maintenance of the engine for the game.
//It's easy to change number of rounds using $roundNumber

function runProgressionGame(): void
{
    $instruction = 'What number is missing in the progression?';
    $gameData = [];
    $roundNumber = 3;

    //Generating questions and answers for game.

    for ($i = 0; $i < $roundNumber; $i++) {
        $firstElement = rand(0, 100);
        $length = rand(5, 10);
        $step = rand(2, 10);
        $last = $firstElement + $step * $length;
        $temp = range($firstElement, $last, $step);
        $missingElementKey = rand(4, (count($temp) - 1));

        //Writing the question and the correct answer in $gameDara

        $answer = (string)$temp[$missingElementKey];
        $temp[$missingElementKey] = '..';
        $question = implode(" ", $temp);
        $gameData[] = [$question, $answer];
    }

    //Run game using engine and pull of data.

    runner($gameData, $instruction);
}
