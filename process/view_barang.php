<?php
session_start();
include('../config/conn.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $query = mysqli_query($con, "SELECT * FROM prodev WHERE idbarang='$id'") or die(mysqli_error($con));
    $data = mysqli_fetch_array($query);
    echo json_encode($data);
}
