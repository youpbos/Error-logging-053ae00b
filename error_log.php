<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Skateboard <small>(#1)</small></h1>
    <h1>Basketbal <small>(#2)</small></h1>
    <h1>Skeelers <small>(#3)</small></h1>

    <form action="error_log.php" method="_GET">
        <input type="number" name="input" id="">
        <button type="submit">submit</button>
    </form>
    <?php
    try {
        if (($_GET["input"] > 0) && ($_GET["input"] < 4)) {
            $_SESSION["choice"] = $_GET["input"];
            echo "<h1>Gekozen item: (#" . $_SESSION["choice"] . ")</h1>";
        } else {
            throw new Exception("geen geldige hoeveelheid");
        }
    } catch (Exception $e) {
        error_log("Gebruiker heeft een verkeet getal op gegeven!", 3, "error.php");
        echo "'fout melding gevonden': " . $e->getMessage(), "\n";
    }
    ?>
</body>

</html>