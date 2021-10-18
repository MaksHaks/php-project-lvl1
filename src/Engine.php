<?php

namespace php\project\lvl1\Engine;

use function cli\line;
use function cli\prompt;

//This file is designed to handle any game from the "Brain Games".
//This file does not generate data for the game.

function runner(array $questions, array $answers, string $instruction): void
{
    //Player greeting and briefing

    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($instruction);

    //Questioning the player and checking the answers
    
    $i = 0;
    for ($i = 0; $i <= 2; $i++) {
        line("Question: {$questions[$i]}");
        $answer = prompt("Your answer");

    //Checking the answer

        if ($answer === $answers[$i]) {
            line("Correct!");
        } else {
            line("{$answer} is wrong answer ;(. Correct answer was {$answers[$i]}.");
            line("Let's try again, {$name}!");
            break;
        }
    }

    //Congratulations to the player if all rounds of the game are won.

    if ($i === 3) {
        line("Congratulations, {$name}!");
    }
}
