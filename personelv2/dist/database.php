<?php

$servername="localhost";
$username="root";
$password="";
$dbname="personel";


try {
    $conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $hata) {
    echo "Hata Oluştu " . $hata->getMessage();
}

?>