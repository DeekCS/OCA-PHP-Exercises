<?php

#1. Write a PHP script to generate the following paragraph.
/*
$colors = array('red', 'green', 'white');
#"THe Memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet,
# the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"

#The words 'red', 'green', 'white' should come from $colors array.
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $colors[2] carpet, the $colors[1] lawn, the $colors[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon"."\n";
*/
############################################################################################################################
#2. Write a PHP script that will display the colors as unordered list.
/*
$colors = array('red', 'green', 'white');
echo "<ul>";
foreach ($colors as $color) {
    echo "<li>$color</li>";
}
echo "</ul>";
*/
############################################################################################################################
#3. Write a PHP script to display the capital and country name from the above array $cities. and sort the list by capital name.
/*
$cities = array(
    "Italy" => "Rome",
    "France" => "Paris",
    "Germany" => "Berlin",
    "Greece" => "Athens",
);
//sort by capital name
asort($cities);
foreach ($cities as $country => $capital) {

    echo "The capital of $country is $capital." . "<br>";
}
*/
############################################################################################################################

#4. Write a Php script to display the first element from the above array.

/*
$colors = array('red', 'green', 'white');
echo $colors[0];
*/

############################################################################################################################

#5. Write a php script that insert a specific new item in an array in any position.
/*
$array = array(1, 2, 3, 4, 5);
echo "Original array : ";
foreach ($array as $value) {
    echo $value . " ";
}
echo "<br>";
$array[] = 6;
echo "New array : ";
foreach ($array as $value) {
    echo $value . " ";
}
*/

############################################################################################################################

#6. Write a php script to sort the following associative array depending on the key value [asc].
/*
$fruits = array(
    "d" => "lemon",
    "a" => "orange",
    "b" => "banana",
    "c" => "apple"
);
foreach ($fruits as $key => $value) {
    echo "$key : $value" . "<br>";
}
echo "<br>";
ksort($fruits);
foreach ($fruits as $key => $value) {
    echo "$key : $value" . "<br>";
}
*/

############################################################################################################################

#7. Write a PHP script to calculate and display the average temperature for the recorded reads, also the script should
# display the list of the five lowest and the five highest temp.
/*
$tempreture= [70, 65, 80, 56, 57, 63, 64, 85, 66, 90, 86];
$lowest = array_slice($tempreture, 0, 5);
$highest = array_slice($tempreture, -5);
$average = array_sum($tempreture) / count($tempreture);
echo "The average temperature is $average" . "<br>";
echo "The five lowest temperature are: ";
foreach ($lowest as $value) {
    echo $value . " ";
}
echo "<br>";
echo "The five highest temperature are: ";
foreach ($highest as $value) {
    echo $value . " ";
}
*/

############################################################################################################################

#8. Write a PHP script to display the following.

/*
 * expected output
 * Array(
 *  [color] => green
 * [0]=> 2
 * [1]=> 4
 * [2]=> b
 * [shape] => trapezoid
 * [4] => 4
 * )
 */

/*
$array1 = array("color" => "red", 2, 4);
$array2 = array(
    "a",
    "b",
    "color" => "green",
    "shape" => "trapezoid",
    4
);


function array_merge_recursive_distinct(array $array1, array &$array2)
{
    $merged = $array1;

    foreach ($array2 as $key => &$value) {
        if (is_array($value) && isset($merged[$key]) && is_array($merged[$key])) {
            $merged[$key] = array_merge_recursive_distinct($merged[$key], $value);
        } else {
            $merged[$key] = $value;
        }
    }

    return $merged;
}

echo "<pre>";
print_r(array_merge_recursive_distinct($array1, $array2));
*/

############################################################################################################################
/*
$colors = array('red', 'green', 'white');

function convert_to_uppercase($colors)
{
    return array_map('strtoupper', $colors);
}

echo "<pre>";
print_r(convert_to_uppercase($colors));
*/

############################################################################################################################
/*
$colors = array('red', 'green', 'white');

function convert_to_uppercase($colors)
{
    $colors = array_values($colors);
    return array_map('strtoupper', $colors);
}

echo "<pre>";
print_r(convert_to_uppercase($colors));

*/

############################################################################################################################
#9.
/*
for ($i = 200;$i<=250; $i++) {
    if ($i % 4 == 0) {
        echo $i . " ";
    }
}
*/


############################################################################################################################
#10. Write a PHP script to get the shortest/longest string from an array.

/*
function get_shortest_word($words)
{
    $shortest_word = $words[0];
    $longest_word = $words[0];

    foreach ($words as $word) {
        if (strlen($word) < strlen($shortest_word)) {
            $shortest_word = $word;
        }
        if (strlen($word) > strlen($longest_word)) {
            $longest_word = $word;
        }
    }
    return "The shortest word is $shortest_word and the longest word is $longest_word";

}

echo "<pre>";
print_r(get_shortest_word(array("PHP", "JavaScript", "Python", "Ruby")));

*/

############################################################################################################################

#11. Write a PHP script to generate unique random 10 numbers whiten a specific range.

/*
function random_number($min, $max, $quantity)
{
    $numbers = range($min, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, $quantity);
}

echo "<pre>";
print_r(random_number(1, 100, 10));
*/

############################################################################################################################

#12. Write a php script that returns the lowest integer value from an array that is not 0.
/*
$array = array( 2, 3, 4, 5, 6, 7, 8, 9, 10,0);

foreach ($array as $value) {
    if ($value != 0) {
        echo $value . " ";
    }
    foreach ($array as $value2) {
        if ($value2 != 0 && $value2 < $value) {
            $value = $value2;
        }
    }
    return "The lowest integer value is $value";
}

*/