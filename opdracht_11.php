<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<form action="" method="post">
Naam: <input type="text" name="voornaam"><br>
Email: <input type="text" name="email"><br>
Leeftijd: <input type="text" name="leeftijd"><br>
<input type="submit" name="submit" value="verzenden">
</form>
<?php 
if (isset($_POST['submit'])) {
    $voornaam = htmlspecialchars($_POST['voornaam']);

    $email = htmlspecialchars($_POST['email']);

    $leeftijd = htmlspecialchars($_POST['leeftijd']);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo("<br>$email is a valid email address");
    } else { 
        echo("<br>$email is not a valid email address");
    }
    
    if (filter_var($leeftijd, FILTER_VALIDATE_INT)) {
        echo("<br>$leeftijd is a valid age");
    } else { 
        echo("<br>$leeftijd is not a valid age");
    }
      
    echo"<br>Er is op de submitbutton geklikt door: $voornaam<br><br>";
}
?>

</body>
</html>