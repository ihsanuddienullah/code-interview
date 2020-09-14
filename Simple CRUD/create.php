<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">Home</a> <br>
    <form action="create.php" method="post" name="form1">
        <table width="25%" border=0>
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr> 
                <td>Mobile</td>
                <td><input type="text" name="mobile"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php
    // Check If form submitted, insert form data into users table.
        if (isset($_POST['Submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];

            // konek ke db
            include_once('config.php');
            
            // masukan data ke table
            $result = mysqli_query($conn, "INSERT INTO users(name, email, mobile) VALUES ('$name','$email','$mobile')");

            echo "User add Successfully. <a href='index.php'>View User</a>";
        }
    ?>
</body>
</html>