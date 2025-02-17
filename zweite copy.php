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
</body>
</html>