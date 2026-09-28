<?php
function getOffices() {
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM offices");
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function saveOffice($nama, $alamat, $kota, $telepon) {
    global $conn;
    mysqli_query($conn, "INSERT INTO offices (nama, alamat, kota, telepon) VALUES ('$nama', '$alamat', '$kota', '$telepon')");
}

function deleteOffice($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM offices WHERE id = $id");
}