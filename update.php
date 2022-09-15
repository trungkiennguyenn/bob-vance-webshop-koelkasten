<?php
include_once 'config.php';
$result = mysqli_query($link, "SELECT * FROM koelkasten");
?>
<!DOCTYPE html>
<html>
 <head>
   <title> Retrieve data</title>
   <link rel="stylesheet" href="style.css">
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
                    <li><a href="koelkast.php">Toevoegen</a></li>
                    
                </ul>
            </nav>
            <a class="cta" href="contact.php">Contact</a>
            <p class="menu cta">Menu</p>
        </header>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
    ?>
<table>
	  <tr>
	    <td>Naam</td>
		<td>Prijs</td>
		<td>Beschrijving</td>
		<td>Gewicht</td>
		<td>Foto</td>
	  </tr>
			<?php
			$i = 0;
			while ($row = mysqli_fetch_array($result)) {
                ?>
	  <tr>
		<td><?php echo $row["naam"]; ?></td>
		<td><?php echo $row["prijs"]; ?></td>
		<td><?php echo $row["beschrijving"]; ?></td>
		<td><?php echo $row["gewicht"]; ?></td>
        <td><?php echo $row["foto"]; ?></td>
		<td><a href="update-process.php?id=<?php echo $row["id"]; ?>">Bewerken</a></td>
      </tr>
                <?php
                $i++;
			}
			?>
</table>
    <?php
} else {
    echo "No result found";
}
?>
 </body>
</html>
