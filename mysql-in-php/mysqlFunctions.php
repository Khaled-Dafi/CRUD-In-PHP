<?php include "database.php"; ?>
<!-- for database conneectons-->

<?php
function showAllData()
{

    global $connection;

    $query = "SELECT * FROM users";

    $resutl = mysqli_query($connection, $query);

    if (!$resutl) {

        die('Query FAILED' . mysqli_error());

    }

    while ($row = mysqli_fetch_assoc($resutl)) {
        $id = $row['id'];

        echo "<option value='$id'>$id</option>";

    }



}
?>
<?php

function updateData()
{

    if (isset($_POST['submit'])) {
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];


        $query = "UPDATE users SET ";
        $query .= "username = '$username',";
        $query .= "password = '$password' ";
        $query .= "WHERE id = $id";

        $resutl = mysqli_query($connection, $query);

        if (!$resutl) {

            die('Query FAILED' . mysqli_error());

        } else {


            echo "RECORD IS UPDATE!";
        }
    }
}

function DeleteRows()
{

    if (isset($_POST['submit'])) {
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];


        $query = "DELETE FROM users ";
        $query .= "WHERE id = $id";

        $resutl = mysqli_query($connection, $query);

        if (!$resutl) {

            die('Query FAILED' . mysqli_error());

        } else {
            echo "RECORD IS DELTED";
        }
    }

}
function createData()
{
    if (isset($_POST['submit'])) {

        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];


        $username = mysqli_real_escape_string($connection, $username); //for the sql injections 
        $password = mysqli_real_escape_string($connection, $password);

        $hashFormat = "2y$10$";
        $salt = "iusesomecrazystrings22";
        $hashF_and_salt = $hashFormat . $salt;
        $password = crypt($password, $hashF_and_salt);

        if ($connection) {
            echo "DATA HAS BEEN SEND TO DATABASE";
        } else {
            die("FUCK!");
        }


        $query = "INSERT INTO users(username,password) ";
        $query .= "VALUES ('$username', '$password')";
        $resutl = mysqli_query($connection, $query);

        if (!$resutl) {

            die('Query FAILED' . mysqli_error());

        }

    }
}

function readRows()
{

    global $connection;

    $query = "SELECT * FROM users";

    $resutl = mysqli_query($connection, $query);

    if (!$resutl) {

        die('Query FAILED' . mysqli_error());

    }

    while ($row = mysqli_fetch_assoc($resutl)) {

        print_r($row);

    }


}

?>