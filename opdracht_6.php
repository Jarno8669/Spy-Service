<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="css/tabellenstyle.css">
</head>

<body>
    <?php

    $eerste_getal = 6;
    $tweede_getal = 8;

    $uitkomst = $eerste_getal + $tweede_getal;

    echo "De uitkomst is: $uitkomst <br>";

    $uitkomst = $eerste_getal * $tweede_getal;

    echo "De uitkomst is: $uitkomst <br>";

    $Naam = "Jarno";
    $Nederlands = 7;
    $Engels = 8;
    $Wiskunde = 8;
    $Gemiddelde = ($Nederlands + $Engels + $Wiskunde) / 3;


    $Naam2 = "Mielban";
    $Nederlands2 = 1;
    $Engels2 = 5;
    $Wiskunde2 = 3;
    $Gemiddelde2 = ($Nederlands2 + $Engels2 + $Wiskunde2) / 3;

    $Naam3 = "Migal";
    $Nederlands3 = 2;
    $Engels3 = 6;
    $Wiskunde3 = 3;
    $Gemiddelde3 = ($Nederlands3 + $Engels3 + $Wiskunde3) / 3;

    $Naam4 = "Tino";
    $Nederlands4 = 8.3;
    $Engels4 = 10;
    $Wiskunde4 = 10;
    $Gemiddelde4 = ($Nederlands4 + $Engels4 + $Wiskunde4) / 3;



    echo "<br><table>
    <tr>
        <th>Naam-</th>
        <th>Nederlands-</th>
        <th>Engels-</th>
        <th>Wiskunde-</th>
        <th>Gemiddelde-</th>
    </tr>
<tr>
      <td>$Naam</td>
      <td>$Nederlands</td>
     <td>$Engels</td>
     <td>$Wiskunde</td>
     <td>$Gemiddelde</td>
</tr>
<tr>
    <td>$Naam2</td>
    <td>$Nederlands2</td>
    <td>$Engels2</td>
    <td>$Wiskunde2</td>
    <td>$Gemiddelde2</td>
</tr>
<tr>
    <td>$Naam3</td>
    <td>$Nederlands3</td>
    <td>$Engels3</td>
    <td>$Wiskunde3</td>
    <td>$Gemiddelde3</td>
</tr>
<tr>
 <td>$Naam4</td>
 <td>$Nederlands4</td>
 <td>$Engels4</td>
 <td>$Wiskunde4</td>
<td>$Gemiddelde4</td>
</tr>
  </table>"
    ?>

<a href="opdracht_1.docx">Documentje OPDR1</a></li>
</body>
</html>