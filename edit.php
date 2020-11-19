<?php require_once 'head.php';?>
<?php require_once 'sql_functions.php';?>
<?php
    $id = $_REQUEST['id'];
    // require_once 'conn.php';

    // $sql = "SELECT * FROM tbl_crud WHERE id = '$id'";

    // // Run query
    // $result = $mysqli->query($sql);

    // $data = $result->fetch_assoc();

    // var_dump($data);

    $data = getOneData('tbl_crud', "WHERE id = '$id'")->fetch_assoc();

?>

<?php  //echo $_REQUEST['id'] ?>
<h1>Edit</h1>
 <div class="row">
    <div class="offset-4 col-md-4">
    <form action="update.php?id=<?php echo $id ?>" method="post">
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Input name" value="<?php echo $data['name'] ?>">
            <!-- <input type="text" class="form-control" placeholder="Input name"> -->
        </div>

        <div class="form-group">
            <input  value="<?php echo $data['location'] ?>" type="location" class="form-control" name="location" placeholder="Input location">
        </div>
        <div class="form-group">
            <button class="btn-block btn-primary">
                Update
            </button>
        </div>
    </form>
    </div>
 </div>
 <a href="all_data.php" class="btn btn-light btn-sm">ALl Data</a>
 <?php require_once 'foot.php';?>
