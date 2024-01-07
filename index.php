<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Driver</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <link rel="stylesheet" href="css\style.css">

    <style>
        /* Define a custom CSS class for the background image */
        .bg-img-own {
            background-image: url('assets/img/banner1.jpg');
            background-size: cover;
            background-position: left;
            color: #ffffff;
            /* Set the text color to contrast with the background */
            padding: 50px;
            position: relative;

        }
        
    </style>
</head>

<body>
    <!-- navbar -->
    <?php include 'navbar.php'; ?>


    <!-- navbar  -->

    <!-- first section  -->

    <div class="container-fluid p-0 bg-img-own l-100" style="height: 500px;">

        <h1 class="h3 mb-3 font-weight-normal">Welcome to AvailableCar!</h1>
        <!-- firstname -->
        <div class="mb-3">
            <label for="inputFirstname" class="sr-only">Explore a new way to rent cars for short-term needs. Log in or
                register to get started.</label>
        </div>
        <label for="inputFirstname" class="sr-only">Driver:</label>
        <div class="card-body row-2">
            <a href="LoginDriver.php" class="btn btn-primary">Login</a>
            <a href="ResgisterDriver.php" class="btn btn-primary">Sign Up</a>
        </div>

        <label for="inputFirstname" class="sr-only">Owner:</label>
        <div class="card-body row-2">
            <a href="LoginDriver.php" class="btn btn-primary">Login</a>
            <a href="ResgisterDriver.php" class="btn btn-primary">Sign Up</a>
        </div>
    </div>

    <div style="margin-bottom: 50px;"></div>
    <!-- Second section  -->

    <div class="container">
        <h2 class="mb-4">Search for a Car</h2>
        <form>
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="make" class="form-label">Make</label>
                    <input type="text" class="form-control" id="make" name="make">
                </div>
                <div class="col-md-4">
                    <label for="model" class="form-label">Model</label>
                    <input type="text" class="form-control" id="model" name="model">
                </div>
                <div class="col-md-4">
                    <label for="year" class="form-label">Year</label>
                    <input type="number" class="form-control" id="year" name="year">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="pickup_location" class="form-label">Pic-kup Date </label>
                    <input type="text" class="form-control" id="pickup_location" name="pickup_location" required>
                </div>
                <div class="col-md-4">
                    <label for="dropoff_location" class="form-label">Drop-of Date </label>
                    <input type="text" class="form-control" id="dropoff_location" name="dropoff_location" required>
                </div>
            </div>

                <div class="row mb-3">
                <div class="col-md-4">
                    <label for="pickup_location" class="form-label">Pick-up Location (Postcode)</label>
                    <input type="text" class="form-control" id="pickup_location" name="pickup_location" required>
                </div>
                <div class="col-md-4">
                    <label for="dropoff_location" class="form-label">Drop-of Location (Postcode)</label>
                    <input type="text" class="form-control" id="dropoff_location" name="dropoff_location" required>
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>

    <!-- Second section  -->

    <!-- Third section  -->

    <div style="margin-bottom: 50px;"></div>



    <!-- Third section  -->


    

    <div style="margin-bottom: 50px;"></div>

    <div class="container">
        <h2 class="mb-4">Featured Cars</h2>
        <div class="row">
            <?php
            include 'connection.php';
            $query = "SELECT * FROM cars";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                // Extract data from the row
                $carMake = $row['make'];
                $carModel = $row['model'];
                $carYear = $row['year'];
                $pickupLocation = $row['pickup_location'];
                $dropoffLocation = $row['dropoff_location'];
                $carPrice = $row['price'];
                $carAvailability = $row['availability'];
                $carAvailabilityCalendar = $row['availability_calendar'];
                $carColor = $row['color'];
                $carFuel = $row['fuel'];
                $carTransmission = $row['transmission'];
                $carFuelCapacity = $row['fuel_capacity'];
                $carMileage = $row['mileage'];
                $carAdditionalFeatures = $row['additional_features'];

                echo '<div class="col-md-3">
                <div class="card">
                    <img src="assets/img/Car.png" class="card-img-top" alt="Car Image">
                    <div class="card-body">
                        <h5 class="card-title">' . $carMake . ' ' . $carModel . '</h5>
                        <div class="row">
                            <div class="col-12">
                                <p>' . $carYear . ' miles &#8226 ' . $carAvailability . ' &#8226 ' . $pickupLocation . ' to ' . $dropoffLocation . '</p>
                            </div>
                            <div class="col-12">
                                <p>Color: ' . $carColor . '</p>
                                <p>Fuel: ' . $carFuel . '</p>
                                <p>Transmission: ' . $carTransmission . '</p>
                                <p>Fuel Capacity: ' . $carFuelCapacity . ' liters</p>
                                <p>Mileage: ' . $carMileage . ' miles</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <p><strong>£ ' . $carPrice . '</strong></p>
                        <a href="product.php?car_id=' . $row['car_id'] . '" class="btn btn-success">View Deal</a>
                    </div>
                </div>
                </div>';
            }

            mysqli_close($conn);
            ?>
        </div>
    </div>




    <!-- <footer> -->

    <?php include 'footer.php'; ?>

    <!-- </footer> -->









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>

</html>