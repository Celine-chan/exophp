<?php
function showTrue() {
    return true;
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 1</title>
</head>

<body>
    <?= showTrue() . '</br>'?>

    <!-- savoir le type de la fonction : -->
    <?= gettype(showTrue()) ?>

    <!-- utiliser pour débuguer : -->
    <?= var_dump(showTrue()) ?>
    
</body>
</html>