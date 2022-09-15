<?php
include_once("config2.php")

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
    <title>Koelkast Toevoegen</title>
    <?php
    $query = $connect->query("SELECT * FROM koelkasten");
    ?>
</head>
<body>
 
<header>
            <img src="vance.png" class ="image1 "alt="logo">
            <nav>
                <ul class="nav_links">
                <li><a href="index.php">Home</a></li>
                    <li><a href="overons.php">Over ons</a></li>
                    <li><a href="koelkast.php">Toevoegen</a></li>
                    
                </ul>
            </nav>
            <a class="cta" href="contact.php">Contact</a>
            <p class="menu cta">Menu</p>
        </header>
     
        </div>
        <script type="text/javascript" src="mobile.js"></script>

        <h1 id="myHeader">Assortiment</h1>

<?php
while ($data = $query->fetch()) {
    $naam = $data["naam"];
    $prijs = $data["prijs"];
    $beschrijving = $data["beschrijving"];
    $gewicht = $data["gewicht"];
    $foto = $data["foto"];
    ?>
      
        <div class="producten">
            <div> <br><h2><?php echo $naam; ?></h2> <br><br>
            <img src="<?php echo $foto; ?>"  alt="koelkast" style="height: 30%;"><br> <br>
            <p class="prijs"><?php echo "Prijs:     "; echo $prijs; echo ",-";?></p><br> <br>
            <p class="gewicht"><?php echo "Gewicht:     "; echo $gewicht;  echo"Kg";"<br>";?></p><br> <br>
            <p class="beschrijving"><?php echo "Beschrijving:     "; echo $beschrijving; echo"<br>" ;?></p>
            <Br><br><a class="cta" href="update.php">Bewerken</a>
        
</div>
</div>
            </a>
        <?php
}
?>
</body>
</html>
