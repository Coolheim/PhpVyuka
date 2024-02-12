<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"tapy="text/css" href="style.css">
    <title>PHP kalkulačka</title>
</head>
<body>

    <main>
        <form action="index.php" method="post">
            <label>1. číslo: </label>
            <input type="number" name="firstNumber"><br>

            <label>2. číslo: </label>
            <input type="number" name="secondNumber"><br>

            <label>Operátory: </label>
            <select name="operator">
                <option value="scitani">+</option>
                <option value="odcitani">-</option>
                <option value="nasobeni">*</option>
                <option value="deleni">÷</option>
            </select><br>

            <input type="submit" name="submit" value="Spočítat">
                
        </form>
    
        <?php 
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $firstNumber = $_POST['firstNumber'];
            $secondNumber = $_POST['secondNumber'];
            $operator = $_POST['operator'];
            $vysledek = 0;
        }

        if ($operator === "scitani"){
            $vysledek = $firstNumber + $secondNumber;
            echo "Výsledek: " . $vysledek;
        } elseif ($operator === "odcitani"){
            $vysledek = $firstNumber - $secondNumber;
            echo "Výsledek: " . $vysledek;
        } elseif ($operator === "nasobeni"){
            $vysledek = $firstNumber * $secondNumber;
            echo "Výsledek: " . $vysledek;
        } elseif ($operator === "deleni"){
            $vysledek = $firstNumber / $secondNumber;
            echo "Výsledek: " . $vysledek;
        }
        ?>

    </main>

</body>
</html>