<?php
include_once 'config.php';
if(count($_POST)>0) {
mysqli_query($link,"UPDATE koelkasten set id='" . $_POST['naam'] . "', first_name='" . $_POST['prijs'] . "', last_name='" . $_POST['beschrijving'] . "', _name='" . $_POST['gewicht'] . "' ,email='" . $_POST['foto']  );

} 
$result = mysqli_query($link,"SELECT * FROM koelkasten WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Koelkast Data</title>
<link rel="stylesheet" href="styles.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
</head>
<body>

<header>
            <img src="vance.png" class ="image1 "alt="logo">
            <nav>
                <ul class="nav_links">
                <li><a href="index.php">Home</a></li>
                    <li><a href="overons.php">Over ons</a></li>
                    <li><a href="assortiment.php">Assortiment</a></li>
                    
                </ul>
            </nav>
            <a class="cta" href="contact.php">Contact</a>
            <p class="menu cta">Menu</p>
        </header>
     
        </div>
        <script type="text/javascript" src="mobile.js"></script>

<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="assortiment.php">Terug</a>
</div>
Naam: <br>
<input type="hidden" name="naam class="txtField" value="<?php echo $row['naam']; ?>">
<input type="text" name="naam"  value="<?php echo $row['naam']; ?>">
<br>
Prijs <br>
<input type="text" name="prijs" class="txtField" value="<?php echo $row['prijs']; ?>">
<br>
Beschrijving :<br>
<input type="text" name="beschrijving" class="txtField" value="<?php echo $row['beschrijving']; ?>">
<br>
Gewicht:<br>
<input type="text" name="gewicht" class="txtField" value="<?php echo $row['gewicht']; ?>">
<br>
Foto:<br>
<input type="text" name="foto" class="txtField" value="<?php echo $row['foto']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>