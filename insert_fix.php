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
		
		$samochod = $_REQUEST['wyborSamochodu'] ?? null;
		$klient = $_REQUEST['wyborKlienta'];
		$dataPrzyjecia = $_REQUEST['dataPrzyjecia'];
        $dataWydania = $_REQUEST['dataWydania'];
        $opisUsterki = $_REQUEST['opis'];
        $czesci = $_REQUEST['czesci'];
        $robocizna = $_REQUEST['kosztRob'];
        $kosztCzesci = $_REQUEST['kosztMat'];


		$sql = "INSERT INTO naprawy(id_klienta, id_samochodu,data_przyjecia,data_wydania,opis_usterki,uzyte_czesci,koszt_robocizny,koszt_czesci)
        VALUES ('$samochod','$klient','$dataPrzyjecia','$dataWydania','$opisUsterki','$czesci','$robocizna','$kosztCzesci')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Pomyślnie utworzono nową wizytę</h3>";

			echo nl2br("\n$samochod\n $klient\n $dataPrzyjecia\n $dataWydania\n $opisUsterki\n $czesci\n $robocizna\n $kosztCzesci");
		} else{
			echo "Ups, coś poszło nie tak! $sql. "
				. mysqli_error($conn);
		}
		
		mysqli_close($conn);
		?>

    <br>
    <form action="../proj1/dodajNaprawe.php">
    <input type="submit" value="Dodaj kolejną naprawę" />
    </form>
    <br>
    <form action="../proj1/wizyty.php">
    <input type="submit" value="Wyświetl wszystkie wizyty" />
    </form>
    <br>
    <form action="../proj1/index.php">
    <input type="submit" value="Strona główna" />
    </form>

	</center>
</body>

</html>
