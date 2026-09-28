<?php
function getOfficeEmployees() {
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM office_employees");
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function saveOfficeEmployee($office_id, $employee_id) {
    global $conn;
    mysqli_query($conn, "INSERT INTO office_employees (office_id, employee_id) VALUES ('$office_id', '$employee_id')");
}

function deleteOfficeEmployee($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM office_employees WHERE id = $id");
}