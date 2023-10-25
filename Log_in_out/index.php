<?php

session_start();



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type = "text/css" href= "login.css">
    <title>Login</title>
</head>
<body>
    <div class = "center" >
        <h1>Login</h1>
        
        <form action="#" method = "POST">
        <div class = "form">

            <input type="text" name ="username" class = "textfield" placeholder ="Username">
            <input type="password" name ="password" class = "textfield" placeholder ="Password">

            <div class = "forgetpass"><a href = "#" class ="link" onclick = "message()">Forget Password</a></div>

            <input type="submit" name = "login" value ="Login" class = "btn">

            <div class = "signup"> New Member <a href = "#" class ="link" onclick = "message()">SignUp Here</a></div>
            <div class = "signup"> version 1.0.0</div>


        </div>
        </form>
    </div>

    <script>
        function message()
        {
            alert ("Contact Admin!");
        }
    </script>
</body>
</html>

<?php

include('connection.php');
if(isset($_POST['login']))
{
   $username=  $_POST['username'];
   $pwd=  $_POST['password'];

   $query ="SELECT * FROM crm_user WHERE username = '$username' && pwd = '$pwd'";
   $data = mysqli_query($connection, $query);
   $total = mysqli_num_rows($data);

    if($total == 1)

    {
        $_SESSION['user_name'] = $username;
        //header('location:fetch_data.php');
        ?>
        <meta http-equiv = "refresh" content = "0; url =fetch_data.php"/>
        <?php
        
        
        
        
    }
    else
    {
        echo"Login fail";
    }
}


?>