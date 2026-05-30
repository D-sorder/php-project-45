<?php
namespace BrainGames\Games\Prime;

function isPrime ($num)
{
        if ($num < 2) {
                return false;
        }

        for ($i = 2; $i * $i <= $num; $i++) {
                if ($num % $i === 0) {
                        return false;
                }
        }

        return true;
}

function getDescription()
{
        return 'Answer "yes" if given number is prime. Otherwise answer "no".';
}

function generateRound()
{
        $round = rand(0, 100);

        if (isPrime($round)) {
                $answer = 'yes';
        } else {
                $answer = 'no';
        }

        return [$round, $answer];
}

