<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Samochody w warsztacie</title>
    <style type = "text/css">
        table{
            border: 2px solid red;
            background-color: #FFC;
        }
        th{
            border-bottom: 5px solid #000;
        }
        td{
            border-bottom: 2px solid #666;
        }
    </style>
</head>
<body>
    <center>
<h1>Lista samochodow aktualnie znajdujacych sie na warsztaie</h1>
<hr>
    <?php
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "mechanik";
    
        $dbcon = new mysqli($host,$user,$password,$database);

        $sql = "SELECT * FROM naprawy INNER JOIN samochody ON naprawy.id_samochodu = samochody.id WHERE data_przyjecia < CURDATE() AND data_wydania > CURDATE()";

        $sql_dane_samochody = mysqli_query($dbcon, $sql);

        echo "<table>";
        echo "<tr><th>Marka samochodu</th><th>Model samochodu</th><th>Usterka</th><th>Data wydania</th>";
        while($row = mysqli_fetch_assoc($sql_dane_samochody)){
            echo "<tr><td>";
            echo $row['marka'];
            echo "</td><td>";
            echo $row['model'];
            echo "</td><td>";
            echo $row['opis_usterki'];
            echo "</td><td>";
            echo $row['data_wydania'];
            echo "</td></tr>";
        }
        echo "</table>";
    ?>
    <br>
    <form action="../proj1/dodajSamochod.php">
    <input type="submit" value="Dodaj nowy samochód" />
    </form>
    <br>
    <form action="../proj1/index.php">
    <input type="submit" value="Strona główna" />
    </form>
</center>
</body>

</html>