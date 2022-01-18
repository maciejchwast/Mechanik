<!DOCTYPE html>
<html>

<head>
	<title>Gotowe!</title>
</head>

<body>
	<center>
		<?php

		$conn = mysqli_connect("localhost", "root", "", "mechanik");

		if($conn === false){
			die("ERROR: Nie nawiązano połączenia. "
				. mysqli_connect_error());
		}
		
		$imie = $_REQUEST['Imie'];
		$nazwisko = $_REQUEST['Nazwisko'];
		$nrTelefonu = $_REQUEST['Telefon'];

		$sql = "INSERT INTO klienci(Imie,Nazwisko,Telefon) VALUES ('$imie',
			'$nazwisko','$nrTelefonu')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Pomyślnie utworzono nowego klienta</h3>";

			echo nl2br("\n$imie\n $nazwisko\n "
				. "$nrTelefonu");
		} else{
			echo "Ups, coś poszło nie tak! $sql. "
				. mysqli_error($conn);
		}
		
		mysqli_close($conn);
		?>
		<br>
    <form action="../proj1/dodajKlienta.php">
    <input type="submit" value="Dodaj kolejnego klienta" />
    </form>
        <br>
    <form action="../proj1/klienci.php">
    <input type="submit" value="Wyświetl wszystkich klientów" />
    </form>
        <br>
    <form action="../proj1/index.php">
    <input type="submit" value="Strona główna" />
    </form>
	</center>
</body>

</html>
