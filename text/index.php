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
