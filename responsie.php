<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<form action="" method="post">
Naam: <input type="text" name="voornaam"><br>
Adres: <input type="text" name="adres"><br>
Postcode / Plaats: <input type="text" name="popl"><br>
Email: <input type="text" name="email"><br>
Mondkapje:<input type="radio" name="mondkapje" value ="1.99"> Small ($1.99) <input type="radio" name="mondkapje" value ="2.99"> (Medium $2.99) <input type="radio" name="mondkpaje" value ="3.99">Large ($3.99)<br>  
Aantal: <input type="text" name="aantal"><br>
<input type="submit" name="submit" value="verzenden">
</form>
<?php 
if (isset($_POST['submit'])) {
    $voornaam = htmlspecialchars($_POST['voornaam']);

    $adres = htmlspecialchars($_POST['adres']);

    $popl = htmlspecialchars($_POST['popl']);

    $email = htmlspecialchars($_POST['email']);

    $aantal = htmlspecialchars($_POST['aantal']);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo("<br>$email is a valid email address");
    } else { 
        echo("<br>$email is not a valid email address");
    }
    
    if (filter_var($aantal, FILTER_VALIDATE_INT)) {
        echo("<br>$aantal is a valid qauntity");
    } else { 
        echo("<br>$aantal is not a valid qauntity");
    }
      
    echo"<br>Er is op de submitbutton geklikt door: $voornaam<br><br>";
;
<script type='text/javascript'>
     	$('select').change(function(){
        	var sum = 0;
        $('select :selected').each(function() {
            sum += Number($(this).val());
        });
        $("#amount").html(sum);
     });
	</script>

</body>
</html>