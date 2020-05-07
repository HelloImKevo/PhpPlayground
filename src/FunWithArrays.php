<?php

/*
 * PluralSight Course
 * PHP Fundamentals
 * by Jill Gunderson
 */

// Indexed Arrays
$authors = array("Charles Dickens", "Jane Austin", "William Shakespeare",
    "Mark Twain", "Louisa May Alcott");
$books = ["Little Women", "Jane Eyre", "Richard III", "Oliver Twist"];
$allTypes = [10, 1.3, "Howdy", true];

print_r($authors);
print_r($allTypes);

echo "\n", $authors[1];
echo "\n'Charles Dickens' in array? ", in_array("Charles Dickens", $authors);
echo "\n'int(10)' in array? ", in_array(10, $allTypes, true);
echo "\n'str(10)' in array? ", in_array("10", $allTypes, true);
// Prints nothing (key does not exist).
echo "\n'[5]' exists? ", array_key_exists(5, $authors);
// Prints '1' for true.
echo "\n'[1]' exists? ", array_key_exists(1, $authors);
echo "\n";

// Associative Arrays
$authorsAssociative = array(
    "quarky" => "Charles Dickens",
    "brilliant" => "Jane Austin",
    "poetic" => "William Shakespeare"
);
print_r($authorsAssociative);

$authorsAssociative = array(
    "quarky" => "Charles Dickens",
    10 => "Jane Austin",
    "poetic" => "William Shakespeare",
    "Mark Twain"
);
print_r($authorsAssociative);

echo "\n", $authorsAssociative['quarky'];
// Prints '1' for true.
echo "\n'poetic' exists? ", array_key_exists('poetic', $authorsAssociative);

// Add elements to an array
array_push($authors, "George Orwell");
print_r($authors);

// An alternative (sometimes preferred) method to add elements because it
// will not throw an error if the array is null
$authors[] = "William Golding";
print_r($authors);

// Remove the last element from the array
$lastValue = array_pop($authors);
echo "\nPopped Author: ", $lastValue;

// Remove specific items from the array
unset($authors[1], $authors[2]);
print_r($authors);
