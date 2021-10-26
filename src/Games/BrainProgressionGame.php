<?php

namespace Php\Project\Lvl1\BrainProgressionGame;

use function Php\Project\Lvl1\Engine\runner;

use const Php\Project\Lvl1\Engine\ROUNDS_COUNT;

//This file provide & generate pull of data for game "Brain-progression" and handles it with engine.php
//Data inlclude information about game ($instruction) and game-data ($questions and $answers)
//This file is only for maintenance of the engine for the game.

function runProgressionGame(): void
{
    $instruction = 'What number is missing in the progression?';
    $gameData = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $firstElement = rand(0, 100);
        $length = rand(5, 10);
        $step = rand(2, 10);
        $lastElement = $firstElement + $step * $length;
        $progression = range($firstElement, $lastElement, $step);
        $missingElementKey = rand(4, (count($progression) - 1));
        $answer = (string)$progression[$missingElementKey];
        $progression[$missingElementKey] = '..';
        $question = implode(" ", $progression);
        $gameData[] = [$question, $answer];
    }

    runner($gameData, $instruction);
}
