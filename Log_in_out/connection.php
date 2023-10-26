<?php
//This will establish connection with data base which will contains user information like user id and password
$servername="localhost"; //this is servername changes are mandatory!
$username = "your_username"; //This is User Name for accessing database(you have to create this manually in your C Pannel)
$password = "Your_password";//This is Password for accessing database(you have to create this manually in your C Pannel)
$dbname = "db_name"; //This is name of database which will contain the user's information eg - username , password


$connection = mysqli_connect($servername,$username,$password,$dbname);
if($connection)
{
    echo "db con okk....";
}
else
{
    echo "db conn fail!!!";
}

?>