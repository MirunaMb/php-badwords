<?php
$paragraph = $_GET["paragraph"]; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h2>La tua frase originale :</h2>
    <p>
        <?php echo $paragraph; ?>
    </p>
    <p>
        <?php echo "La tua frase ha : " . strlen($paragraph) . " caratteri"; ?>
    </p>
</body>

</html>