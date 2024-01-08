<?php
$text_area = $_GET['testo'];
$bad_word = $_GET['nome'];
$new_text_area = str_replace($bad_word, '***', $text_area);


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
        <?php echo $new_text_area ?>
        <?php echo strlen($new_text_area) ?>

    </div>

</body>

</html>