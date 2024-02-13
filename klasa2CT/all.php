<?php include_once("connect.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Klasa 2CT - 13.02.2024 Ćwiczenia</title>
</head>
<body>
<h2>Autor: Jan Grzegorski</h2>
    <hr>
    <div class="counter">
        <?php
            $counter_records = $conn->query("SELECT COUNT(baza.ID) as 'ile' FROM baza;");
            list($ile)=mysqli_fetch_row($counter_records);
            echo"<h4> Counter $ile osób </h4>";
        ?>
    </div>
    <nav>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="all.php">Wszystkie rekordy z bazy</a></li>
            <li><a href="osoby10_18.php">Osoby od 10 do 18</a></li>
            <li><a href="osoby19_50.php">Osoby od 19 do 50</a></li>
        </ul>
    </nav>
    <div class="all">
        <ul>
        <?php
    $all_records = $conn->query("SELECT baza.ID,baza.IMIE,baza.NAZWISKO,baza.WIEK from baza;");
    while(list($ID,$IMIE,$NAZWISKO,$WIEK)=mysqli_fetch_row($all_records)){
        echo("<li><b>$ID</b>, <i>$IMIE, $NAZWISKO, $WIEK</i></li>");
    }
    ?>
        </ul>
    </div>
</body>
</html>
<?php $conn->close(); ?>