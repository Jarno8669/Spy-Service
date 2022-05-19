<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <?php
   $vorigjaar = date_create("2021-02-01");
   $tweededatum = date_timestamp_get($vorigjaar);
   echo"<br>$vorigjaar";
   ?>
</body>
</html>