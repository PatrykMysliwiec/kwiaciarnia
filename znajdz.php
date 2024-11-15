<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwiaty</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <header>
        <h1>Grupa Polskich Kwiaciarni</h1>
    </header>
    <aside>
        <h2>Menu</h2>
        <ol>
            <li><a href="./index.html">Strona główna</a></li>
            <li><a href="https://www.kwiaty.pl/" target="_blank">Rozpoznaj kwiaty</a></li>
            <li><a href="znajdz.php">Znajdź Kwiaciarnie</a></li>
                <ul>
                    <li>w Warszawie</li>
                    <li>w Malborku</li>
                    <li>W Poznaniu</li>
                </ul>
            </li>
        </ol>
    </aside>
    <main>
        <h2>Znajdź kwiaciarnię</h2>
        <form action="./znajdz.php" method="POST">
            Podaj nazwę miasta:<input type="text" name="znajdz" id="">
            <input type="submit" name="" id="" value="SPRAWDŹ">
        </form>
        <?php
        $polaczenie = mysqli_connect('localhost', 'root', '', 'kwiaciarnia');
        if (isset($_POST['znajdz'])) {
            $znajdz = $_POST['znajdz'];
            $sql = "SELECT `nazwa`, `ulica` FROM kwiaciarnie WHERE miasto = '$znajdz';";
            $wynik = mysqli_query($polaczenie, $sql);
            while ($wiersz = mysqli_fetch_assoc($wynik)) {
                echo "<h3>".$wiersz['nazwa'].", ".$wiersz['ulica']."</h3>";
            }
            mysqli_close($polaczenie);
        }
        
        ?>
    </main>
    <footer>
        <p>Stronę opracował: 1234</p>
    </footer>
</body>
</html>