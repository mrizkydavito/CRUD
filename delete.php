<?php

include "koneksi.php";

if($_POST){
    $isbn = $_POST['isbn'];

    $statement = $koneksi->prepare("DELETE FROM buku WHERE isbn = $isbn");
    $result = $statement->execute();

    $response['message'] = "Data berhasil dihapus";
    $json = json_encode($response, JSON_PRETTY_PRINT);
    echo $json;
}else{
    $response['message'] = "Data gagal dihapus";
    $json = json_encode($response, JSON_PRETTY_PRINT);
    echo $json;
}