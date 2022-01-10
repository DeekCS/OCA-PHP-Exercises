<?php
#Qustion 1:
##1.1 Convert the entered string to upper case.
/*
function upper_case($str)
{
    return strtoupper($str);
}

echo(upper_case("hi world"));
*/

##1.2 Convert the entered string to lower case.
/*
  function lowe_case($str)
  {
  return strtolower($str);
  }
  echo(lowe_case("HI WORLD"));
 */

##1.3 Make the first letter of the entered string capital.

/*
function first_letter_uppercase($str) {
    return ucfirst($str);
}

echo first_letter_uppercase("hello world");

*/

##1.4 Make the first letter of each word in the entered string capital.

/*
function first_letter_uppercase_each_word($str) {
    return ucwords($str);
}

echo first_letter_uppercase_each_word("hello world");

*/

#################################################################

#Question 2:
#2.1 Write a PHP Script splitting the following numeric string to be a time format.
//
//function time_format($str) {
//    return date("h:i:s", $str);
//}
//
//echo time_format("123045");

#################################################################

#Question 3:
#3 Write a PHP Script to check whether the sentence contains a specific word or not.

/*
function check_word($str, $word) {
    if (strpos($str, $word) !== false) {
        return "Word found";
    } else {
        return "Word not found";
    }
}
echo check_word("Hello world", "world");
*/

#################################################################

#Question 4:
#4 Write a PHP Script to extract the file name from the URL.

/*
function get_file_name($url) {
    return basename($url);
}
echo get_file_name("https://www.orange.com/index.php");

*/

#################################################################

#Question 5:
#5 Write a PHP Script to extract the username from the email address.
/*
function get_user_name($email) {
    return substr($email, 0, strpos($email, "@"));
}

echo get_user_name("info@orange.com");

*/

#################################################################

#Question 6:
#6 Write a PHP Script to extract last three characters from the string.
/*
function get_last_three_characters($str) {
    return substr($str, -3);
}

echo get_last_three_characters("info@orange.com");
*/

#################################################################

#Question 7:
#7 Write a PHP Script to generate simple random password without rand function from a given string.

/*
function generate_random_password($str_length) {
    $chars= "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ01234567890";
    return substr(str_shuffle($chars),0,$str_length);
}

echo generate_random_password(8);

*/