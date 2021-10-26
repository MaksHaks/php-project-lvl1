<?php

namespace Php\Project\Lvl1\BrainEvenGame;

use function Php\Project\Lvl1\Engine\runner;

use const Php\Project\Lvl1\Engine\ROUNDS_COUNT;

//This file provide & generate pull of data for game "Brain-even" and handles it with engine.php
//Data inlclude information about game ($instruction) and game-data ($questions and $answers)
//This file is only for maintenance of the engine for the game.

function runEvenGame(): void
{
    $instruction = 'Answer "yes" if the number is even, otherwise answer "no".';
    $gameData = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $question = rand(1, 100);
        $answer = $question % 2 === 0 ? 'yes' : 'no';
        $gameData[] = [$question, $answer];
    }

    runner($gameData, $instruction);
}
