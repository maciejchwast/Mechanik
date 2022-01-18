<!DOCTYPE html>
<html lang="pl">

<head>
	<title>Nowa naprawa</title>
</head>

<body>
	<center>
		<h1>Dodawanie nowej wizyty w warsztacie</h1>

		<form action="insert_fix.php" method="post">
			
			<p>
                <?php 
                    $host = "localhost";
                    $user = "root";
                    $password = "";
                    $database = "mechanik";
                
                    $dbcon = new mysqli($host,$user,$password,$database);
            
                    $sqlSamochod = "SELECT id, marka, model, wlasciciel FROM samochody";
            
                    $sql_dane = mysqli_query($dbcon, $sqlSamochod);
                    echo '<label for="wyborSamochodu">Wybierz samochod:</label>';
                    echo '<select name="wyborSamochodu" id = "wyborSamochodu" >';
                    while($row = mysqli_fetch_assoc($sql_dane)){
                        echo '<option value = "';
                        echo $row['id'];
                        echo '">';
                        echo $row['marka'];
                        echo ' ';
                        echo $row['model'];
                        echo ' ';
                        echo $row['wlasciciel'];
                        echo '</option>';
                    }
                    echo '</select>';
                    echo '</p>';
                    echo '<p>';
                    $sqlKlient = "SELECT id,Imie,Nazwisko FROM klienci";
            
                    $sql_dane_klient = mysqli_query($dbcon, $sqlKlient);
                    echo '<label for="wyborKlienta">Wybierz klienta:</label>';
                    echo '<select name="wyborKlienta" id = "wyborKlienta" >';
                    while($row = mysqli_fetch_assoc($sql_dane_klient)){
                        echo '<option value = "';
                        echo $row['id'];
                        echo '">';
                        echo $row['Imie'];
                        echo ' ';
                        echo $row['Nazwisko'];
                        echo '</option>';
                    }
                    echo '</select>';
                ?>
</p>
<p>
				<label for="dataPrzyjecia">Data przyjecia do warsztatu:</label>
				<input type="date" name="dataPrzyjecia" id="dataPrzyjecia">
			</p>



			
			
<p>
				<label for="dataWydania">Przewidywana data oddania samochodu:</label>
				<input type="date" name="dataWydania" id="dataWydania">
			</p>



			
                    
<p>
				<label for="opis">Opis usterki:</label>
				<input type="text" name="opis" id="opis">
			</p>
            <p>
				<label for="czesci">Użyte części:</label>
				<input type="text" name="czesci" id="czesci">
			</p>
            <p>
				<label for="kosztRob">Koszt robocizny:</label>
				<input type="number" name="kosztRob" id="kosztRob">
			</p>
            <p>
				<label for="kosztMat">Koszt materiałów:</label>
				<input type="number" name="kosztMat" id="kosztMat">
			</p>


			


			
			<input type="submit" value="Dodaj nową wizytę">
		</form>
        <br>
        <form action="../proj1/index.php">
    <input type="submit" value="Anuluj" />
    </form>
	</center>
</body>

</html>
