<!DOCTYPE html>
<html lang="pl">

<head>
	<title>Nowy samochod</title>
</head>

<body>
	<center>
		<h1>Dodawanie nowego samochodu</h1>

		<form action="insert_car.php" method="post">
			
			
<p>
				<label for="Marka">Marka samochodu:</label>
				<input type="text" name="Marka" id="Marka">
			</p>



			
			
<p>
				<label for="Model">Model samochodu:</label>
				<input type="text" name="Model" id="Model">
			</p>



			
			
<p>
				<label for="rProd">Rok produkcji samochodu:</label>
				<input type="number" name="rProd" id="rProd">
			</p>
            <p>
				<label for="nrVIN">Numer VIN samochodu:</label>
				<input type="text" name="nrVIN" id="nrVIN">
			</p>
            <p>
				<label for="wlasciciel">Właściciel samochodu:</label>
				<input type="text" name="wlasciciel" id="wlasciciel">
			</p>


			


			
			<input type="submit" value="Dodaj nowy samochód">
		</form>
        <br>
        <form action="../proj1/index.php">
    <input type="submit" value="Anuluj" />
    </form>
	</center>
</body>

</html>
