<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;
use function Brain\Games\Cli\runGreeting;

function run($questionDscr, $getData)
{
  $roundsCount =  3;
  $name = runGreeting();

  line($questionDscr);

  for ($i = 0; $i < $roundsCount; $i++) {
    [$question, $answer] = $getData();
    line("Question: %s", $question);

    $userAnswer = prompt('Your answer');
    if ($userAnswer === $answer) {
      line("Correct!");
    } else {
      line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$answer}'.");
      line("Let's try again, {$name}!");

      return $i + 1;
    }
  }

  line("Congratulations, {$name}!");

  return $i + 1;
}
