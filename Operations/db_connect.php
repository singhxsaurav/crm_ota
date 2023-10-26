<!-- This will establish connection with data base for customer data  -->
<?php
$servername="localhost";
$username = "Your username";
$password = "your password";
$dbname = "database name";


$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
    echo "db con for customer data base ok.... ";
}
else
{
    echo "db conn fail!!!!";
}

?>