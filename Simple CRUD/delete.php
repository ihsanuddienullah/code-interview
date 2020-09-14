<?php
    // konek ke db
    include_once('config.php');

    // get id from URL to delete user
    $id = $_GET['id'];

    // delete user row from table based on id
    $result = mysqli_query($conn, "DELETE FROM users WHERE id=$id");

    // After delete redirect to Home, so that latest user list will be displayed.
    header("Location:index.php");
?>