<?php include_once "db_conn.php";?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<style>
    .nav_color{
        background-color: #123740;
    }
    .brand_color{
        color: #f1802d;
    }
    .links_color ul li a{
        color: #b0d7e1;
    }
    .links_color ul li a:hover{
        color: #ffff;
    }
    .active_link{
        color: #ffff;
    }
    .btn-contact_us:hover{
        background-color: #87def9;
        border: 0;
        transition: .2s ease;
    }
</style>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg nav_color">
            <div class="container-fluid">
                <a class="navbar-brand brand_color" href="#">RM</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse links_color" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link active_link" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                                </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li> -->
                    </ul>
                    <form class="d-flex" action="log_in.php" method="POST">
                        <input class="form-control me-2" type="text" name="log_username" placeholder="Enter Username">
                        <input class="form-control me-2" type="password" name="log_pass" placeholder="Enter Password">
                        <button class="btn btn-outline-success" type="submit">LogIn</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
<br>
                <!-- contant area -->
    <div class="container">
        <div class="row">
            <div class="col-6">

                <div class="card border border-0" style="width: 100%; height: 100%">
                        <div class="card-body">
                            <h1 class="card-title">RM</h1>
                            <h3 class="card-subtitle mb-2 text-body-secondary">Reservation</h3>
                            <p class="card-text">RM Lights and Sounds will give satisfying services. Connect with us and do not hesitate to make your reservation for your special ocassions. Thank you!</p>
                            <!-- <a href="#" class="btn btn-primary btn-contact_us">Contact Us</a> -->
                            <!-- modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Book Now
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="row g-3" action="reserv_service.php" method="post">
                                            <div class="col-md-6">
                                                <label for="fullname" class="form-label">Fullname</label>
                                                <input type="text" class="form-control" id="fullname" name="fullname">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="dateofdervice" class="form-label">Date of Service</label>
                                                <input type="date" class="form-control" id="dateofservice" name="dateofservice">
                                            </div>
                                            <select class="form-select" name="date_reserv" aria-label="Default select example" name="servicename" placeholder="Select Service">
                                                <?php 
                                                    $sql = "SELECT * FROM services_tbl";
                                                    $services = mysqli_query($conn, $sql);
                                                    foreach($services as $service){?>
                                                        <option value="<?php echo $service['service_id'];?>"><?php echo $service['servicename']; ?></option><?php
                                                    }
                                                ?>
                                            </select>
                                            <div class="col-12">
                                                <label for="inputAddress" class="form-label">Address</label>
                                                <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St">
                                            </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Send Reservation</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- end modal -->
                        </div>
                </div>
            </div>
            
            <div class="col-6">
            <?php
                        if(isset($msg)){
                            foreach($msg as $msg){
                                echo "<h4>" . $msg . "</h4>";
                            }
                        }  ?>  
                <form class="row g-3" method="POST" action="register_user.php">
                    <div class="col-md-6">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username"required>
                    </div>
                    <div class="col-md-6">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
                    </div>
                    <div class="col-12">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
                    </div>
                    <div class="col-12">
                        <label for="contact" class="form-label">Contact no.</label>
                        <input type="text" class="form-control" id="contact" name="contact_no" placeholder="09*********">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" name="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>
                    <!-- services area -->
    <div class="container">
        <div class="row">
            <div class="col-5"></div>
            <div class="col-2">
                <h5>Our Services</h5>
            </div>
            <div class="col-5"></div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <?php 
                        $sql = "SELECT * FROM services_tbl";
                        $services = mysqli_query($conn, $sql);
                        foreach($services as $service){?>
            <div class="col-4" value="<?php echo $service['service_id'];?>">
                
                <div class="card shadow-lg">
                    
                    <div class="card-body">
                        <h5 class="card-title" ><?php echo $service['servicename'];?></h5>
                        <p class="card-text"><?php echo $service['service_description'];?></p>
                        <p class="card-text text-danger"><?php echo "Php " . $service['service_price'];?></p>
                            <!-- // < !-- <a href="#" class="btn btn-primary">Book Now</a> -->

                        
                    </div>
                        
                    
                </div>
                        
                    
            </div><?php
                } 
            ?>
            <!-- <div class="col-4">
            <div class="card shadow-lg">
                    <div class="card-body">
                        <h5 class="card-title">Birthday Party</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
            <div class="card shadow-lg">
                    <div class="card-body">
                        <h5 class="card-title">Graduation Ceremony</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div> -->
            
        </div>
    </div>

    <!-- <div class="modal registered" id="registered" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>
 -->






<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>