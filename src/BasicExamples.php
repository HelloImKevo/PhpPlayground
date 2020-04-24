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
