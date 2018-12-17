
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

?>


</body>

</html>
