<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hoja de vida PHP</title>
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>
    <?php
        $nombre = "Juan Diego";
        $profesion = "Ingeniero de sistemas";
        $edad = 10;
        $habilidades = [ //Arreglo
            "HTML",
            "CSS",
            "java",
            "C#",
            "JavaScript",
        ];
    ?> 
    
    <h1><?php echo $nombre ?></h1>
    <h2><?php echo $profesion ?></h2>
    <p><?php echo "Soy " . $nombre ." y soy ". $profesion ?></p> <!-- Concatenacion -->

    <?php if($edad >= 18):?> <!-- Condicionales -->
        <p>Disponioble para trabajar</p>
    <?php else:?>
        <p>Menor de edad - no puede trabajar</p>
    <?php endif; ?>

</body>
</html>