<?php
if ( isset( $_GET["ID"] ) ) {
    $id =  $_GET["ID"] ;


$servername = "localhost";
$username = "root";
$password = "";
$database = "myproduct_1st";

$connection = new mysqli($servername, $username, $password, $database);

$sql = "DELETE FROM products WHERE ID=$id";
$connection->query($sql);

}

header("location: /MyProduct_1st/Front.php");
exit;

 ?>