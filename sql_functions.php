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


function getOneData($tableName, $condition) {
    global  $mysqli;
    // SELECT column FROM tablename WHERE
    $sql = "SELECT * FROM $tableName $condition";

    $result = $mysqli->query($sql);
    return $result;
        
}

function updateData($tableName, $condition) {
    global  $mysqli;
    // SELECT column FROM tablename WHERE
    $sql = "SELECT * FROM $tableName ";
    if ($condition != null) {
        
    }
}


function getAllData($tableName) {
    global $mysqli;
    $sql = "SELECT * FROM $tableName";
    $result = $mysqli->query($sql);
    return $result;
}