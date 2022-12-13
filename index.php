<?php 
    $phrase = "Nato nel 1994 ad opera del danese Rasmus Lerdorf, PHP era in origine una raccolta di script CGI che permettevano una facile gestione delle pagine personali.";

    $word = $_GET['word'];
    $phrase2 = str_replace("$word", "***", $phrase);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h1>Frase originale</h1>
    <p><?php echo $phrase ?></p>
    <span> Lunghezza Frase: <?php echo strlen($phrase); ?></span>

    <h1>Frase censurata</h1>
    <p><?php echo $phrase2 ?></p>
    <span> Lunghezza Frase: <?php echo strlen($phrase2); ?></span>
</body>
</html>