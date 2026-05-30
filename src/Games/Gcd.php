<?php
namespace BrainGames\Games\Gcd;

function findGcd ($a, $b)
{
        while($b !== 0) {
                $temp = $b;
                $b = $a % $b;
                $a = $temp;
        }
        return abs($a);
}

function getDescription()
{
        return 'Find the greatest common divisor of given numbers.';
}

function generateRound()
{
     	$num1 = rand(1, 100);
        $num2 =rand(1, 100);

        $question = "{$num1} {$num2}";
        $result = findGcd($num1, $num2);

        return [$question, $result];
}
