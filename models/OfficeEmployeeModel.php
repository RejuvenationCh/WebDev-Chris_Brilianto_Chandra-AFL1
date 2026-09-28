<?php
function getOfficeEmployees() {
    global $conn;
    $result = mysqli_query($conn, "
        SELECT office_employees.id,
               employees.nama AS nama_karyawan,
               offices.nama AS nama_kantor
        FROM office_employees
        JOIN employees ON employees.id = office_employees.employee_id
        JOIN offices ON offices.id = office_employees.office_id
    ");
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function saveOfficeEmployee($employee_id, $office_id) {
    global $conn;
    mysqli_query($conn, "INSERT INTO office_employees (employee_id, office_id) VALUES ('$employee_id', '$office_id')");
}

function deleteOfficeEmployee($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM office_employees WHERE id = $id");
}
