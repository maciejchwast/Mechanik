<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Wizyty w warsztacie</title>
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
<h1>Lista wszystkich wizyt w warsztacie</h1>
<hr>
    <?php
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "mechanik";
    
        $dbcon = new mysqli($host,$user,$password,$database);

        $sql = "SELECT klienci.Imie,Nazwisko, samochody.model,marka, naprawy.* FROM naprawy INNER JOIN klienci ON naprawy.id_klienta = klienci.id INNER JOIN samochody ON naprawy.id_samochodu = samochody.id";

        $sql_dane_naprawy = mysqli_query($dbcon, $sql);

        echo "<table>";
        echo "<tr><th>ID wizyty</th><th>Klient</th><th>Samochód</th><th>Data przyjecia</th><th>Data wydania</th><th>Opis usterki</th><th>Uzyte czesci</th><th>Koszt robocizny</th><th>Koszt czesci</th><th>Koszt calkowity</th>";
        while($row = mysqli_fetch_assoc($sql_dane_naprawy)){
            echo "<tr><td>";
            echo $row['id'];
            echo "</td><td>";
            echo $row['Imie'];
            echo " ";
            echo $row['Nazwisko'];
            echo "</td><td>";
            echo $row['marka'];
            echo " ";
            echo $row['model'];
            echo "</td><td>";
            echo $row['data_przyjecia'];
            echo "</td><td>";
            echo $row['data_wydania'];
            echo "</td><td>";
            echo $row['opis_usterki'];
            echo "</td><td>";
            echo $row['uzyte_czesci'];
            echo "</td><td>";
            echo $row['koszt_robocizny'];
            echo "</td><td>";
            echo $row['koszt_czesci'];
            echo "</td><td>";
            echo $row['koszt_robocizny']+$row['koszt_czesci'];
            echo "</td></tr>";
        }
        echo "</table>";
    ?>
    <br>
    <form action="../proj1/dodajNaprawe.php">
    <input type="submit" value="Dodaj nową wizytę" />
    </form>
    <br>
    <form action="../proj1/index.php">
    <input type="submit" value="Strona główna" />
    </form>
    </center>
</body>

</html>