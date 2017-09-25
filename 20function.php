<?php
echo '<h1> 10 Array Function </h1>';

$Array_fill = array_fill(1, 3, 'jie cai');
echo'<h2> 1.Array_fill function </h2></br>';
print_r($Array_fill);
echo '<hr>';

$Random_array = array ('I','am','learning','php','and','html','.');
echo '<h2> 2.Array_chunk function </h2></br>';
print_r(array_chunk($Random_array, 3, true));
echo '<hr>';
 
$a=array("1" => "first", "2" =>"second","3"=>"third", "fourth");
$b=array("first","2"=>"second","fourth");
$c=array_diff_assoc($a, $b);
echo "<h2> 3.Array_diff_assoc function </h2></br>";
print_r($c);
echo '<hr>';



 ?>
