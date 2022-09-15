<?php

include_once('config.php');

if (isset($_POST["naam"])) {
    $naam = $_POST["naam"];
    $prijs = $_POST["prijs"];
    $beschrijving = $_POST["beschrijving"];
    $gewicht = $_POST["gewicht"];
    $foto = $_POST["foto"];
    try {
        $stmt = $link->query("INSERT INTO koelkasten (naam, prijs, beschrijving, gewicht, foto)
    VALUES ('$naam', '$prijs','$beschrijving','$gewicht', '$foto')");
    } catch (PDOException $e) {
        echo "Inserting Values failed" . $e->getMessage();
    }
}
?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>koelkast</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
</head>
<body>

<header>
           <img src="vance.png" class="image1"alt="logo">
            <nav>
                <ul class="nav_links">
                <li><a href="index.php">Home</a></li>
                <li><a href="assortiment.php">Assortiment</a></li>
                   
                
                </ul>
            </nav>
            <a class="cta" href="contact.php">Contact</a>
            <p class="menu cta">Menu</p>
        </header>
        
        </div>
        <script type="text/javascript" src="mobile.js"></script>
</header>

<h1 id="myHeader">Assortiment</h1>

  </div>
</nav>
<form method="post">
            
    <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Koelkast Naam</label>
            <input type="text" name="naam" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required="">
        </div>
        <div>
            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Prijs</label>
            <input type="number" name="prijs" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
        </div>
        <div>
            <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Beschrijving</label>
            <input type="text" name="beschrijving" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"required="">
        </div>  
        <div>
            <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Gewicht</label>
            <input type="text" name="gewicht" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="1" required="">
        </div>  
        
        <div>
            <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Foto Adres</label>
            <input type="text" name="foto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="1" required="">
        </div>  
        
    <div class="flex items-start mb-6">
        <div class="flex items-center h-5">
        <input id="remember" type="checkbox" value="" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required="">
        </div>
        <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-400">Ik ga akkoord met de <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">regels en condities</a>.</label>
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>

</body>
</html>
