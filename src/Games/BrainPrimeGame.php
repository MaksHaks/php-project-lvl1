<?php

namespace Php\Project\Lvl1\BrainPrimeGame;

use function Php\Project\Lvl1\Engine\runner;

use const Php\Project\Lvl1\Engine\ROUNDS_COUNT;

//This file provide & generate pull of data for game "Brain-prime" and handles it with engine.php
//Data inlclude information about game ($instruction) and game-data ($questions and $answers)
//This file is only for maintenance of the engine for the game.

function runPrimeGame(): void
{
    $instruction = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $gameData = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $num = rand(2, 100);
        $question = $num;
        $answer = isPrime($num) ? 'yes' : 'no';
        $gameData[] = [$question, $answer];
    }

    runner($gameData, $instruction);
}

function isPrime(int $num): bool
{
    $count = 0;
    $x = $num;
    while ($x > 0) {
        if ($num % $x === 0) {
            $count++;
        }
        $x--;
    }

    return $count !== 2 ? false : true;
}
