<?php


$text =  "Lorem ipsum dolor sit amet.";
$text2 =  "Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.";

echo strtolower($text).'<br>';
echo strtoupper($text).'<br>';

echo '<br>';
echo ucfirst(strtolower($text)).'<br>';


echo '<br>';


echo $text.' = '.strlen($text).' tähemärki.'.'<br>';
echo $text2.' = '.str_word_count($text2).' sõna.'.'<br>';