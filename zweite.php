<html>
    <head>
</head>
<body>
<?php 
$arr1=array_fill(1,1000,0);
for ($p=2;$p<=Count($arr1);$p++){
  
for (($t=2*$p);$t<=1000;$t+=$p){
    $arr1[$t]=1; 
        
    }
}
for ($z=2;$z<=Count($arr1);$z++){
 if ($arr1[$z]==0)
 echo "$z"." "; 
}
echo "<br>";
echo "<br>";
/*
$arr1=array_fill(1,1000,true);
for ($p=2;$p<=Count($arr1);$p++){
  
for (($t=$p);($t*$p)<=count($arr1);$t=$t*$p){
    $arr1[$t]=false; 
        
    }
}
for ($z=2;$z<=Count($arr1);$z++){
 if ($arr1[$z]==true)
 echo "$z"." "; 
}
*/

echo "<br>";
echo"______________ "; echo"<br>";echo"Multidimensionle Arrays"; 
echo"<br>";
echo"<br>";
$Vorlesungen= array(
    array(5001,"Grundzüge",4,2137),
    array(5041,"Ethik",4,2125),
    array(5043,"Erkentnistheorie",3,2126),
    array(5043,"Mäotik",2,2125),
    array(5043,"Logik",2,2125),
);

$Professoren= array(
    
    array(2125,"Sokrates","C4",232),
    array(2126,"Russel","C4",232),
    array(2127,"Kopernikus","C3",310),
    array(2133,"Poper","C3",52),
    array(2134,"Augustinus","C3",309),
    array(2136,"Curie","C3",52),
    array(2137,"Kant","C3",309),
);
$Name="";
for ($a=0;$a<count($Vorlesungen);$a++){
    for($b=0;$b<count($Professoren);$b++){
        if($Vorlesungen[$a][3]==$Professoren[$b][0]){
            $Name=$Professoren[$b][1];
            break;
        }
        
    }
echo "VorlNr:".$Vorlesungen[$a][0]." gelesen von:".$Name." Sws: ".$Vorlesungen[$a][2];
echo"<br>";

}



$Professoren2= array(
    
    2125=>array("Sokrates","C4",232),
    2126=>array("Russel","C4",232),
    2127=>array("Kopernikus","C3",310),
    2133=>array("Poper","C3",52),
    2134=>array("Augustinus","C3",309),
    2136=>array("Curie","C3",52),
    2137=>array("Kant","C3",309),
);
$Vorlesungen2=array(
    array(5001,"Grundzüge",4,2137),
    array(5041,"Ethik",4,2125),
    array(5043,"Erkentnistheorie",3,2126),
    array(5043,"Mäotik",2,2125),
    array(5043,"Logik",2,2125),

);

for ($i=0;$i<count($Vorlesungen2);$i++){
    $Name2=$Professoren2[$Vorlesungen2[$i][3]][0];
echo"Vorlesungsnummer:".$Vorlesungen2[$i][0]." Thema:".$Vorlesungen2[$i][1]." Gelesen von: "."$Name2"."<br>";


}
echo "<br>";
echo"______________ "; echo"<br>";echo"Eingabe Feld"; 
echo"<br>";
echo"<br>";

?>
<!--<form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form> -->
<h1>Call function by click:</h1>

<form action=<?php echo $_SERVER["PHP_SELF"] ?>>
Number1: <input type="number" name="number1"><br>
Number2: <input type="number" name="number2"> <br>
<input type="submit" name="callFunc2" Value="Add">
</form>




<form method="post" action= <?php echo $_SERVER["PHP_SELF"] ?>>
<input type="submit" name="callFunc1" value="GO"></form>



<?php
if(isset($_REQUEST['callFunc1'])){
func1();
}
function func1() {
//do stuff

echo "<br>Called func1<br>";
}

if(isset($_REQUEST['callFunc2'])){
    func2();
    }

    function func2() {
    //do stuff
    $_POST["number1"];
    echo $_SERVER["number1"];
    }
    
    echo "<br>";
    echo"______________ "; echo"<br>";echo"Eingabefeld mit zurückspeicher"; 
    echo"<br>";
    echo"<br>";

?>

<h1>Add two numbers:</h1>
<?php
session_start();
$number1="";
if(isset($_REQUEST['number1'])) $number1=$_REQUEST['number1'];
$number2="";
if(isset($_REQUEST['number2'])) $number2=$_REQUEST['number2'];
$_SESSION["1"] = $_SERVER['PHP_SELF'];

?>

<form action=<?php echo $_SERVER["PHP_SELF"] ?> method="post">
Number1: <input type="text" name="number1" value="<?php echo $number1?>"><br>
Number2: <input type="text" name="number2"  value="<?php echo $number2?>"><br>
<input type="submit" value="Add" name="call_add2numbers">
</form>
<?php
if(isset($_REQUEST['call_add2numbers']) && is_numeric($_REQUEST['number1']) &&
is_numeric($_REQUEST['number2'])){
func_add2numbers($_REQUEST['number1'], $_REQUEST['number2']);
}
function func_add2numbers($nbr1, $nbr2) {
echo "Result: ". $nbr1 . "+".$nbr2."=". ($nbr1+$nbr2) . "<br>";
print_r($_SESSION);
}
?>


</body>
</html>