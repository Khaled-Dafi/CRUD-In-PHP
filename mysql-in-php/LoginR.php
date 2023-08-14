<?php include "incloudes/header.php" ?>
<?php include "database.php"; ?>
<?php include "mysqlFunctions.php"; ?>


<div class="container">


    <div class="col-sm-6">
        <h1 class="text-center">READ</h1>

        <pre>

        <?php

        readRows();


        ?>
        </pre>


    </div>

    <?php include "incloudes/footer.php" ?>