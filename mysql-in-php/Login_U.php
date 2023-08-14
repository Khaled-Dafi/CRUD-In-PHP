<?php include "mysqlFunctions.php"; ?>

<?php include "incloudes/header.php" ?>

<?php updateData(); ?>



<div class="container">

    <div class="col-sm-6">
        <h1 class="text-center">Update</h1>
        <form action="Login_U.php" method="post">

            <div class="form-group">
                <label for="username">Username</label>
                <input type="username" name="username" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">

                <select name="id" id="">

                    <?php

                    showAllData();


                    ?>

                </select>

            </div>

            <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">


        </form>
    </div>


    <?php include "incloudes/footer.php" ?>