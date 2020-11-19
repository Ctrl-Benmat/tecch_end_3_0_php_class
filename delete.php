<?php

$id = $_REQUEST['id'];

require_once 'conn.php';

$sql = "DELETE FROM tbl_crud WHERE id = '$id'";

$result = $mysqli->query($sql);

if ($result) {
    header('location: all_data.php');
} else {
    echo "Not deleted: ".mysqli_error($mysqli);
}