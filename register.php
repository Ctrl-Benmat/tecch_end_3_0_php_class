<?php require_once 'head.php';?>
<div class="row">
    <div class="offset-4 col-md-4">
    <form action="register_submit.php" method="post">
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Input email">
            <!-- <input type="text" class="form-control" placeholder="Input name"> -->
        </div>

        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Input password">
        </div>
        <div class="form-group">
            <button class="btn-block btn-primary">
                Register
            </button>
        </div>
    </form>
    </div>
 </div>
 <?php require_once 'foot.php';?>