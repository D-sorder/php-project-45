<?php
require_once __DIR__ . '/vendor/autoload.php';

include __DIR__ . '/src/Engine.php';

if (function_exists('BrainGames\Engine\run')) {
	echo "run exists!";
} else {
	echo "run stil NOT exists";
}
