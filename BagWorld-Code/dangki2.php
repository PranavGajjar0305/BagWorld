<?php

include "db.php";

$f_name = $_POST["f_name"];
$l_name = $_POST["l_name"];
$email = $_POST['email'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$mobile = $_POST['mobile'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$name = "/^[A-Z][a-zA-Z ]+$/";
$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
$number = "/^[0-9]+$/";

if (empty($f_name) || empty($l_name) || empty($email) || empty($password) || empty($repassword) ||
        empty($mobile) || empty($address1) || empty($address2)) {

    echo "<script>alert('Fields cannot be left blank!')</script>";
    exit();
} else {
    if (!preg_match($name, $f_name)) {
        echo "<script>alert('$f_name illegal!')</script>";
        exit();
    }
    if (!preg_match($name, $l_name)) {
        echo "<script>alert('$l_name illegal!')</script>";
        exit();
    }
    if (!preg_match($emailValidation, $email)) {
        echo "<script>alert('Invalid email address!')</script>";
        exit();
    }
    if (strlen($password) < 8) {
        echo "<script>alert('The password is too weak!')</script>";
        exit();
    }
    if (strlen($repassword) < 8) {
        echo "<script>alert('The password is too weak!')</script>";
        exit();
    }
    if ($password != $repassword) {
        echo "<script>alert('Passwords do not match')</script>";
        exit();
    }
    if (!preg_match($number, $mobile)) {
        echo "<script>alert('Invalid phone number $mobile!')</script>";
        exit();
    }
    if ((strlen($mobile) < 10) || (strlen($mobile) > 11)) {
        echo "<script>alert('Minimum phone number 10 digits!')</script>";
        exit();
    }
    //existing email address in our database
    $sql = "SELECT user_id FROM user_info WHERE email = '$email' LIMIT 1";
    $check_query = mysqli_query($con, $sql);
    $count_email = mysqli_num_rows($check_query);
    if ($count_email > 0) {
        echo "<script>alert('This email already exists by another account, please try again!')</script>";
        exit();
    } else {
        // $password = md5($password);
        $password = ($password);
        $sql = "INSERT INTO `user_info` 
		(`user_id`, `first_name`, `last_name`, `email`, 
		`password`, `mobile`, `address1`, `address2`) 
		VALUES (NULL, '$f_name', '$l_name', '$email', 
		'$password', '$mobile', '$address1', '$address2')";
        $run_query = mysqli_query($con, $sql);


        $sql1 = "SELECT * FROM Guest;";                         //SQL querry
        $run_query1 = mysqli_query($con, $sql1);
        $count = mysqli_num_rows($run_query1);
        if ($count > 0) {
            $no = 1;
            $total_amt = 0;
            while ($row = mysqli_fetch_array($run_query1)) {
                $qty = $row["Qty"];
                $pro_price = $row["Price"];
                $total = $row["Total_amt"];
                $price_array = array($total);
                $total_sum = array_sum($price_array);
                $total_amt = $total_amt + $total_sum;
            }
        }

        date_default_timezone_set('Asia/Kolkata');
        $timeok = time();
        $date_orderok = date("d-m-Y H:i:s", $timeok);


        include('Guest.php');



        if ($run_query) {
            echo "
            <script type='text/javascript'>   
                alert('Payment success. Close this window to continue buying.')
                $('#f_name').val('');
                $('#l_name').val('');
                $('#email').val('');
                $('#password').val('');
                $('#repassword').val('');
                $('#mobile').val('');
                $('#address1').val('');
                $('#address2').val('');
            </script>
			";
        }
    }
}



?>