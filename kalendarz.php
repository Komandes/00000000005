<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mój kalendarz</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <header>
        <div id="baner1">
            <img src="logo1.png" alt="Mój kalendarz">
        </div>
        <div id="baner2">
            <h1>KALENDARZ</h1>
<?php

           $sql = "SELECT `miesiac`, `rok` FROM `zadania` WHERE `dataZadania` = '2020-07-01' ";
          
           $db = new mysqli('localhost', 'root', '', 'egzamin5');
           $result = $db->query($sql);
           $row = $result->fetch_assoc();
           $miesiac = $row['miesiac'];
           $rok = $row['rok'];
           echo "<h1>miesiac: $miesiac, rok: $rok</h1>";
           $db->close();
?>
        </form>
        </div>
    </header>
    <main>
<?php
            //script2
    $sql = 'SELECT `dataZadania`, `wpis` FROM `zadania` WHERE `miesiac` = "lipiec"';   
    $db = new mysqli('localhost', 'root', '', 'egzamin5');
    $result = $db->query($sql);
        while($row = $result->fetch_assoc()){
            $data = $row['dataZadania'];
            $wpis = $row['wpis'];
            echo '<div>';
            echo "<h5>$data</h5>";
            echo "<p>$wpis</p>";
            echo '</div>';
    }
?>
    </main>
    <footer>
    <div id="footer1">
        <form action="kalendarz.php" method="POST">
            <label  for="wpisID">dodaj wpis</label>
            <input  type="text" id="wpisID">
            <input type="submit" value="DODAJ" >
        </form>
    </div>
    <p>Stronę wykonał:00000000000</p>
    </footer>
</body>
</html>