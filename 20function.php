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

$smile= array('ha','haha','hahaha','ha','hahah');
sort($smile);
echo "<h2> 8.sort function </h2></br>";
foreach ($smile as $key => $val) {
    echo "simle [" . $key . "] = " . $val . "\n";
}
echo"<hr>";

echo "<h2> 9.array_pad function </h2></br>";
$smile= array('ha','haha','hahaha','ha','hahah');
print_r(array_pad($smile, 7, "ha"));
echo "<hr>";

echo "<h2> 10.array_push function </h2></br>";
$laughing = array('ha','haha','hahaha','ha','hahah');
array_push($laughing, 'hahahhahaha','hahahahhaahahahahaahahhaha');
print_r($laughing);
echo "<hr>";

echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";


echo '<h1> 10 String Function </h1>';

echo "<h2> 1. addcslashes function </h2></br>";
print_r(addcslashes("jsi sjij ifwiew {.} oowo", "z..A"));
echo "<hr>";

echo "<h2> 2. addslashes function </h2></br>";
print_r(addslashes("jsi sji[]j if'w ie w oowo"));
echo "<hr>";

echo "<h2> 3. print function </h2></br>";
print "this is print function hahahahhaahahahahaahahhaha";
echo "<hr>";

echo "<h2> 4. echo function </h2></br>";
$sentence = "this is echo function";
echo "hahahahhaahahahahaahahhaha $sentence";
echo "<hr>";


echo "<h2> 5. substr function </h2></br>";
print_r(substr("I just started the PHP coding", -7,1));
echo "<hr>";

echo "<h2> 6. str_split function </h2></br>";
$laughing = "hahaha";
print_r(str_split($laughing,2));
echo "<hr>";
 
echo "<h2> 7. explode function </h2></br>";
$laughing = "ha/haha/hahaha/hahahaha";
$loud = explode("/", $laughing);
echo $loud [3];
echo "<hr>";

echo "<h2> 8. str_replace function </h2></br>";
$live = "you should laugh like this: ha haha hahaha hahahaha";
$smile = array("ha","haha");
$laugh =array("hahaha","hahah");
$then = str_replace($smile, $laugh, $live);
echo $then;
echo "<hr>";

 ?>
