<?php

namespace Php\Project\Lvl1\Engine;

use function cli\line;
use function cli\prompt;

//This file is designed to handle any game from the "Brain Games".
//This file does not generate data for the game.
//It's easy to change number of rounds using const ROUNDS_COUNT.

define('ROUNDS_COUNT', 3);

function runner(array $gameData, string $instruction): void
{
    //Player greeting and briefing

    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($instruction);

    //Questioning the player and checking the answers

    foreach ($gameData as $value) {
        [$question, $answer] = $value;
        line("Question: {$question}");
        $playerAnswer = prompt("Your answer");

        //Checking the answer using answer from $gameData

        if ($playerAnswer === $answer) {
            line("Correct!");
        } else {
            line("{$playerAnswer} is wrong answer ;(. Correct answer was {$answer}.");
            line("Let's try again, {$name}!");
            return;
        }
    }

    //Congratulations to the player if all rounds of the game are won.

    line("Congratulations, {$name}!");
}
