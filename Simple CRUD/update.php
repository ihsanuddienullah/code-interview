<?php
    // display selected data based on id
    // getting id form url
    $id = $_GET['id'];

    // konek ke db
    include_once('config.php');

    // fetch user data based on id
    $result = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");

    while ($user_data = mysqli_fetch_array($result)) {
        $name = $user_data['name'];
        $email = $user_data['email'];
        $mobile = $user_data['mobile'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">Home</a>
    <br>

    <form action="update.php" name="update_user" method="post">
        <table border=0>
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name" value=<?php echo $name;?>></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value=<?php echo $email;?>></td>
            </tr>
            <tr> 
                <td>Mobile</td>
                <td><input type="text" name="mobile" value=<?php echo $mobile;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
// konek ke db
include_once('config.php');

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];

    // konek ke db
    include_once('config.php');

    // update data
    $result = mysqli_query($conn, "UPDATE users SET name='$name', email='$email', mobile='$mobile' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}

?>
