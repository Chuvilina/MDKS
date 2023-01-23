<?php
function sumTime(string $firstTime, string $secondTime): string
{
    $checkExp = '/[0-9][0-9]:[0-9][0-9]:[0-9][0-9]/';

    if (preg_match($checkExp, $firstTime) && preg_match($checkExp, $secondTime)) {
        return (date('H:i:s', strtotime($firstTime) + strtotime($secondTime) - strtotime('00:00:00')));
    } else {
        return 'Incorrect input';
    }
}

echo sumTime('10:20:30', '10:20:30');
