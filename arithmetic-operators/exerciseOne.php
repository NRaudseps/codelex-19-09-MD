<?php declare(strict_types=1);

//Es pieliku if statementu, lai funkcija returno stringu nevis 1 vai neko.
function iLike15 (int $a, $b): string{
    if($a === 15 || $b === 15 || $a + $b === 15 || abs($a-$b) === 15) {
        return 'true' . PHP_EOL;
    }
    else {
        return 'false' . PHP_EOL;
    }
}
echo iLike15(174, 2);