<?php

    var_dump($_GET);

    // if (isset($_GET['lastName']) && isset($_GET['firstName'])) {
    //     $lastName = $_GET['lastName'];
    //     $firstName = $_GET['firstName'];
    // } else {
    //     $lastName = 'il manque le paramètre lastName';
    //     $firstName = 'il manque le paramètre firstName';
    // }
    
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Exo 1</title>
</head>

<body>

    <form class="container">
        <div class="form-group">
            <label for="exampleInputEmail1">Votre nom :</label>
            <input type="text" class="form-control" placeholder="Nom" name="lastName">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Votre prénom :</label>
            <input type="text" class="form-control" placeholder="Prénom" name="firstName">
        </div>

        <button href="user.php" type="submit" class="btn btn-primary">Envoyer</button>
        <button href="index.php" type="submit" class="btn btn-danger">Retour index</button>
    </form>

    <?php
        echo 'Votre nom : ' . $_GET['lastName'] . '</br>';
        echo 'Votre prénom : ' . $_GET['firstName'] . '</br>';

    ?>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>