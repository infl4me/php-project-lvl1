<?php

namespace Brain\Games\Games;

use function Brain\Games\utils\gcd;
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

function getBrainGcdQuestionData()
{
    $op1 = rand(0, 100);
    $op2 = rand(0, 100);
    $question = "{$op1} {$op2}";

    return [$question, (string) gcd($op1, $op2)];
}

function getBrainProgressionQuestionData()
{
    $n = 10;
    $step = rand(2, 5);
    $progression = [];
    $hiddenIndex = rand(0, $n - 1);

    for ($i = 1; $i < $n * $step; $i += $step) {
        $progression[] = $i;
    }

    $answer = $progression[$hiddenIndex];
    $progression[$hiddenIndex] = "..";
    

    return [implode(" ", $progression), (string) $answer];
}