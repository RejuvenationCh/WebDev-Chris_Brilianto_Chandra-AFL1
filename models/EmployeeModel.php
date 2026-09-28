<?php
function getEmployees() {
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM employees");
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function saveEmployee($nama, $jabatan, $usia) {
    global $conn;
    mysqli_query($conn, "INSERT INTO employees (nama, jabatan, usia) VALUES ('$nama', '$jabatan', '$usia')");
}

function deleteEmployee($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM employees WHERE id = $id");
}