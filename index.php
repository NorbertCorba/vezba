<?php
include_once 'db.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = $_POST['username'];

    $currentDate = date('Y-m-d H:i:s');

    $sql = "INSERT INTO users (email, password, username, created_at, updated_at) VALUES
     ('$email', '$password', '$username', '$currentDate', '$currentDate')";

    $newUser = fetch($sql, $connection, true);
    echo "User is created successfully";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div >
                <header">
                    <h1>User profile</h1>
                </header>

                <form action="" method="POST" id="postsForma">
                <div >
                    <div>
                        <label for='email'>Email</label>
                        <input type="email" id='email' name='email'>
                    </div>

                    <div >
                        <label for='password' >Password</label>
                        <input type="password" name='password' id ='password'>
                    </div>
                    <div>
                        <label for='username'>Username</label>
                        <input type="text" id='username' name='username'>
                    </div>
                    <div >
                        <button type="submit" name="submit">Save</button>
                    </div>
                    
                </div>
            </form>
            </div>
</body>
</html>
