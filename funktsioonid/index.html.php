
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


$summa = 0;

function word($txt){

    global $summa;
    $summa++;
    print("<h1>$summa.$txt </h1>");

}

word("Tooted");
print("<p>.Meie tootevalikus on tooteid igale inimesele.</p>");

word("Hinnakiri");
print("<p>.Soodsad asjad kogu perele!.</p>");


print("<hr>");


function text($txt, $size=3){

    #print("<font size="$size">$txt</font>";
    print("<font size='$size'>$txt<br></font>");
}

text("Pealkiri", 5);
text("Alapealkiri", 4);
text("Paragrahv", 3);



print("<hr>");

function addFive($number){

    $number += 5;

}

$orignum = 10;
addFive($orignum);
print($orignum);



?>


</body>

</html>
