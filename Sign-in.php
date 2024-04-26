<?php
    session_start();
    include("connections.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //Something was posted
        $user_name = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            //save to database

            $user_id = random_num(10);
            $query = "insert into users (user_id,user_name,email,password) values ('$user_id','$user_name','$email','$password')";

            mysqli_query($con,$query);

            header("Location: login.php");
        }
        else
        {
            echo "Please enter some valid information";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Signup</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f1f1f1;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .login-container {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        padding: 40px;
        max-width: 400px;
        width: 100%;
        text-align: center;
    }
    h1 {
        margin-bottom: 30px;
        color: #333;
    }
    input[type="text"],
    input[type="password"],
    input[type="email"] {
        width: calc(100% - 20px);
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        outline: none;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>
<div class="login-container">
    <h1>Signup</h1>
    <form action="#" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Signup">
        Back to login page <a href="login.php">Login</a>
    </form>
</div>
</body>
</html>