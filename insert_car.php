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
		
		$marka = $_REQUEST['Marka'];
		$model = $_REQUEST['Model'];
		$rProd = $_REQUEST['rProd'];
        $nrVIN = $_REQUEST['nrVIN'];
        $wlasciciel = $_REQUEST['wlasciciel'];

		$sql = "INSERT INTO samochody(marka,model,rok_produkcji,vin,wlasciciel) VALUES ('$marka','$model','$rProd','$nrVIN','$wlasciciel')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Pomyślnie utworzono nowy samochód</h3>";

			echo nl2br("\n$marka\n $model\n $rProd\n $nrVIN\n $wlasciciel");
		} else{
			echo "Ups, coś poszło nie tak! $sql. "
				. mysqli_error($conn);
		}
		
		mysqli_close($conn);
		?>
        <br>
    <form action="../proj1/dodajSamochod.php">
    <input type="submit" value="Dodaj nowy samochód" />
    </form>
        <br>
    <form action="../proj1/samochody.php">
    <input type="submit" value="Wyświetl samochody obecnie będące w warsztacie" />
    </form>
        <br>
    <form action="../proj1/index.php">
    <input type="submit" value="Strona główna" />
    </form>
	</center>
</body>

</html>
