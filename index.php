<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiry</title>
 </head>
 <style>
   .login{
      max-width: 400px;
    margin: 100px auto;
    padding: 30px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    text-align: center;
    background-color:#c24040;
   }
   h1 {
    font-size: 34px;
    margin-bottom: 20px;
    color: #eeeeee;
}
label{
   font-size: 14px;
    color: #101010;
    margin-bottom: 8px;
    display: block;
    text-align: left;
}
input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0 20px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 14px;
}
button {
    width: 100%;
    padding: 12px;
    background-color: #101010;
    border: none;
    color: white;
    font-size: 16px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #eeeeee;
    color:#101010;
}

@media (max-width: 480px) {
    .login {
        padding: 20px;
        width: 90%;
    }

    h1 {
        font-size: 20px;
    }

    input[type="text"],
    input[type="password"] {
        font-size: 16px;
        padding: 12px;
    }

    button {
        font-size: 18px;
        padding: 14px;
    }
}
   </style>
 <body>
    <div class="login">
      <h1>Login</h1>
 <form method="POST">
    <label for="user">Username:</label>
    <input type="text" id="user" name="user" required><br><br>

    <label for="pwd">Password:</label>
    <input type="password" id="pwd" name="pwd" required><br><br>
    <span style="color:red;"><?php if(!empty($msg)){ echo $msg; } ?></span>

    <button type="submit" name="login">Login</button>

</form>
</div>
 </body>
 </html>
<?php
include "connection.php";
if (isset($_POST["login"])) {
        $user = mysqli_real_escape_string($conn, $_POST['user']);  
        $pwd = mysqli_real_escape_string($conn, $_POST['pwd']); 

    $sql ="SELECT * FROM enquiry WHERE user = '$user' AND pwd = '$pwd'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);

        if ($row) {
            session_start();
            $_SESSION['user_id'] = $row['id'];  
            $_SESSION['user'] = $row['user'];
        header("Location: dashboard.php");
     }
      else {
        $msg = "Incorrect login details.";
     }  
}
}
?>