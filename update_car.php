<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Car Details</title>
    <link rel="stylesheet" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!-- Navbar -->
    <?php include 'navbarOwner.php'; ?>

    <!-- Update Car Form -->
    <div class="container mt-4">

        <h2>Update Car Details</h2>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . '?car_id=' . $car_id); ?>">

            <?php
            // update_car.php

            // Include your database connection file
            include 'connection.php';

            // Check if the car_id parameter is present in the URL
            if (isset($_GET['car_id'])) {
                $car_id = $_GET['car_id'];

                // Retrieve car details from the database
                $query = "SELECT * FROM cars WHERE car_id = $car_id";
                $result = mysqli_query($conn, $query);

                if ($result && mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);

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
                } else {
                    // Handle error if no car found
                    echo 'Car not found.';
                    exit();
                }

                // Free the result set
                mysqli_free_result($result);
            } else {
                // Handle error if car_id is not present
                echo 'Invalid request.';
                exit();
            }

            // Check if the form is submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
                $fuel_capacity = isset($_POST['fuel_capacity']) ? (float)$_POST['fuel_capacity'] : null;
                $mileage = $_POST['mileage'];
                $additional_features = $_POST['additional_features'];

                // Update data in the 'cars' table
                $update_query = "UPDATE cars 
                                SET make = '$make', model = '$model', year = $year, 
                                pickup_location = '$pickup_location', dropoff_location = '$dropoff_location',
                                price = $price, availability = '$availability', 
                                availability_calendar = '$availability_calendar', color = '$color',
                                fuel = '$fuel', transmission = '$transmission', 
                                fuel_capacity = $fuel_capacity, mileage = $mileage, 
                                additional_features = '$additional_features'
                                WHERE car_id = $car_id";

                if (mysqli_query($conn, $update_query)) {
                    echo '<script>alert("Car updated successfully!");</script>';
                } else {
                    echo '<script>alert("Error updating car: ' . mysqli_error($conn) . '");</script>';
                }

                // Close the database connection
                mysqli_close($conn);
                header("Location: DashboardOwner.php");
            }
            ?>

            <!-- Add the input fields with the current car details -->
            <!-- For simplicity, I'm using text inputs for all fields. You can adjust them based on your needs. -->
            <!-- You may want to pre-fill these fields with the existing values from the database. -->
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="make" class="form-label">Make</label>
                    <input type="text" class="form-control" id="make" name="make" value="<?php echo $carMake; ?>" required>
                </div>
                <div class="col-md-4">
                    <label for="model" class="form-label">Model</label>
                    <input type="text" class="form-control" id="model" name="model" value="<?php echo $carModel; ?>" required>
                </div>
                <div class="col-md-4">
                    <label for="year" class="form-label">Year</label>
                    <input type="number" class="form-control" id="year" name="year" value="<?php echo $carYear; ?>" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="pickup_location" class="form-label">Pickup Location (Postcode)</label>
                    <input type="text" class="form-control" id="pickup_location" name="pickup_location" value="<?php echo $pickupLocation; ?>" required>
                </div>
                <div class="col-md-4">
                    <label for="dropoff_location" class="form-label">Dropoff Location (Postcode)</label>
                    <input type="text" class="form-control" id="dropoff_location" name="dropoff_location" value="<?php echo $dropoffLocation; ?>" required>
                </div>
                <div class="col-md-4">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price" value="<?php echo $carPrice; ?>" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="availability" class="form-label">Availability</label>
                    <select class="form-select" id="availability" name="availability" required>
                        <option value="available" <?php echo ($carAvailability == 'available') ? 'selected' : ''; ?>>Available</option>
                        <option value="not_available" <?php echo ($carAvailability == 'not_available') ? 'selected' : ''; ?>>Not Available</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="availability_calendar" class="form-label">Availability Calendar</label>
                    <input type="datetime-local" class="form-control" id="availability_calendar"
                        name="availability_calendar" value="<?php echo date('Y-m-d\TH:i', strtotime($carAvailabilityCalendar)); ?>" required>
                </div>
                <div class="col-md-4">
                    <label for="color" class="form-label">Color</label>
                    <input type="text" class="form-control" id="color" name="color" value="<?php echo $carColor; ?>" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="fuel" class="form-label">Fuel</label>
                    <select class="form-select" id="fuel" name="fuel" required>
                        <option value="gasoline" <?php echo ($carFuel == 'gasoline') ? 'selected' : ''; ?>>Gasoline</option>
                        <option value="petrol" <?php echo ($carFuel == 'petrol') ? 'selected' : ''; ?>>Petrol</option>
                        <option value="electric" <?php echo ($carFuel == 'electric') ? 'selected' : ''; ?>>Electric</option>
                        <option value="hybrid" <?php echo ($carFuel == 'hybrid') ? 'selected' : ''; ?>>Hybrid</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="transmission" class="form-label">Transmission</label>
                    <select class="form-select" id="transmission" name="transmission" required>
                        <option value="manual" <?php echo ($carTransmission == 'manual') ? 'selected' : ''; ?>>Manual</option>
                        <option value="automatic" <?php echo ($carTransmission == 'automatic') ? 'selected' : ''; ?>>Automatic</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="fuel_capacity" class="form-label">Fuel Capacity</label>
                    <input type="number" class="form-control" id="fuel_capacity" name="fuel_capacity" value="<?php echo $carFuelCapacity; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="mileage" class="form-label">Mileage</label>
                    <input type="number" class="form-control" id="mileage" name="mileage" value="<?php echo $carMileage; ?>">
                </div>
                <div class="col-md-8">
                    <label for="additional_features" class="form-label">Additional Features</label>
                    <input type="text" class="form-control" id="additional_features" name="additional_features" value="<?php echo $carAdditionalFeatures; ?>">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Update Car</button>
        </form>
    </div>



    <?php include 'footer.php'; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
