<?php
include_once "db_conn.php";

  
// check if the form has been submitted
if (isset($_POST['username'])) {
    // extract the form values
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $address    = $_POST['address'];
    $contact    = $_POST['contact_no'];
    $usertype   = "c";
    //for encryption
    // $private_key = gen_private_key(16);
    // $enc_pass = encrypt_password($password,$private_key);

    // check if the user already exists
    $sql = "SELECT * FROM user_tbl WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // the user already exists, so do not insert a new record
        $msg[]="Your Information already taken. Try login using your credentials.";
    } else {
        // insert the new user record into the users table
        $sql = "INSERT INTO user_tbl (username, user_password, user_address, user_contact_no, user_type) VALUES ('$username', '$password', '$address', '$contact', '$usertype')";
        if (mysqli_query($conn, $sql)) {
            $msg[]="You are now successfully registered. You can now use you credentials to login.";?>
            <?php 
        } else {
            $msg[]="Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    // header("location:index.php?register&msg=$msg");
    
                        if(isset($msg)){
                            foreach($msg as $msg){
                                echo '<div class="alert alert-danger" role="alert">' . $msg . '</div>';
                            }
                        }            
                  
}

// close the database connection
mysqli_close($conn);

//$privateKey 	= 'AA74CDCC2BBRT935136HH7B63C27'; // user define key
//$secretKey 	= '5fgf5HJ5g27'; // user define secret key
//$encryptMethod  = "AES-256-CBC";
//$stringEncrypt  = '3423432423'; // user encrypt value
//$key    = hash('sha256', $privateKey);
//$ivalue = substr(hash('sha256', $secretKey), 0, 16); // sha256 is hash_hmac_algo
//echo $output = openssl_decrypt(base64_decode($stringEncrypt), $encryptMethod, $key, 0, $ivalue);
//// output is a decrypted value


?>