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

$array=array('ha','haha','hahaha','ha','hahah');
echo "<h2> 4.Array_keys function </h2></br>"; 
print_r(array_keys($array,'haha'));
echo '<hr>';

$popcorn = array( 'flavorA','flavorB','falvorC');
$No_C = array_pop($popcorn);
echo "<h2> 5.Array_pop function </h2></br>"; 
print_r($No_C);
echo '<hr>';

$search_key = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');
echo "<h2> 6.array_search function </h2></br>"; 
print_r(array_search('red', $search_key));
echo "<hr>";

$Count_value = array('ha', 'haha', 'ha');
echo "<h2> 7.array_count_values function </h2></br>"; 
print_r(array_count_values ($Count_value));
echo '<hr>';

 ?>
