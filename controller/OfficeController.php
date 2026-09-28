<?php
if (isset($_POST['save'])) {
    saveOffice($_POST['nama'], $_POST['alamat'], $_POST['kota'], $_POST['telepon']);
    header('Location: ?page=office');
    exit;
}

if (isset($_GET['delete'])) {
    deleteOffice($_GET['delete']);
    header('Location: ?page=office');
    exit;
}

$offices = getOffices();
require 'views/office.php';