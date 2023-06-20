<?php
$conn = mysqli_connect("localhost", "root", "", "db_donation");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $kardus = [];
    while ($kotak = mysqli_fetch_assoc($result)) {
        $kardus[] = $kotak;
    } 
    return $kardus;
}

function tambah($data) {
    global $conn;
    $donatur = htmlspecialchars($data["nama"]);
    $id = htmlspecialchars($data["id"]);
    $paket = htmlspecialchars($data["paket"]);
    $kategori = htmlspecialchars($data["kategori"]);
    $barang = htmlspecialchars($data["barang"]); 

    $query = "INSERT INTO `data` (`nama`, `id`, `paket`, `kategori`, `barang`)
     VALUES ('$donatur', '$id', '$paket', '$kategori ', '$barang')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
} 

?>