<?php



$hostName = "localhost";
$dbUser = "root" ;
$dbPassword = '' ;
$dbName ="green_coffe";



$conn = mysqli_connect($hostName,$dbUser,$dbPassword,$dbName);
if(!$conn){
    echo "connected";
}

?>