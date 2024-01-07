<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Owner</title>
    <link rel="stylesheet" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <!-- navbar owner -->

    <?php include 'navbarOwner.php'; ?>


    <!-- add car  -->

    <div class="container">
        <?php
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Include your database connection file
            include 'connection.php';

           // Retrieve form data
            $make = $_POST['make'];
            $model = $_POST['model'];
            $year = $_POST['year'];
            $pickup_location = $_POST['pickup_location'];
            $dropoff_location = $_POST['dropoff_location'];
            $price = $_POST['price'];
            $availability = $_POST['availability'];
            $availability_calendar = $_POST['availability_calendar'];
            $color = $_POST['color'];
            $fuel = $_POST['fuel'];
            $transmission = $_POST['transmission'];
            $fuel_capacity = isset($_POST['fuel_capacity']) ? (float)$_POST['fuel_capacity'] : null;;
            $mileage = $_POST['mileage'];
            $additional_features = $_POST['additional_features'];

            // Insert data into the 'cars' table
            $query = "INSERT INTO cars (make, model, year, pickup_location, dropoff_location, price, availability, availability_calendar, color, fuel, transmission, fuel_capacity, mileage, additional_features) VALUES ('$make', '$model', $year, '$pickup_location', '$dropoff_location', $price, '$availability', '$availability_calendar', '$color', '$fuel', '$transmission', $fuel_capacity, $mileage, '$additional_features')";

            if (mysqli_query($conn, $query)) {
                echo '<script>alert("Car added successfully!");</script>';
            } else {
                echo '<script>alert("Error adding car: ' . mysqli_error($conn) . '");</script>';
            }

            // Close the database connection
            mysqli_close($conn);
        }
        ?>


        <!-- Add Car Form -->
        <div class = "formCar">
            <h2 class="mb-4">Add My Car for Rental</h2>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="make" class="form-label">Make</label>
                        <input type="text" class="form-control" id="make" name="make" required>
                    </div>
                    <div class="col-md-4">
                        <label for="model" class="form-label">Model</label>
                        <input type="text" class="form-control" id="model" name="model" required>
                    </div>
                    <div class="col-md-4">
                        <label for="year" class="form-label">Year</label>
                        <input type="number" class="form-control" id="year" name="year" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="pickup_location" class="form-label">Pickup Location (Postcode)</label>
                        <input type="text" class="form-control" id="pickup_location" name="pickup_location" required>
                    </div>
                    <div class="col-md-4">
                        <label for="dropoff_location" class="form-label">Dropoff Location (Postcode)</label>
                        <input type="text" class="form-control" id="dropoff_location" name="dropoff_location" required>
                    </div>
                    <div class="col-md-4">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="availability" class="form-label">Availability</label>
                        <select class="form-select" id="availability" name="availability" required>
                            <option value="available">Available</option>
                            <option value="not_available">Not Available</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="availability_calendar" class="form-label">Availability Calendar</label>
                        <input type="datetime-local" class="form-control" id="availability_calendar"
                            name="availability_calendar" required>
                    </div>
                    <div class="col-md-4">
                        <label for="color" class="form-label">Color</label>
                        <input type="text" class="form-control" id="color" name="color" required>
                    </div>
                </div>
                <div class="row mb-3">
                <div class="col-md-4">
                    <label for="fuel" class="form-label">Fuel</label>
                    <select class="form-select" id="fuel" name="fuel" required>
                        <option value="gasoline">Gasoline</option>
                        <option value="petrol">Petrol</option>
                        <option value="electric">Electric</option>
                        <option value="hybrid">Hybrid</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="transmission" class="form-label">Transmission</label>
                    <select class="form-select" id="transmission" name="transmission" required>
                        <option value="manual">Manual</option>
                        <option value="automatic">Automatic</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="fuel_capacity" class="form-label">Fuel Capacity</label>
                    <input type="number" class="form-control" id="fuel_capacity" name="fuel_capacity">
                </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="mileage" class="form-label">Mileage</label>
                        <input type="number" class="form-control" id="mileage" name="mileage">
                    </div>
                    <div class="col-md-8">
                        <label for="additional_features" class="form-label">Additional Features</label>
                        <input type="text" class="form-control" id="additional_features" name="additional_features">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Add Car</button>
            </form>
        </div>
        <div style="margin-bottom: 50px;"></div>

        <!-- add car  -->

        <!-- Manage car  -->

        <div class="container">
            <h2 class="mb-4">Mange My Cars</h2>
            <div class="row">
                <?php
                // Include your database connection file
                include 'connection.php';

                // Retrieve the logged-in owner's email address (replace this line with your actual code)
                $owner_email = 'owner1@example.com';

                // Retrieve data from the 'cars' table
                $query = "SELECT * FROM cars WHERE owner_email = '$owner_email'";
                $result = mysqli_query($conn, $query);

                // Check if there are records
                if ($result && mysqli_num_rows($result) > 0) {
                    // Fetch data as an associative array
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

                        // Output the card dynamically
                        // Output the card dynamically with a Remove button
                        // Output the card dynamically with "Remove" and "Manage" buttons
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
                                <a href="remove_car.php?car_id=' . $row['car_id'] . '" class="btn btn-danger">Remove</a>
                                <a href="update_car.php?car_id=' . $row['car_id'] . '" class="btn btn-primary">Manage</a>
                            </div>
                        </div>
                        </div>';
                    }

                    // Free the result set
                    mysqli_free_result($result);
                } else {
                    echo '<p>No cars found</p>';
                }

                // Close the database connection
                mysqli_close($conn);
                ?>

            </div>
        </div>

        <!-- Manage car  -->

        <!-- <footer> -->
        <?php include 'footer.php'; ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>

</html>