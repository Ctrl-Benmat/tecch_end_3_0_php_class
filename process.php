<?php
require_once 'sql_functions.php';
$_POST['created_at'] = date('Y-m-d H:i:s');
$inserted = insertImproved('tbl_crud', 'name, location, created_at', $_POST);
// // echo "POST: ";
// // var_dump($_POST); echo "<br/>";
// // echo "GET: ";
// // var_dump($_GET);echo "<br/>";
// // echo "REQUEST: ";
// // var_dump($_REQUEST);echo "<br/>";

// // ["name" => "agric_department@gmail.com","location"=> "dolapo2015@"];
// // insert into database
// // ['ten' => 10, 'three' => 5, 6, 4, 2, 8];
// $name = $_POST['name'];
// $location = $_POST['location'];
// $created_at = date('Y-m-d H:i:s');

// // Write our sql
// $sql = "INSERT INTO tbl_crud (name, location, created_at) VALUE('$name', '$location', '$created_at')";

// $inserted = insert($sql); // Insert operation from sql_functions.php
if ($inserted) {
    // echo "<div class='alert alert-success text-center'>inserted</div>";
    header("location: all_data.php");
} else {
    // echo "<div class='alert alert-danger text-center'>Not inserted ".mysqli_error($mysqli)."</div>";
    header("location: index.php");
}