<?php
require_once 'conn.php';


function insertImproved($tableName, $columns, $data) {
    global $mysqli;
    // "INSERT INTO table_name (name, location) VALUES(val1, val2, val3)";
    $sql = "INSERT INTO $tableName ($columns) VALUES(";
    $values = [];
    foreach($data as $key => $value) {
        array_push($values, "'".$value."'");
    }
    $vals = implode(',', $values);
    $sql .= $vals.')';
    // echo $sql;
    $inserted = $mysqli->query($sql);
    return $inserted;
}


function getData($tableName, $condition) {
    global  $mysqli;
    // SELECT column FROM tablename WHERE
    $sql = "SELECT * FROM $tableName ";
    if ($condition != null) {
        
    }
        
}

function updateData($tableName, $condition) {
    global  $mysqli;
    // SELECT column FROM tablename WHERE
    $sql = "SELECT * FROM $tableName ";
    if ($condition != null) {
        
    }
        
}