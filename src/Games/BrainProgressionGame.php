<?php

namespace php\project\lvl1\BrainProgressionGame;

use function php\project\lvl1\Engine\runner;

//This file provide & generate pull of data for game "Brain-progression" and handles it with engine.php
//Data inlclude information about game ($instruction) and game-data ($questions and $answers)
//This file is only for maintenance of the engine for the game.

function runProgressionGame()
{
    $instruction = 'What number is missing in the progression?';
    $questions = ['', '', ''];
    $answers = ['', '', ''];

    //Generating questions and answers for game.

    for ($i = 0; $i <= 2; $i++) {
        $firstElement = rand(0, 100);
        $length = rand(5, 10);
        $step = rand(2, 10);
        $last = $firstElement + $step * $length;
        $temp = range($firstElement, $last, $step);
        $missingElementKey = rand(4, (count($temp) - 1));

        $answers[$i] = (string)$temp[$missingElementKey];
        $temp[$missingElementKey] = '..';
        $questions[$i] = implode(" ", $temp);
    }

    //Run game using engine and pull of data.

    runner($questions, $answers, $instruction);
}
