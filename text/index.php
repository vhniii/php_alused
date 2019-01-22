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


echo '<br>';
echo '<br>';


$textt = "       Lorem ipsum dolor sit amet.    ";

echo "<pre>$textt</pre>".'<br>';
echo "<pre>".trim($textt)."</pre>".'<br>';
echo "<pre>".ltrim($textt)."</pre>".'<br>';
echo "<pre>".rtrim($textt)."</pre>".'<br>';


echo '<br>';
echo '<br>';

echo trim($text, "L, r, u..t");

echo '<br>';
echo '<br>';
echo '<br>';

$code = '<b>Experience</b> <a href=\"#\">is</a> the teacher <br>of fools';

echo strip_tags($code).'<br>';
echo strip_tags($code , '<b>, <br>');


echo '<br>';
echo '<br>';
echo '<br>';


echo $text[0].'<br>';
echo $text[4].'<br>';


echo substr($text, 3, 8).'<br>';
echo substr($text, 2, 5).'<br>';
echo substr($text, -5, 7).'<br>';

echo '<br>';
echo '<br>';

echo print_r(str_word_count($text, 1));