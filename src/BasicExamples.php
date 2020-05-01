<?php

/*
 * PluralSight Course
 * PHP Fundamentals
 * by Jill Gunderson
 */

// Declare a regular integer!
$regInt = 1234;

// Declare an octal number (starts with a zero).
$octNum = 01234;

// Declare a hexadecimal number.
$hexNum = 0xabcd;

// Declare a binary number.
$binaryNum = 0b1000;

var_dump($regInt);
var_dump($octNum);
var_dump($hexNum);
var_dump($binaryNum);

// Floating point numbers.
$float = 1.234;
var_dump($float);

$scientific = 0.1234E4;
var_dump($scientific);

$scientific = 1234E-4;
var_dump($scientific);

define('NEW_CONSTANT', "Hello new constant!");
echo NEW_CONSTANT;

define('CHECK_CONSTANT', "Yes, I am a constant!");

$intVar = 1234;
$stringVar = "I'm a String";
$boolVar = false;
$floatVar = 12.34;

// Value of '1' will print out, representing true
echo is_int($intVar);
// Nothing will print out (instead of false)
echo is_int($floatVar);
echo is_bool($boolVar);
echo is_float($floatVar);

echo defined('CHECK_CONSTANT');

echo "\n";

function listOfBooks() {
    echo "Hamlet\n";
    echo "Romeo and Juliet\n";
}

listOfBooks();

/**
 * @param type $authorName Name of the author to be printed.
 * @param type $year Default value = 1900.
 */
function bookByAuthorYear($authorName, $year = 1900) {
    echo $year;
    echo "\n";
    echo $authorName;
    echo "\n";
}

$year = 1910;
$authorName = "William Shakespeare";

bookByAuthorYear($authorName, $year);

function getAuthor() {
    return "Charles Dickens";
}

echo getAuthor();
echo "\n";

// Variable Function Demo
$variableFunctionName = "getAuthor";
// Invoke the variable function.
echo $variableFunctionName();

$currency = 'penny';
// Because of single quotes, this will print: 
// A $currency saved is a $currency earned.
$sampleString = 'A $currency saved is a $currency earned.';
echo $sampleString;

function funWithStrings() {
    $var = 2;
    echo "\n";
    echo "{$var}nd place" . "\n";
    echo $var . "nd place" . "\n";
    echo "St. Patrick's Day" . "\n";
}

funWithStrings();

// "Here Document" example - End of Text
echo <<<EOT
    Be not afraid of greatness;
    some are born great,
    some achieve greatness,
    and others have greatness thrust upon them.

                    - William Shakespeare
EOT;

print("\nThis above all: to thine own self be true\n");
echo "Et", " tu", ", ", "Brute", "!", "\n";

$quote = strtolower("To be or not to be, that is the Question.");
echo $quote . "\n";

// String concat example from: 
// https://electrictoolbox.com/php-echo-commas-vs-concatenation/
$string1 = str_repeat('x', 100);
$string2 = str_repeat('y', 100);
$string3 = str_repeat('z', 100);

$mark = microtime(true);

for ($i = 0; $i < 2000; $i++) {
    // Turn on output buffering
    ob_start();
    for ($j = 0; $j < 2000; $j++) {
        print($string1 . $string2 . $string3);
    }
    // Get current buffer contents and delete current output buffer
    ob_get_clean();
}

// This demo shows that echo with comma separated args is slightly faster
// (but the real world difference in performance is infintisimal).
echo microtime(true) - $mark;

$quote2 = "Courage is resistance to fear, mastery of fear, "
        . "not absence of fear.";

echo "\n'fear' string pos: ", strpos($quote2, "fear", 26);
echo "\n'm' string pos: ", strpos($quote2, "m");
echo "\n'z' string pos: ", strpos($quote2, "z");

$quote3 = "To be or not to be? That is a question.";

// Pass by reference example for 'count' argument.
// Method Signature:
// function str_replace($search, $replace, $subject, int &$count = NULL) {}
$replaced = str_replace("be", "know", $quote3, $count);
echo "\nReplaced string: ", $replaced;
echo "\nHow many instances replaced: ", $count;

$quote4 = "Only those who will risk going too far can possibly find out "
        . "how far one can go.";
echo "\nLength: ", strlen($quote4);
echo "\nSubstring: ", substr($quote4, 3, 5);
echo "\nSubstring with negative index: ", substr($quote4, -3);

$quote5 = "It is a melancholoy truth that even great men have their poor "
        . "relations.";
$varArray = str_split($quote5, 8);
print_r($varArray);
