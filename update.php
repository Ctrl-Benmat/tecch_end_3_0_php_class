<?php

$id = $_GET['id'];

require_once 'conn.php';

$name = $_REQUEST['name'];
$location = $_REQUEST['location'];
$created_at = date('Y-m-d H:i:s');

$sql = "UPDATE tbl_crud SET name = '$name', location = '$location', created_at = '$created_at' WHERE id = '$id'";

$result = $mysqli->query($sql);

// var_dump($result);

if ($result) {
    // 
    header('location: all_data.php');
} else {

}