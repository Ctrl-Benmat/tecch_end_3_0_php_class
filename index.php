<?php require_once 'head.php';?>
<h1>Create</h1>
 <div class="row">
    <div class="offset-4 col-md-4">
    <form action="process.php" method="post">
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Input name">
            <!-- <input type="text" class="form-control" placeholder="Input name"> -->
        </div>

        <div class="form-group">
            <input type="location" class="form-control" name="location" placeholder="Input location">
        </div>
        <div class="form-group">
            <button class="btn-block btn-primary">
                Submit
            </button>
        </div>
    </form>
    </div>
 </div>
 <a href="all_data.php" class="btn btn-light btn-sm">ALl Data</a>
 <?php require_once 'foot.php';?>
