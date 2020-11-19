<?php
    // Connect to database
    require_once 'head.php';
    require_once 'sql_functions.php';

    $result = getAllData('tbl_crud')

    // An improved way of selecting data from database
    // $sql = "SELECT * FROM tbl_crud";

    // Run the query to bring out the result
    // $result = $mysqli->query($sql);

?>

<div class="mt-4">
    <div class="float-right">
        <a href="index.php" class="btn btn-sm btn-light">Create Data</a>
    </div>
    <h1>Read Data </h1>
</div>


<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Location</th>
        <th>Created</th>
        <th>Actions</th>
    </tr>
    <?php while ($res = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $res['id'] ?></td>
            <td><?php echo $res['Name'] ?></td>
            <td><?php echo $res['Location'] ?></td>
            <td><?php echo $res['created_at'] ?></td>
            <td>
                <a href="view.php?id=<?php echo $res['id'] ?>" class="btn btn-primary btn-sm">View</a>
                <a href="edit.php?id=<?php echo $res['id'] ?>" class="btn btn-light btn-sm">Edit</a>
                <a href="delete.php?id=<?php echo $res['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
            </td> 
        </tr>
    <?php } ?>
</table>

<?php require_once 'foot.php'; ?>
