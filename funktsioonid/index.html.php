
<html>

<head>
<title>PHP</title>
</head>

<body>

<?php


$num = 120;
$newnum = abs($num);

print("Väärtus on: ".$newnum."<br>");
print ("<hr>");



function ABC($a) {

    print("$a<br>\n");

}


ABC("ABC");
ABC("ABCDEFG");
ABC("ABCDEFGHIJKL");


print("<hr>");


function liitmine($num1, $num2){

    $result = $num1 + $num2;
    return $result;
}

print ("Liitmise vastus on: ".liitmine(6, 9));

print("<hr>");


function tere(){

    print("Tere tulemast!");

}

$func_holder = "tere";
$func_holder();

print("<hr>");


function test(){

    $testmuutuja = "See on testmuutuja";

}


print("Test muutuja: $testmuutuja<br>");


print("<hr>");


$summa = 55;

function sum(){

    global $summa;
    print("Summa on: $summa");

}

sum();


?>


</body>

</html>
