<?php
// declaration et initialisation de la variable $object et initialisation avec la valeur 'l'objet du message est mysterieux...'
$object = 'l\'objet du message est mysterieux...';
// declaration et initialisation de la variable $message
$message = 'la valeur de ce message est mysterieux mais vous n\en saurez pas plus...';
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exophp1</title>
</head>

<body>
    <p><?php echo $object; ?></p>
    <p><?php echo $message; ?></p>
</body>

</html>