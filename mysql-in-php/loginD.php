<?php include "database.php"; ?>
<?php include "mysqlFunctions.php"; ?>

<?php



DeleteRows();





?>


<?php include "incloudes/header.php" ?>
<div class="container">

    <div class="col-sm-6">
        <h1 class="text-center">Delete</h1>
        <form action="loginD.php" method="post">

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



            <input class="btn btn-primary" type="submit" name="submit" value="DELETE">


        </form>
    </div>


    <?php include "incloudes/footer.php" ?>