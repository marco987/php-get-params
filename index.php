<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>VOLUME</title>

    <?php
    // creare una pagina in PHP che legga in ingresso
    // 3 parametri numerici (in GET) che rappresentano
    // le 3 dimensioni di un parallelepipedo:
    // lunghezza, larghezza, altezza; stampare le 3 dimensioni
    // e calcolare il volume della figura (lun x lar x alt)

    // url http://localhost/index.php?larg=3&alt=4&prof=5

    $larghezza = $_GET["larg"];
    $altezza = $_GET["alt"];
    $profondita = $_GET["prof"];

    ?>


  </head>
  <body>

    <h1>Dimensioni parallelepipedo:</h1>
    <h1>Larghezza = <?php echo $larghezza ?></h1>
    <h1>Altezza = <?php echo $altezza ?></h1>
    <h1>Profondità = <?php echo $profondita ?></h1>

  </body>
</html>
