<?php
require_once "helper/database.php";
$PDO = connectDatabase();
if (isset($_POST['signup']) && isset($_POST['un'])) {
    $uname = $_POST['un'];
    $pwd = $_POST['pw'];
            $insert_query = "INSERT INTO users (username,password,address) VALUES (:un,:pw,:adr)";
            $stmt = $PDO->prepare($insert_query);
            $stmt->execute(
                array(
                    ':un' => $_POST['un'],
                    ':pw' => $_POST['pw'],
                    ':adr' => $_POST['address']
                )
            );
            echo "signup sucessful now login <a href='/nce-project/'> Log in </a>";
        }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>

<body>
    <?php
    include_once('layout/header.php');
    ?>
    <br>
    <form action="" method="post">
        <label for="username">Username</label>
        <input type="text" name="un" id="un">
        <br>
        <label for="password">Password</label>
        <input type="password" name="pw" id="pw">
        <br>
        <label for="address">Address</label>
        <input type="text" name="address" id="">
        <br>
        <input type="submit" value="Signup" name="signup">
    </form>
    <?php
    include_once('layout/footer.php');
    ?>
</body>

</html>