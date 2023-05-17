<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
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
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
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
    <!-- end of nav -->

    <!-- form -->
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
                <div class="col-8">
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="fullname" class="form-label">Fullname</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Date of Service</label>
                            <input type="date" class="form-control" id="inputPassword4">
                        </div>
                        <label for="inputPassword4" class="form-label">Type of Service</label>
                        <select class="form-select" name="date_reserv" aria-label="Default select example">
                            <option value="1">Disco Party</option>
                            <option value="2">Birthday Party</option>
                            <option value="3">Graduation Ceremony</option>
                        </select>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Reserve Service</button>
                        </div>
                    </form>
                </div>
            <div class="col-2"></div>
        </div>
    </div>
    
    

    <!-- end of form -->



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>