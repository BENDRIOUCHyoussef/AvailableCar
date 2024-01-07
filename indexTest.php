<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Driver</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="css/style.css">

    <style>
        /* Define a custom CSS class for the background image */
        .bg-img-own {
            background-image: url('assets/img/banner1.jpg');
            background-size: cover;
            background-position: center; /* Adjusted to center the background image */
            color: #ffffff;
            /* Set the text color to contrast with the background */
            padding: 50px;
            position: relative;
        }

        .bg-img-own .content-container {
            margin-left: 20px;
            /* Adjust the left margin as needed */
            text-align: left;
            /* Align text to the left */
        }

        /* Add some space between sections */
        .section-divider {
            margin-top: 30px;
            margin-bottom: 30px;
        }

        /* Style the featured car section */
        .featured-car-section {
            margin-bottom: 50px;
        }

        .featured-car-section h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .card {
            margin-bottom: 20px;
        }

        /* Style the standalone background image section */
        .bg-image {
            background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/041.webp');
            background-size: cover;
            height: 400px;
            margin-top: 58px;
            position: relative;
        }

        .bg-image .mask {
            background-color: rgba(0, 0, 0, 0.6);
            height: 100%;
        }

        .bg-image .text-white {
            text-align: center;
            padding: 15% 0; /* Adjusted for better centering of text */
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <?php include 'navbar.php'; ?>

    <!-- First Section -->
    <div class="container-fluid p-0 bg-img-own" style="height: 200px;">
        <div class="content-container">
            <h1 class="h3 mb-3 font-weight-normal">Welcome to AvailableCar!</h1>
            <div class="mb-3">
                <label for="inputFirstname" class="sr-only">Explore a new way to rent cars for short-term needs. Log in
                    or register to get started.</label>
            </div>
            <div class="card-body row-2">
                <label for="inputFirstname" class="sr-only">Driver:</label>
                <a href="LoginDriver.html" class="btn btn-primary">Login</a>
                <a href="RegisterDriver.html" class="btn btn-primary">Sign Up</a>
            </div>
            <div class="card-body row-2">
                <label for="inputFirstname" class="sr-only">Owner:</label>
                <a href="LoginOwner.html" class="btn btn-primary">Login</a>
                <a href="RegisterOwner.html" class="btn btn-primary">Sign Up</a>
            </div>
        </div>
    </div>
    <!-- First Section -->

    <!-- Standalone Background Image Section -->
    <div class="p-5 text-center bg-image">
        <div class="mask">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                    <h1 class="mb-3">Heading</h1>
                    <h4 class="mb-3">Subheading</h4>
                    <a data-mdb-ripple-init class="btn btn-outline-light btn-lg" href="#!" role="button">Call to
                        action</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Standalone Background Image Section -->

    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <!-- Footer -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
