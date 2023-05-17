<?php
include_once "db_conn.php";

// Create database connection
// Check if the form has been submitted
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
//   // Get the POST variables
//   $f_user = $_POST['log_username'];
//   $f_pass = $_POST['log_pass'];
if(isset($_POST['username'])){

  // Prepare SQL statement to retrieve user information from the database
  $sql = "SELECT *
            FROM user_tbl WHERE username == '$log_username'";
  $chk_user = query($conn, $sql);
  if(count($chk_user) == 0){
      header("location:app/index.php?username_invalid");
  }
  else{
      if(count($chk_user) == 1) {
    // Fetch user information from the result set
            foreach($chk_user as $row){
                /*A = Admin , D = Delivery Services*/
               if( in_array($row['user_type'] , 'A' ) ){
                      if($row['password'] === $log_pass ){
                               // Store user ID and user type in session variables
                        $_SESSION['user'] = array(
                                            "user_id" => $row['user_id'],
                                            "username" => $row['username'],
                                            "user_password" => $row['user_password'],
                                            "user_contact_no" => $row['user_contact_no'],
                                            "user_address" => $row['user_address'],
                                            "user_type" => $row['user_type'],
                                             );

                                             if ($_SESSION['user']['user_type'] == 'A') {
                                                header("Location: admin/admin_index.php");
                                             }else{
                                                header("location: app/index.php?not_staff");
                                             }
                        // switch($_SESSION['user']['user_type']){
                        //     case 'A':  header("Location: admin/index.php?Welcome_Admin_{$_SESSION['user']['username']}");
                        //                break;
                        //     case 'D':  header("Location: courier/index.php?Welcome_Courier_{$_SESSION['user']['username']}");
                        //                break;
                        //     default: header("location: index.php?not_staff");
                        // }

                      }
                      else{
                          header("location:app/index.php?wrong_password");
                      }
               }else {
                   /* C = Client*/
                    if(verify_password($log_pass, $row['password'])){
                        $user_id = $row['user_id'];
                        $user_type = $row['user_type'];

                        // Store user ID and user type in session variables
                        $_SESSION['user'] = array(
                                                "user_id" => $row['user_id'],
                                                "username" => $row['username'],
                                                "user_password" => $row['user_password'],
                                                "user_contact_no" => $row['user_contact_no'],
                                                "user_address" => $row['user_address'],
                                                "user_type" => $row['user_type'],
                                             );

                        // Redirect to appropriate page depending on user type
                        if ($_SESSION['user']['user_type'] == 'c') {
                          header("Location: client/client_index.php");
                        } 
                    }
                    else{
                        header("location:app/index.php?wrong_password");
                    }
                   
               }
                
            }
            
        }
      else if($chk_user > 1){
          header("location:app/index.php?duplicate_user_found");
      }
      else{
          header("location:app/index.php?no_user_found");
      }
  }
}

// Close database connection
mysqli_close($conn);


?>