<?php
$text_area = $_GET['testo'];
$bad_word = $_GET['nome'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badword Result</title>
</head>

<body>
    <div>
        <?php echo $text_area; ?>
        <?php echo strlen($text_area) ?>
    </div>

    <div>
        <?php echo $bad_word; ?>
    </div>

</body>

</html>