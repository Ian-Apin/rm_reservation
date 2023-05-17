<?php
include_once "../app/db_conn.php";

// check if service form is submitted
if(isset($_POST['service_name'])){
    $service_name       = $_POST['service_name'];
    $service_desc       = $_POST['service_desc'];
    $price              = $_POST['price'];

    // check if already exist
    $sql = "SELECT * FROM services_tbl WHERE servicename = '$service_name'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        $msg ="This service is already saved.";
    }else{
        $sql = "INSERT INTO services_tbl (servicename, service_description, service_price) VALUES ('$service_name', '$service_desc', '$price')";
        if(mysqli_query($conn, $sql)){
            $msg = "Service successfully saved.";

        }else{
            $msg = "Error: " . $msg . "<br>" . mysqli_error($conn);
        }
    }
    header("location:../admin/add_services.php?register&msg=$msg");

}
mysqli_close($conn);

?>