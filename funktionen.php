<?php
function myAbs($x,$y){
    echo"die asoluten Zahlen von"." $x"." und"." $y"."sind ";
    $x=$x*$x;
    $x=sqrt($x);
    $y=$y*$y;
    $y=sqrt($y);
    echo "$x "."und "." $y".".";
}

myAbs(rand(-5,5),rand(-5,5));
echo "<br>";
function mymax($x,$y){
    if ($x<$y){
        echo $y;}
        else{
            echo($x);
        }
    }
    mymax(rand(-5,5),rand(-5,5));
?>
