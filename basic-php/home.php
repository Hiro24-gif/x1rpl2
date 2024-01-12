<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME</title>
</head>

<body>
    <h1>SELAMAT DATANG</h1>
    <?php
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $jenisKelamin = isset($_POST["gender"]) ? $_POST["gender"] : "OTHER";
    $negara = $_POST["country"];
    $bhs = isset($_POST["bahasa"]) ? implode(" ", $_POST["bahasa"]) : "ga ada";
    $bio = $_POST["bio"];

    ?>

    <div>
        <p>NAMA LENGKAP:
            <?= $fname . " " . $lname ?>
        </p>
        <p>JENIS KELAMIN:
            <?= $jenisKelamin ?>
        </p>
        <p>KEWARGANEGARAAN:
            <?= $negara ?>
        </p>
        <p>BAHASA YANG DIGUNAKAN:
            <?= $bhs ?>
        </p>
        <p>BIO:
            <?= $bio ?>
        </p>

    </div>
</body>

</html>