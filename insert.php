 <?php

include "koneksi.php";

if($_POST){
    $isbn = $_POST['isbn'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $jumlah = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];
    $abstrak = $_POST['abstrak'];

    $statement = $koneksi->prepare("INSERT INTO buku (isbn, judul, pengarang, jumlah, tanggal, abstrak) VALUES ($isbn, $judul, $pengarang, $jumlah, $tanggal, $abstrak)");
    $result = $statement->execute();

    $response['message'] = "Data berhasil ditambahkan";
    $response['data']=[
        'isbn' => $isbn,
        'judul' => $judul,
        'pengarang' => $pengarang,
        'jumlah' => $jumlah,
        'tanggal' => $tanggal,
        'abstrak' => $abstrak
    ];

    $json = json_encode($response, JSON_PRETTY_PRINT);
    echo $json;
}else{
    $response['message'] = "Data gagal ditambahkan";
    $json = json_encode($response, JSON_PRETTY_PRINT);
    echo $json;
}