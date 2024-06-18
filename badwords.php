<?php 

var_dump($_GET);

$my_text = $_GET['text'];
$badword = $_GET['bad'];

$my_text_length = strlen($my_text);

$text_censored = str_ireplace($badword, '***', $my_text);
$text_censored_length = strlen($text_censored);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
    <h2>text</h2>
    <p> <?php echo $my_text; ?> </p>
    <h2>badword</h2>
    <p> <?php echo $badword; ?> </p>
    <h2>text length</h2>
    <p> <?php echo $my_text_length; ?> </p>
    <h2>text censored</h2>
    <p> <?php echo $text_censored; ?> </p>
</head>
<body>
    
</body>
</html>
