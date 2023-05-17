<?php
include_once "db_conn.php";

if(isset($_POST['fullname'])){
    $fullname               = $_POST['fullname'];
    $address                = $_POST['address'];
    $dateofservice          = $_POST['dateofservice'];
    $servicename            = $_POST['servicename'];
    $service_status         = "P";

    $sql = "INSERT INTO direct_reserv_tbl (fullname, reserve_address, date_reserve, service_type, reserv_status) VALUES ('$fullname', '$address', '$dateofservice', '$servicename', '$service_status')";
    if(mysqli_query($conn, $sql)){
        $msg = "The reservation is successfully sent to admin";
    }else{
        $msg = "Error " . $msg . "<br>" . mysqli_error($conn);
    }
    header("location:index.php?msg=$msg");
}

mysqli_close($conn);






?>