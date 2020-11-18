<?php

require_once 'sql_functions.php';
require_once 'head.php';

$_POST['created_at'] = date('Y-m-d H:i:s');

$inserted = insertImproved('user', "email, password, created_at", $_POST);

if ($inserted) {
    echo "<div class='alert alert-success text-center'>Registration successful</div>";
} else {
    echo "<div class='alert alert-danger text-center'>Not inserted ".mysqli_error($mysqli)."</div>";
}