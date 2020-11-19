<?php require_once 'head.php'; ?>
<?php require_once 'sql_functions.php'; ?>
<?php
    $id = $_REQUEST['id'];

    $data = getOneData('tbl_crud', "WHERE id = '$id'")->fetch_assoc();
?>
<h2>Name: <?php echo $data['name'] ?></h2>
<h2>Location: <?php echo $data['location'] ?></h2>
<h2>Date: <?php echo $data['created_at'] ?></h2>
<?php require_once 'foot.php'; ?>