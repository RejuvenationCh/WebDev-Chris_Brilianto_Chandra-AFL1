<?php
if (isset($_POST['save'])) {
    saveEmployee($_POST['nama'], $_POST['jabatan'], $_POST['usia']);
    header('Location: ?page=employee');
    exit;
}

if (isset($_GET['delete'])) {
    deleteEmployee($_GET['delete']);
    header('Location: ?page=employee');
    exit;
}

$employees = getEmployees();
require 'views/employee.php';