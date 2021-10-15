<?php

namespace php\project\lvl1\BrainEvenGame;

use function cli\line;
use function cli\prompt;

//Use only numbers from 1 to 100 because of why not.

function start()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');

    for ($i = 1; $i <= 3; $i++) {
        $random = rand(1, 100);
        //Check is the new number is even or not
        if (($random % 2) === 0) {
            $temp = 'yes';
        } else {
            $temp = 'no';
        }
        //Create question
        line("Question: {$random}");
        $answer = prompt("Your answer");
        //Check answer
        if ($answer === $temp) {
            line("Correct!");
        } else {
            line("{$answer} is wrong answer ;(. Correct answer was {$temp}.");
            line("Let's try again, {$name}!");
            break;
        }
    }
    //Congratulations if all answers was correct.
    if ($i === 4) {
        line("Congratulations, {$name}");
    }
}
