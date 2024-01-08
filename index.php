<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Badwords</title>
</head>

<body class="d-flex justify-content-center align-items-center flex-column vh-100 bg-warning">
    <!-- blocco centrale -->
    <div class="text-center bg-dark p-5 rounded-3 shadow-lg mb-5">
        <!-- titolo -->
        <h1 class="text-info mb-3">BadWords</h1>

        <!-- form -->
        <form action="result.php" method="GET" class="d-flex justify-content-center align-items-center flex-column">
            <!-- textarea -->
            <label for="text" class="form-label text-warning fw-bold">Insert Text Here</label>
            <div class="input-group mb-3" id="text">
                <textarea class="form-control" aria-label="With textarea" name="testo"></textarea>
            </div>

            <!-- input -->
            <label for="badword" class="form-label text-warning fw-bold">Insert Word to Erase</label>
            <input type="text" class="form-control mb-4" id="badword" aria-describedby="basic-addon3 basic-addon4" name="nome">

            <!-- bottone -->
            <button class="btn btn-primary">Send</button>
        </form>
    </div>

    <!-- istruzioni -->
    <h4 class="fw-bold text-danger">Badwords removes the desired word from a text, replacing it with three asterisks</h4>
    <h5 class="fw-bold text-danger">It also shows the length of the text before and after editing</h5>

</body>

</html>