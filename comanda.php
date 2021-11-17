<?php
    $servername = "localhost";
    $username = "root";
    $dbname = "ruligames";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn)
        echo "Ne pare rau, nu s-a putut plasa comanda.<br><br>";
    else
    {
        $nume = $_POST['nume'];
        $prenume = $_POST['prenume'];
        $judet = $_POST['judet'];
        $localitate = $_POST['localitate'];
        $adresa = $_POST['adresa'];
        $nrtel = $_POST['nrtel'];
        $numeprod = $_POST['numeprod'];
        $pret = $_POST['pret'];

        $sql = "INSERT INTO `comenzi`(`Nume`, `Prenume`, `Judet`, `Localitate`, `Adresa`, `Numar_de_telefon`, `Produs`, `Pret`)
                VALUES ('$nume', '$prenume', '$judet', '$localitate', '$adresa', '$nrtel', '$numeprod', '$pret');";
    
        $rez = mysqli_query($conn, $sql);
        if(!$rez)
            echo "Ne pare rau, nu s-a putut plasa comanda.<br><br>";
        else 
        	echo "Comanda plasata cu succes! Curierul va va contacta în legatura cu livrarea produsului.<br><br> Timp estimat de livrare 1-2 zile lucratoare. <br><br> Plata se va realiza ramburs.<br><br>Va mul?umim ca a?i ales Ruli Games!";
    }
?>
