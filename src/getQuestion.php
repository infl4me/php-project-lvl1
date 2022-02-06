<?php

namespace Brain\Games\getQuestion;

use function Brain\Games\utils\isEven;

function getBrainEvenQuestionData()
{
    $question = rand(0, 1000);
    return [$question, isEven($question) ? 'yes' : 'no'];
}
