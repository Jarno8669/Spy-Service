<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>

<form action="" method="post">
Naam: <input type="text" name="voornaam"><br>
Geslacht: <input type="radio" name="Geslacht"> <input type="radio" name="Geslacht"><br>
Adres: <input type="text" name="Adres"><br>
Postcode: <input type="text" name="Postcode"><br>
Plaats: <input type="text" name="Plaats"><br>
Email: <input type="text" name="Email"><br>
Datum: <input type="date" name="Datum"><br>
Vraag: <input type="text" name="Vraag"><br>
<input type="submit" name="submit" value="verzenden">
</form>
<?php 
if (isset($_POST['submit'])) {
    $voornaam = htmlspecialchars($_POST['voornaam']);

    echo"Er is op de submitbutton geklikt door: $voornaam<br><br>";
}
?>

</body>
</html>