<?php
if (isset($_POST['save'])) {
    saveOfficeEmployee($_POST['employee_id'], $_POST['office_id']);
    header('Location: ?page=office_employee');
    exit;
}

if (isset($_GET['delete'])) {
    deleteOfficeEmployee($_GET['delete']);
    header('Location: ?page=office_employee');
    exit;
}

$relations = getOfficeEmployees();
$employees = getEmployees();
$offices = getOffices();
require 'views/office_employee.php';