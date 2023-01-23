<?php
function calculator(string $expressionString): string
{
    $arrayOperators = ['+', '-', '*', '/'];
    $arrayNumbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    $correctExpression = '';

    if (strpos($expressionString, '/0')) {
        exit('Incorrect input');
    }
    $expressionArray = str_split($expressionString);

    foreach ($expressionArray  as $keyArray) {
        if (!(in_array($keyArray, $arrayOperators) && in_array($keyArray, $arrayNumbers))) {
            $correctExpression .= $keyArray;
        } else {
            exit('Incorrect input');
        }
    }
    return eval('return ' . $correctExpression . ';');
}

echo calculator('3+2*1');
