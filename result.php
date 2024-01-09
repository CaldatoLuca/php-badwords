<?php
$text_area = $_GET['testo'];
$bad_word = $_GET['nome'];
$new_text_area = str_replace($bad_word, ' *** ', $text_area);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Badword Result</title>
</head>

<body class="d-flex justify-content-center align-items-center vh-100 bg-warning p-4">
    <div class="text-center gap-5  d-flex bg-dark p-5 rounded-3 shadow-lg text-white fw-bold">
        <!-- testo originale -->
        <div>
            <h3 class="text-warning mb-4">Original Text</h3>
            <p> <?php echo $text_area; ?></p>
            <div> <?php echo strlen($text_area) ?></div>
        </div>

        <!-- testo modificato -->
        <div>
            <h3 class="text-warning mb-4">Edited Text</h3>
            <p> <?php echo $new_text_area ?></p>
            <div> <?php echo strlen($new_text_area) ?>
            </div>
        </div>
    </div>
</body>

</html>