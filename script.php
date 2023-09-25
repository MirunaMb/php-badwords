<?php
$paragraph = $_GET["paragraph"];
$word = $_GET["word-censored"];
$censored = "***";

$paragraph_censored = str_replace($word, $censored, $paragraph);
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

    <h2>Il testo censurato è :</h2>
    <p>
        <?php echo $paragraph_censored; ?>
    </p>
    <p>
        <?php echo "Il nuovo paragrafo è lungo: " . strlen($paragraph_censored) . " caratteri"; ?>
    </p>
</body>
</html>
