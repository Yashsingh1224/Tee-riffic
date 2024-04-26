<?php
 session_start();
 include("connections.php");
 include("functions.php");

 $error_message = ""; 

 if($_SERVER['REQUEST_METHOD'] == "POST")
 {
     //Something was posted
     $user_name = $_POST['username'];
     $password = $_POST['password'];
     

     if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
     {
         //Read from database

         $query = "select * from users where user_name = '$user_name' limit 1";

         $result = mysqli_query($con,$query);

         if($result)
         {
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);
                
                if($user_data['password']===$password)
                {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: index.php");
                    die;
                }
                else
                {
                    $error_message = "Wrong Username/Password!";
                }
            }
         }
         else
         {
            $error_message = "Wrong Username/Password!";
         }
         
         
     }
     else
     {
        $error_message = "Please enter valid username and password!";
     }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
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
    input[type="password"] {
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

    .error-message {
    color: red; /* Change the color to red */
    font-weight: bold; /* Optional: make the text bold */
}
</style>
</head>
<body>
<div class="login-container">
    <h1>Login</h1>
    <?php if (!empty($error_message)): ?>
            <div class="error-message"><?php echo $error_message; ?></div>
        <?php endif; ?>
    <form action="#" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login">
        New user ? <a href="Sign-in.php">Signup</a>
    </form>
</div>
</body>
</html>

