<?php
/****
 * Number Chain Example
 *
 * A number chain is created by continuously adding the square of the digits in 
 * a number to form a new number until it has been seen before.
 *
 * Every starting number will eventually arrive at 1 or 89.
 *
 * Use to determine how many starting numbers below 100,000
 */

$start = 1;
$limit = 100000;
$eighty_nine_count = 0;
$arr = [];

# Loop for each number in range
for ($i = $start; $i < $limit; $i++) {
    
    $number = $i; 
    $done = false;

    while (!$done) {
        if (isset($arr[$number])) {

            # Part of number chain was already in array, so add initial number
            # at set the value to exiting number's value (basially setting it to 1 or 89)
            $arr[$i] = $arr[$number];
            $done = true;

        } elseif ($number == 1 || $number == 89) {

            # Add to array, setting it to the chain outcome... 1 or 89
            $arr[$i] = $number;
            $done = true;

        } else {

            # Not already in array and not either 1 or 89, so calc new number
            $number = calc_number($number);
        } 
    }
    
    # If outcome for number was 89, then increase counter
    if ($arr[$i] == 89) {
        $eighty_nine_count++;
    }
}

echo "Number Chain for starting numbers below $limit\n";
echo "Total starting numbers arriving at 89: $eighty_nine_count\n";

/**
 * This function accepts a number, breaks it down into individual characters/numbers, 
 * squares each number, then adds them together
 *
 * @param   integer  $number Number to work with
 * @returns integer          New number created
 */ 
function calc_number($number)
{
    $num = (string)$number;

    $new_number = 0;

    for ($i = 0; $i < strlen($num); $i++) {
        $prod = $num[$i]**2;
        $new_number += $prod;
    }

    return ($new_number);
}
