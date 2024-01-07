<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Driver</title>
    <link rel="stylesheet" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    </head>

<body>
   
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary mb-4">
        <div class="container-fluid">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                <img class="bi me-2" src="assets/img/Logo.png" width="200" role="img" aria-label="Bootstrap">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link active" aria-current="page" href="#">Privacy</a>
                    <a class="nav-link active" aria-current="page" href="#">Login</a>
                    <a class="nav-link active" aria-current="page" href="#">Sign In</a>
                </div>
            </div>
        </div>
    </nav>


    <!-- navbar  -->


    <!-- Log In form -->

    <div class="container mb-6">
        <form class="form-signin" method="post" >
            <h1 class="h3 mb-3 font-weight-normal">Driver Sign Up</h1>
            <!-- firstname -->
            <div class="mb-3">
                <label for="inputFirstname" class="sr-only">First Name</label>
                <input type="firstname" name = "firstName" id="inputFirstname" class="form-control" placeholder="Firstname" required=""
                    autofocus="">
            </div>
            <!-- Lastname -->
            <div class="mb-3">
                <label for="inputLastname" class="sr-only">Last Name</label>
                <input type="Lastname" name = "lastName" id="inputLastname" class="form-control" placeholder="Lastname" required=""
                    autofocus="">
            </div>

            <!-- phone -->
            <div class="mb-3">
                <label for="inputPhone" class="sr-only">Phone number</label>
                <input type="tel" name = "phone" id="inputPhone" class="form-control" placeholder="Phone number" required=""
                    autofocus="">
            </div>
             <!-- Submit button -->
             <button type="submit" class="btn btn-primary btn-block mb-12">Sign Up</button>


        </form>
    </div>






    <!-- Log In Form -->

    <!-- <footer> -->

    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>About AvailableCar</h5>
                    <p>AvailableCar is a platform that connects car owners with drivers for short-term rentals. Find the
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

<?php
    include 'connection.php';


    if ($_SERVER["REQUEST_METHOD"] === "POST") {


        // Retrieve form data
        $firstname = $_POST["firstName"];
        $lastname = $_POST["lastName"];
        $phone = $_POST["phone"];

        echo "<script>";
        echo "alert('test');";
        echo "</script>";

        //$password=$_POST["password"];
        //echo $Gher;
        //echo $Logs." ".date ("Y-m-d H:i:s");;
        // SQL query to insert data into the database
        // $sql = "INSERT INTO  `driver`(`First_Name`, `Last_Name`, `Phone`, `Postcode`, `Email`, `Password`) 
        // VALUES ('$firstname','$lastname','$phone','$postcode','$email','$password');";
        $sql = "INSERT INTO  test (First_Name, Last_Name, Phone) VALUES ('$firstname','$lastname','$phone');";


        
       //Execute the query
       if ($conn->query($sql) === TRUE) {
            echo "<script>alert('hello');</script>";
                echo "<script>";
                echo "alert('no data')";

                echo "</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }  

    ?>
</html>