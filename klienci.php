<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Klienci</title>
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
<h1>Lista wszystkich klientow</h1>
<hr>
    <?php
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "mechanik";
    
        $dbcon = new mysqli($host,$user,$password,$database);

        $sql = "SELECT * FROM klienci";

        $sql_dane_klienci = mysqli_query($dbcon, $sql);

        echo "<table>";
        echo "<tr><th>ID klienta</th><th>Imie klienta</th><th>Nazwisko klienta</th><th>Nr telefonu</th><th>Ilosc odbytych wizyt</th>";
        while($row = mysqli_fetch_assoc($sql_dane_klienci)){
            $id_klienta = $row['id'];
            $ile_wizyt ="SELECT COUNT(id) FROM naprawy WHERE id_klienta = $id_klienta";
            $result_wizyty = mysqli_query($dbcon, $ile_wizyt);
            $final_row = mysqli_fetch_assoc($result_wizyty);
            $ile_wizyt_liczba = $final_row['COUNT(id)'];
            echo "<tr><td>";
            echo $row['id'];
            echo "</td><td>";
            echo $row['Imie'];
            echo "</td><td>";
            echo $row['Nazwisko'];
            echo "</td><td>";
            echo $row['Telefon'];
            echo "</td><td>";
            echo $ile_wizyt_liczba;
            echo "</td></tr>";
        }
        echo "</table>";
    ?>
    <br>
    <hr>
    <br>
       <form action="../proj1/dodajKlienta.php">
    <input type="submit" value="Dodaj nowego klienta" />
    </form>
    <br>
    <form action="../proj1/index.php">
    <input type="submit" value="Strona główna" />
    </form>
</center>
</body>

</html>