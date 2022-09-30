<?php
$words1 = ["apple" => "яблуко", "table" => "таблиця", "banana" => "банан", "house" => "дім", "glass" => "склянка"];
$words2 = ["orange" => "апельсин", "wall" => "стіна", "table" => "стіл" , "light" => "світло", "glass" => "скло"];
$words = array_merge_recursive($words1, $words2);
$intersect1 = array_intersect_key($words1, $words2);
$intersect2 = array_intersect_key($words, $intersect1);
// array_push($words["glass"], "скло" );
print_r($words);