<?php

#1. Check the year is a leap year or not
/*
    $year = 2000;
    if($year % 4 == 0){
        echo "$year is a leap year";
    }else{
        echo "$year is not a leap year";
    }

*/


#2. Check the season of the year
/*
function checkSeason($temp){
   if ($temp < 20) {
       echo "It is winter";
   }else {
       echo "It is summer";
   }
}

checkSeason(27);
*/


#3. Check the sum of two numbers. if the two values are same then print the triple of the sum
/*
function checkSum($num1, $num2){
    if ($num1 == $num2) {
        echo "The sum of two numbers is: " . ($num1 + $num2) * 3;
    }else {
        echo "The sum of two numbers is: " . ($num1 + $num2);
    }
}

checkSum(2, 2);
*/


#4. Check the sum of two numbers equal to 30 return true else return false
/*
function checkSumValue($num1, $num2){
    if ($num1 + $num2 == 30) {
        echo "The sum of two numbers is: " . ($num1 + $num2);
    }else {
        echo "False";
    }
}

checkSumValue(2, 2);
*/

#5. write script to check if the given positive number is a multiple of 3.
/*
function checkMultiple($num){
    if ($num % 3 == 0) {
        echo "The number is a multiple of 3";
    }else {
        echo "The number is not a multiple of 3";
    }
}

checkMultiple(20);

*/

#6. if the number is in the range of 20-50 inclusive
/*
function checkRange($num){
    if ($num >= 20 && $num <= 50) {
        echo "The number $num  is in the range of 20-50";
    }else {
        echo "The number $num is not in the range of 20-50";
    }
}

checkRange(50);
*/

#7. if the largest between three numbers
/*
function checkLargest($num1, $num2, $num3){
    if ($num1 > $num2 && $num1 > $num3) {
        echo "The largest number is $num1";
    }elseif ($num2 > $num1 && $num2 > $num3) {
        echo "The largest number is $num2";
    }else {
        echo "The largest number is $num3";
    }
}

checkLargest(2, 3, 4);

*/

#8. calculate the monthly electricity bill according to these rules:
#a. for first 50 units - 2.5 jod/unit
#b. for next 100 units - 5 jod/unit
#c. for next 100 units - 6.20 jod/unit
#d. for above 250 units - 7.50 jod/unit
/*
function electricityBill($units){
    if ($units <= 50) {
        echo "The electricity bill is: " . $units * 2.5;
    }elseif ($units <= 150) {
        echo "The electricity bill is: " . (($units - 50) * 5 + 50 * 2.5);
    }elseif ($units <= 250) {
        echo "The electricity bill is: " . (($units - 150) * 6.2 + 50 * 2.5 + 100 * 5);
    }else {
        echo "The electricity bill is: " . (($units - 250) * 7.5 + 50 * 2.5 + 100 * 5 + 100 * 6.2);
    }
}

electricityBill(300);4
*/

#9. calculator contain the four main operations:
#a. Addition
#b. Subtraction
#c. Multiplication
#d. Division

/*
function calculator($num1, $num2, $operator){
    switch ($operator) {
        case '+':
            echo $num1 + $num2;
            break;
        case '-':
            echo $num1 - $num2;
            break;
        case '*':
            echo $num1 * $num2;
            break;
        case '/':
            echo $num1 / $num2;
            break;
        default:
            echo "Invalid operator";
            break;
    }
}

calculator(2, 3, '+');
*/

#10. Check if a person is eligible to vote or not, minimum age is 18 years old.
/*
function checkAge($age){
    if ($age >= 18) {
        echo "You are eligible to vote";
    }else {
        echo "You are not eligible to vote";
    }
}

checkAge(18);
*/

#11. Check number is positive or negative
/*
function checkPositive($num){
    if ($num > 0) {
        echo "The number is positive";
    }elseif ($num < 0) {
        echo "The number is negative";
    }else {
        echo "The number is zero";
    }
}

checkPositive(0);

*/

#12. find the grade for the student after calculate the average of his scores.
/*
function checkGrade($score){
    $sum = 0;
    for ($i = 0; $i < count($score); $i++) {
        $sum += $score[$i];
    }
    $average = $sum / count($score);

    if ($average >= 90) {
        echo "Grade A";
    }elseif ($average >= 80) {
        echo "Grade B";
    }elseif ($average >= 70) {
        echo "Grade C";
    }elseif ($average >= 60) {
        echo "Grade D";
    }else {
        echo "Grade F";
    }
}
*/
