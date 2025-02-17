<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potenzen von Zahlen</title>

</head>
<body>
<table border=1>
    <tr>
      <td>Zahl</td><td>Quadratzahl</td><td>Kubikzahl</td>  
</tr>
<?php   
$zahl=1;
$obergrenze=20;
While($zahl<=$obergrenze){
    echo
        "<tr>
        <td>". ($zahl). "</td>
        <td>". ($zahl**2) ."</td>
         <td>". ($zahl**3) ."</td>
        </tr>";
    $zahl++;
}
?>
</table>
</body>