<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Get params</title>

    <?php  
        $lunghezza = $_GET["lung"];
        $larghezza = $_GET["larg"];
        $altezza = $_GET["alt"];
        $volume = $lunghezza*$larghezza*$altezza;
    ?>

</head>
<body>
    <p>
    Creare una pagina in PHP che legga in ingresso 3 parametri numerici (in GET) che rappresentano le 3 dimensioni 
    di un parallelepipedo: lunghezza, larghezza, altezza; stampare le 3 dimensioni e calcolare il volume della figura (lun x lar x alt).
    </p>
    <h1>La lunghezza è: <?php echo $lunghezza; ?></h1>
    <h1>La larghezza è: <?php echo $larghezza; ?></h1>
    <h1>L'altezza è: <?php echo $altezza; ?></h1>
    <br>
    <h1>Il volume della figura è: <?php echo $volume; ?></h1>
</body>
</html>