<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potenzen von Zahlen</title>

</head>
<body>

<h2>Potenziere Zahlen</h2>

<table>
    <tr>
        <th>Zahl</th>
        <th>Quadratzahl</th>
        <th>Kubikzahl</th>
    </tr>

    <?php
    $zahl = 1;
    $obergrenze = 10;

    while ($zahl <= $obergrenze) {
        echo "<tr>
                <td>$zahl</td>
                <td>" . ($zahl ** 2) . "</td>
                <td>" . ($zahl ** 3) . "</td>
              </tr>";
        $zahl++;
    }





    ?>


</table>
<?php

echo "<br>";
echo"______________ "; echo"<br>";echo"My absolut"; 
echo"<br>";
echo"<br>";
function myAbs(){
 $i=rand(-5,5);
 $i=$i*$i;
 $i=sqrt($i);
 echo($i);
}
echo myAbs();

echo "<br>";
echo"______________ "; echo"<br>";echo"My Max"; 
echo"<br>";
echo"<br>";
function myMax(){
    $y=rand(6,10);
    $x=rand(1,5);
    $z=(max($x,$y));
    return $z;
}
echo (myMax());
    ?>
</body>
</html>
