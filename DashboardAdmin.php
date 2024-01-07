<?php
session_start();

// If the user is not logged in, redirect them to the login page
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.php');
    exit;
}

// Rest of your dashboard code...
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!-- navbar -->

    <header class="p-3 mb-3 border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                    <img class="bi me-2" src="assets/img/Logo.png" width="200" role="img" aria-label="Bootstrap">
                </a>


                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">Privacy</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">About</a></li>

                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                </form>

                <div class="dropdown text-end">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="logoutAdmin.php">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>






    <div class="container">
        <h2 class="mb-4">Mange My Cars</h2>
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-3">
                <div class="card">
                    <img src="assets/img/Car.png" class="card-img-top" alt="Car 1">
                    <div class="card-body">
                        <h5 class="card-title">Toyota Corolla</h5>
                        <div class="row">
                            <div class="col-12">
                                <p>50,000 miles &#8226 Auto &#8226 Petrol</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <p><strong>$20,000</strong></p>
                        <a href="#" class="btn btn-primary">Manage</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-3">
                <div class="card">
                    <img src="assets/img/Car.png" class="card-img-top" alt="Car 2">
                    <div class="card-body">
                        <h5 class="card-title">Honda Civic</h5>
                        <div class="row">
                            <div class="col-12">
                                <p>35,000 miles &#8226 Manual &#8226 Diesel</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <p><strong>$18,000</strong></p>
                        <a href="#" class="btn btn-primary">Manage</a>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!-- Manage car  -->


    <!-- <footer> -->

    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>About AvailableCar</h5>
                    <p>AvailableCar is a platform that connects car owners with drivers for short-term rentals. Find
                        the
                        perfect car for your needs.</p>
                </div>
                <div class="col-md-3">
                    <h5>Contact Us</h5>
                    <p>Email: info@availablecar.com</p>
                    <p>Phone: (123) 456-7890</p>
                </div>
                <div class="col-md-3">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Privacy Notice</a></li>
                        <li><a href="#">Products and Services</a></li>
                        <li><a href="LoginOwner.html">Owner Login</a></li>
                        <li><a href="RegisterOwner.html">Owner Registration</a></li>
                        <li><a href="LoginDriver.html">Driver Login</a></li>
                        <li><a href="ResgisterDriver.html">Driver Registration</a></li>
                        <li><a href="LoginAdmin.html">Admin Login</a></li>
                        <li><a href="RegisterAdmin.html">Admin Registration</a></li>
                    </ul>
                </div>
            </div>
            <hr class="mt-4">
            <p class="text-center mb-0">© 2023 AvailableCar. All rights reserved.</p>
        </div>
    </footer>

    <!-- </footer> -->










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>

</html>