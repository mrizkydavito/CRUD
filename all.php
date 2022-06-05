<?php  

include "koneksi.php";

$query = "SELECT * FROM buku";
$statement = $koneksi->query($query);
$statement->setFetchMode(PDO::FETCH_ASSOC);
$result = $statement->fetchAll();

header("Content-type: application/json");
echo json_encode($result);
?>