<?php

namespace Brain\Games\getQuestion;

use function Brain\Games\utils\isEven;

function getBrainEvenQuestionData()
{
    $question = rand(0, 100);
    return [$question, isEven($question) ? 'yes' : 'no'];
}

function getBrainCalcQuestionData()
{
    $op1 = rand(0, 10);
    $op2 = rand(0, 10);
    $operation = rand(0, 2);
    $operations = ['+', '-', '*'];

    $answer = null;
    switch ($operation) {
        case 0:
            $answer = $op1 + $op2;
            break;
        case 1:
            $answer = $op1 - $op2;
            break;
        case 2:
            $answer = $op1 * $op2;
            break;

        default:
            break;
    }

    $question = "{$op1} {$operations[$operation]} {$op2}";

    return [$question, (string) $answer];
}
