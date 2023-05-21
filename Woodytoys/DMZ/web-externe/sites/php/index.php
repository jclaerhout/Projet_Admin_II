<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Woodytoys</title>
</head>
<body>
<div>Bienvenue sur le Site Woodytoys</div>
<?php
//These are the defined authentication environment in the db service

// The MySQL service named in the docker-compose.yml.
//$host = 'database';
$host = getenv('HOST')

// Database use name
//$user = 'userphp';
$user = getenv('USER')

//database user password
//$pass = 'Br94Phz}EP~x3d:/QSq;';
$pass = getenv('PASS')
 
// database name
//$mydatabase = 'woodytoys_db';
$mydatabase = getenv('MYDATABASE')

// check the MySQL connection status
$conn = new mysqli($host, $user, $pass, $mydatabase);

$sql = 'CALL getProduits();';

if ($result = $conn->query($sql)){
    while ($data = $result->fetch_object()) {
        $produits[] = $data;
    }
}
echo "<table><th>Nos Produits</th>";
foreach ($produits as $prod) {
    echo "<tr><td>";
    echo $prod->nomProduit;
    echo "</td><td>";
    echo $prod->prodPrix;
    echo "</td><tr>";
}
echo "</table>";
?>
</body>
</html>
