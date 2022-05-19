<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
 <?php
$dagen = array("maandag", "dinsdag", "woensdag", "donderdag", "vrijdag", "zaterdag", "zondag");
echo"<br> De eerste dag is: $dagen[0]";
echo"<br> De tweede dag is: $dagen[1]";
echo"<br> De derde dag is: $dagen[2]";
echo"<br> De vierde dag is: $dagen[3]";
echo"<br> De vijfde dag is: $dagen[4]";
echo"<br> De zesde dag is: $dagen[5]";
echo"<br> De zevende dag is: $dagen[6]";

  foreach($dagen as $x => $val) {
    echo "<br>$x = $val<br>";
  }
?>   
</body>
</html>