 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POTĘGOWANIE</title>
</head>
<body>
    <form action="strona2.php" method="GET">
    <header>
        <a href="index.html"><img src="baner.jpg" alt="baner"></a>
    </header>
        <nav>
            <a href="strona1.html">- Proste działania</a><br>
            <a href="strona2.php">- Potęgowanie</a>
        </nav>

            <h1>POTĘGOWANIE</h1>
            <p><i>Podaj podstawę potęgi:</i><input type="number" name="pod"/></p>
            <p><i>Podaj wykładnik:</i><input type="number" name="wyk"/></p>
            <p>
                <input type="submit" value="POTĘGOWANIE">
            </p>
    </form>
        <?php
        if(isset($_GET['pod']) && isset($_GET['wyk'])) {
            if($_GET['wyk'] < 0) {
                echo "Wpisz wykładnik dodatni";
            }
            $a = $_GET['pod'];
            $b = $_GET['wyk'];
            $w = 0;
            if($b == 0) {
                $w = 1;
                echo "Wynik potęgowania wynosi: " . $w;
            } 
            else {
                $x = $a;
                for($i = 1; $i < $b; $i++) {
                    $x *= $a;
                }
                $w = $x;
                echo "Wynik potęgowania wynosi: " . $w;
            }
        } 
        else {
            echo "Wpisz podstawę i wykładniik potęgi";
        }
        ?>
</body>
</html>