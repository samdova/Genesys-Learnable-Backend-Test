<?php


function counted($list) {
    // count occurrences of each number in the array
    $counted = array_count_values($list);

    // sort the array based on occurrences (ascending order, from smallest to biggest)
    asort($counted);

    // response
    return $counted;
}


function nth_most_rate($list, $nth) {
    // validate the list array
    $count = counted($list);    

    // get the unique nos.
    $sortedKeys = array_keys($count);

    // if nth exists (i.e n is equal or less than the total amount of unique nos)
    if ($nth <= count($sortedKeys)) {
        // check if nth was given 0
        if ($nth == 0 ){
            // return failed, since 0 is not part of our unique nos
            return "invalid";
        } 
        // return nth rarest item (actual nth index no)
        return $sortedKeys[$nth - 1];
    } 
    // if nth does not exists
    else {
        // If n > unique nos., return an error messgae
        return "invalid";
    }

}


// examples
$list = [5, 4, 6, 5, 4, 5, 4, 4, 6, 6, 5,  3, 3, 3, 2, 2, 1, 5, 6, 6, 6, 6];
// $results = counted($list);
// print_r($results);
// print_r(counted($list));

$n = 2;
$result = nth_most_rate($list, $n);
echo "\n $n as $result is the $result" . "nd rarest item";



?>