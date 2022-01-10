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

#################################################################

#Question 8:
#8 Write a PHP Script to replace the first word of the sentence with another word.

/*
function replace_first_word($str, $word) {
    return str_replace("Hello", $word, $str);
}

echo replace_first_word("Hello world", "Hi");

*/

#################################################################

#Question 9:
#9 Write a PHP Script to find the first character that is different between two strings.

/*
function find_first_difference($str1, $str2) {
    $str1 = str_split($str1);
    $str2 = str_split($str2);
    for ($i = 0; $i < count($str1); $i++) {
        if ($str1[$i] != $str2[$i]) {
            return "First difference is at index " . $i . "and is "  . $str1[$i] . " ". "vs " . $str2[$i];
        }
    }
    return "No difference";
}

echo find_first_difference("dragonball", "dragonboll");

*/


#################################################################

#Question 10:
#10 Write a PHP Script to put a string in an array, use the (var_dump) to view the array.
/*
function put_string_in_array($str) {
    return explode(" ", $str);
}

echo var_dump(put_string_in_array("Hello world"));

*/

#################################################################

#Question 11:
#11 Write a PHP Script to print the next letter of inputted letter.

/*
function next_letter($letter) {
    $letter = ord($letter);
    $letter++;
    return chr($letter);
}

echo next_letter("a");
*/

#################################################################

#Question 12:
#12 Write a PHP Script to insert a string at the specified position in a given string.
/*
function insert_string($str, $insert_str, $position) {
    return substr_replace($str, $insert_str, $position, 0);
}

echo insert_string("The brown fox", " quick", 3);
*/

#################################################################

#Question 13:
#13 Write a PHP Script to remove the zeroes from the given number.
/*
function remove_zeroes($num) {
    return str_replace("0", "", $num);
}

echo remove_zeroes("00123");
*/

#################################################################

#Question 14:
#14 Write a PHP Script to remove part of a string.
/*
function remove_part_of_string($str, $start, $end) {
    return substr_replace($str, "", $start, $end);
}

echo remove_part_of_string("The quick brown fox jumped over the lazy dog", 15, 5);
*/

#################################################################

#Question 15:
#15 Write a PHP Script to remove trailing dashes from a string.
/*
function remove_trailing_dashes($str) {
    return rtrim($str, "-");
}

echo remove_trailing_dashes("The quick brown fox jumped over the lazy dog---");
*/

#################################################################

#Question 16:
#16 Write a PHP Script to remove Special characters from the following string.

/*
function remove_special_characters($str) {
    return preg_replace("/[^a-zA-Z0-9]/", " ", $str);
}

echo remove_special_characters("\"\ 1+2/3*2:2-3/4*3'");
*/

#################################################################

#Question 17:
#17 Write a PHP Script to select first 5 words from the following string.
/*
function select_first_five_words($str) {
    return implode(" ", array_slice(explode(" ", $str), 0, 5));
}

echo select_first_five_words("The quick brown fox jumped over the lazy dog");
*/

#################################################################

#Question 18:
#18 Write a PHP Script to remove comma(s) from the following numeric string.

/*
function remove_commas($str) {
    return str_replace(",", "", $str);
}

echo remove_commas("2,543.12");

*/


#################################################################

#Question 19:
#19 Write a PHP Script to print letters from 'a' to 'z'.

/*
function print_letters_from_a_to_z() {
    for ($i = 97; $i <= 122; $i++) {
        echo chr($i) . " ";
    }
}

print_letters_from_a_to_z();
*/
