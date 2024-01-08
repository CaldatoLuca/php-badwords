<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>

<body>
    <h1>BadWords</h1>

    <form action="result.php" method="GET">
        <label for="text">Inserisci il testo</label>
        <textarea name="" id="text" cols="30" rows="10"></textarea>

        <label for="badword">Inserisci la parola da eliminare</label>
        <input type="text" id="badword">

        <button>Send</button>
    </form>
</body>

</html>