<!DOCTYPE html>
<html>
<head>
    <title>Censorchip PHP</title>
</head>
<body>
    <?php
        $paragrafo = $_POST['paragrafo'];
        $parola = $_POST['parola'];

        // stampo a schermo il paragrafo e la sua lunghezza
        echo "<p>Paragrafo: " . $paragrafo . "</p>";
        echo "<p>Lunghezza del paragrafo: " . strlen($paragrafo) . "</p>";

        // stampo a schermo il paragrafo censurato e la sua lunghezza
        $paragrafo_censurato = str_ireplace($parola, '***', $paragrafo);
        echo "<p>Paragrafo censurato: " . $paragrafo_censurato . "</p>";
        echo "<p>Lunghezza del paragrafo censurato: " . strlen($paragrafo_censurato) . "</p>";
    ?>
</body>
</html>