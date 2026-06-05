<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\run;

const DESCRIPTION = "What is the result of the expression?";
const MIN_NUM = 0;
const MAX_NUM = 30;
const OPERATORS = ['+', '-', '*'];

function calculate (string $oper, int $num1, int $num2): int
{
    switch ($oper) {
        case '+':
                $result = $num1 + $num2;
            break;
        case '-':
                $result = $num1 - $num2;
            break;
        case '*':
                $result = $num1 * $num2;
            break;
        default:
                $result = 0;
    }

    return $result;
}

function runCalc(): null
{
    $generateRound = function (): array {
	$num1 = rand(MIN_NUM, MAX_NUM);
	$num2 = rand(MIN_NUM, MAX_NUM);
        $operator = OPERATORS[array_rand(OPERATORS)];

        $question = "{$num1} {$operator} {$num2}";

        $answer = calculate($operator, $num1, $num2);
        return [$question, (string)$answer];
    };
    return run(DESCRIPTION, $generateRound);
}
