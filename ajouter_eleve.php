<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    echo $_POST['dateNaissance']."<br>";
    echo $_POST['nom']."<br>";
    echo $_POST['prenom']."<br>";
    date_default_timezone_set('Europe/Paris');
    $date = date("Y\-m\-d");
    echo "<br> la date est : "."'$date'"."<br>";
    ?>
  </body>
</html>
