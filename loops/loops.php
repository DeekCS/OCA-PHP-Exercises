<?php

#1. Create Script that displays 1-2-3-4-5-6-7-8-9-10 on one line,
# there will not be dash(-) before first number and after last number.
/*
for ($i = 1; $i <= 10; $i++) {
    echo $i;
    if ($i < 10) {
        echo "-";
    }
}
*/

#2. Create a script that displays all numbers between 1 and 30 with total sum.
/*
    $sum =0;
for ($i = 1; $i <= 30; $i++) {
    $sum += $i;
    echo $i . " ";
}
echo "<br>";
    echo "The Sum is: " . $sum;
*/

#3. Create a script to generate the following pattern.

//A A A A A
//A A A B B
//A A C C C
//A D D D D
//E E E E E
/*


function print_pattern($rows, $cols)
{
    for($i = 0;$i<$rows;$i++){
        echo "<br>";
        for($j = 0;$j<$cols;$j++){
            if($j >= ($cols - 1 - $i)){
                echo chr(ord("A") + $i);
            } else {
                echo "A";
            }
        }
    }
}

print_pattern(5, 5);


*/


#4. Create a script to generate the following pattern.
/*
 * 1 1 1 1 1
 * 1 1 1 2 2
 * 1 1 3 3 3
 * 1 4 4 4 4
 * 5 5 5 5 5
 */

/*
function print_pattern($rows, $cols)
{
    for($i = 0;$i<$rows;$i++){
        echo "<br>";
        for($j = 0;$j<$cols;$j++){
            if($j >= ($cols - 1 - $i)){
                echo $i + 1;
            } else {
                echo 1;
            }
        }
    }
}

print_pattern(5, 5);
*/


#5. Create a script to generate the following pattern.
/*
    1 0 0 0 0
    0 2 0 0 0
    0 0 3 0 0
    0 0 0 4 0
    0 0 0 0 5
 */

/*
function print_pattern($rows, $cols)
{
    for($i = 0;$i<$rows;$i++){
        echo "<br>";
        for($j = 0;$j<$cols;$j++){
            if($j === $i){
                echo $i+1;
            } else {
                echo 0;
            }
        }
    }
}

print_pattern(5, 5);

*/

//6. Create a script to print the factorial.
/*
function factorial($num)
{
    $fact = 1;
    for ($i = 1; $i <= $num; $i++) {
        $fact *= $i;
    }
    return $fact;
}

echo factorial(5);
*/

//7. Create a script calculate the "c" count.
/*
function count_c($str)
{
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] === "c") {
            $count++;
        }
    }
    return $count;
}

echo count_c("Orange Coding Academy");
*/


#8.Write a php script print the table add cellpadding 3px and cellspacing 0px to table tag.
/*
echo "<table border='1' cellpadding='3' cellspacing='0'>";
for($i = 0 ; $i<6; $i++){
    echo "<tr>";
    for($j = 0;$j<5;$j++){
        echo "<td>" .($i+1).'*'.($j+1).'='.(($i+1)*($j+1)). "</td>" ;
    }
    echo "</tr>";
}
echo "</table>";
*/

//9.
/*
$numbers = range(1,50);

foreach($numbers as $val){
    if($val % 3 ===0){
        echo "Fizz ";
    } elseif($val % 5 === 0){
        echo "Buzz ";
    } elseif($val % 3 ===0 && $val % 5 === 0){
        echo "FizzBuzz ";
    } else{
        echo $val." ";
    }
}
*/

#10.
/*
$count = 1;
for($i=1;$i<=5;$i++){
    echo "<br>";
    for($j=1;$j<=$i;$j++){
        echo $count . " ";
        $count++;
    }
}
*/

#11.Create a script to print the fibonacci.
/*
function fibonacci($num)
{
    $fib = [1, 1];
    for ($i = 2; $i < $num; $i++) {
        $fib[] = $fib[$i - 2] + $fib[$i - 1];
    }
    return $fib;
}

echo "<pre>";
print_r(fibonacci(10));
*/

#12

/*
$m = 1;
$n = 5;
for ($row = 1; $row <= 5; $row++) {
    for ($column = $row; $column <= 4; $column++) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = 1; $k <= $m; $k++) {
        echo "*";
    }
    for ($c = $m; $c > 1; $c--) {
        echo "*";
    }
    echo "<br>";
    $m++;
}

for ($i = 1; $i <= 5; $i++) {
    for ($j = $i; $j >= 1; $j--) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = $n; $k > 1; $k--) {
        echo "*";
    }
    for ($c = $n - 1; $c > 1; $c--) {
        echo "*";
    }
    echo "<br>";
    $n--;
}
*/