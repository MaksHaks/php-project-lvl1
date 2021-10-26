<?php

namespace Php\Project\Lvl1\BrainPrimeGame;

use function php\project\lvl1\Engine\runner;

use const php\project\lvl1\Engine\ROUNDS_COUNT;

//This file provide & generate pull of data for game "Brain-prime" and handles it with engine.php
//Data inlclude information about game ($instruction) and game-data ($questions and $answers)
//This file is only for maintenance of the engine for the game.

function runPrimeGame(): void
{
    $instruction = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $gameData = [];

    //Generating questions and answers for game.

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $num = rand(2, 100);

        //Writing the question and the correct answer in $gameData

        $question = $num;
        $answer = isPrime($num) ? 'yes' : 'no';
        $gameData[] = [$question, $answer];
    }

    //Run game using engine and pull of data.

    runner($gameData, $instruction);
}

//This function helps to check is number prime or not.

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
