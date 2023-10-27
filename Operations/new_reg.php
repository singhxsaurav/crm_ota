<?php

session_start();
echo "welcome to CRM COMPANY NAME ". $_SESSION['user_name'];

?>

<?php include("db_connect.php");

$userprofile= $_SESSION['user_name'];
if (isset($_SESSION['user_name']) && !empty($_SESSION['user_name'])) {
    // User is logged in,  access given to the page.
} else {
     ?>
        <meta http-equiv = "refresh" content = "0; url =../Log_in_out/index.php"/>
        <?php
    exit; // Make sure to exit after redirect.
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM - Company Name</title>
    <link rel = "stylesheet" type = "text/css" href = "new_reg.css">
</head>
<body>
    <div class = "container">
        <form action = "#" method = "POST">
        <div class = "title">
            CRM Company Name
        </div>
        <div class = "form">
            <div class = "input_field">
                <label for="">Name</label>
                <input type="text" class = "input" name = "g_name" >
            </div>

            
            <div class = "input_field">
                <label for="">Last Name</label>
                <input type="text" class = "input" name = "l_name">
            </div>

            <div class = "input_field">
                <label for="">Gender</label>
                <select class = "selectbox"name="gender" id="" >
                    <option value="Select">Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            
            
            <div class = "input_field">
                <label for="">Departure</label>
                <input type="text" class = "input" name = "dep_city"required>
            </div>
            <div class = "input_field">
                <label for="">Destination</label>
                <input type="text" class = "input" name = "des_city" required>
            </div>
            <div class = "input_field">
                <label for="">No of Adult</label>
                <input type="number" class = "input" name = "n_ad" required>
            </div>
            <div class = "input_field">
                <label for="">No of Child</label>
                <input type="number" class = "input" name = "n_ch">
            </div>
            <div class = "input_field">
                <label for="">No of Infant</label>
                <input type="number" class = "input" name = "n_inf">
            </div>
            <div class = "input_field">
                <label for="">Given Fare</label>
                <input type="number" class = "input" name = "g_fr" required>
            </div>
           
            <div class = "input_field">
                <label for="">Email</label>
                <input type="email" class = "input" name = "ema" required>
            </div>
            <div class = "input_field">
                <label for="">Primary Phone</label>
                <input type="tel" class = "input" name = "ph_f" required>
            </div>
            <div class = "input_field">
                <label for=""> Secondary Phone</label>
                <input type="tel" class = "input" name = "ph_s">
            </div>
            <div class = "input_field">
                <label for="">Indian Phone</label>
                <input type="tel" class = "input" name = "ph_t">
            </div>
            <div class = "input_field">
                <label for="">Departing Date</label>
                <input type="date" class = "input" name = "dep_f" required>
            </div>
            <div class = "input_field">
                <label for="">Returning Date</label>
                <input type="date" class = "input" name = "ret_f"required>
            </div>
            <div class = "input_field">
                <label for="">Ticketing Status</label>
                <select class = "selectbox" name="t_st" id="" required>
                    <option value="Select">Select</option>
                    <option value="Sold">Sold</option>
                    <option value="Hold">Hold</option>
                    <option value="Lost">Lost</option>
                </select>
            </div>
            <div class = "input_field">
                <label for="">Remarks</label>
                <input type="text" class = "input" name = "rem">
            </div>

            <div class = "input_field">
                <label for="">Agent Name</label>
                <select class = "selectbox" name="a_name" id="" required>
                    <option value="Select">Select</option>
                    <option value="Agent - 1">Agent - 1</option>
                    <option value="Agent - 2">Agent - 2</option>
                    <option value="Agent - 3">Agent - 3</option>
                    <option value="Agent - 4">Agent - 4</option>
                    <option value="Agent - 5">Agent - 5</option>
                    <option value="Agent - 6">Agent - 6</option>
                    <option value="Agent - 7">Agent - 7</option>
                </select>
            </div>
            <div class = "input_field">
                <input type="submit" value="Register" class = "btn" name = "submit">
            </div>

        </div>
        </form>
    </div>
</body>
</html>

<?php 

if(isset($_POST['submit']))
{
    $g_name = $_POST['g_name'];
    $l_name = $_POST['l_name'];
    $gender = $_POST['gender'];
    $dep_city = $_POST['dep_city'];
    $des_city = $_POST['des_city'];
    $n_ad = $_POST['n_ad'];
    $n_ch = $_POST['n_ch'];
    $n_inf = $_POST['n_inf'];
    $g_fr = $_POST['g_fr'];
    //$a_fr = $_POST['a_fr'];
    $ema = $_POST['ema'];
    $ph_f = $_POST['ph_f'];
    $ph_s = $_POST['ph_s'];
    $ph_t = $_POST['ph_t'];
    $dep_f = $_POST['dep_f'];
    $ret_f = $_POST['ret_f'];
    $t_st = $_POST['t_st'];
    $rem = $_POST['rem'];
    $a_name = $_POST['a_name'];

   

    $query = "INSERT INTO crm_ffm (g_name,l_name,gender,dep_city,des_city,n_ad,n_ch,n_inf,g_fr,a_fr,ema,ph_f,ph_s,ph_t,dep_f,ret_f,t_st,rem,a_name) VALUES ('$g_name','$l_name','$gender','$dep_city','$des_city','$n_ad', '$n_ch','$n_inf','$g_fr','$a_fr','$ema','$ph_f','$ph_s','$ph_t','$dep_f','$ret_f','$t_st','$rem','$a_name')";

    $data = mysqli_query($conn,$query);

    if($data)
    {
        echo "<script>alert('Data Added')</script>";
        ?>
        <meta http-equiv = "refresh" content = "0; url =fetch_data.php"/>
        <?php
    }
    else
    {
        echo "failed";
    }
    
    

}
?>