<?php
$name = 'Bob';
$age  = '27';
$string = 'This is an example string';

$string_word_count = str_word_count($string);
echo $string_word_count;
echo "<br>Your Name is $Bob and your age is $age<br>";
echo '<input type="text" name="name">';
echo '<br>';
if ($age>=21) {
echo ('You\'re over 21!');
}

?>
