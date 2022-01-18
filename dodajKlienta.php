<!DOCTYPE html>
<html lang="pl">

<head>
	<title>Nowy klient</title>
</head>

<body>
	<center>
		<h1>Dodawanie nowego klienta</h1>

		<form action="insert_client.php" method="post">
			
			
			<p>
				<label for="Imie">Imię:</label>
				<input type="text" name="Imie" id="Imie">
			</p>
		
			<p>
				<label for="Nazwisko">Nazwisko:</label>
				<input type="text" name="Nazwisko" id="Nazwisko">
			</p>
			
			<p>
				<label for="Telefon">Numer telefonu:</label>
				<input type="number" name="Telefon" id="Telefon">
			</p>
			
			<input type="submit" value="Dodaj">
		</form>
        <br>
    <form action="../proj1/index.php">
    <input type="submit" value="Anuluj" />
    </form>
	</center>
</body>

</html>
