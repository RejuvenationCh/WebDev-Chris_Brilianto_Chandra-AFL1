<?php
require 'db.php';
require 'models/EmployeeModel.php';
require 'models/OfficeModel.php';
require 'models/OfficeEmployeeModel.php';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'employee';
}

if ($page == 'office') {
    require 'controllers/OfficeController.php';
} elseif ($page == 'office_employee') {
    require 'controllers/OfficeEmployeeController.php';
} else {
    require 'controllers/EmployeeController.php';
}