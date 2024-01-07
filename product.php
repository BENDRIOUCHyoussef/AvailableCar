<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Add your custom styles if needed -->
</head>

<body>

    <!-- Navbar -->
    <?php include 'navbar.php'; ?>

    <!-- Main Content -->
    <div class="container mt-4">
        <?php
        include 'connection.php';

        // Function to sanitize user input
        function sanitizeInput($input)
        {
            return htmlspecialchars(strip_tags($input));
        }

        $carId = isset($_GET['car_id']) ? intval($_GET['car_id']) : 0;

        if ($conn) {
            $query = "SELECT * FROM cars WHERE car_id = $carId";
            $result = mysqli_query($conn, $query);

            if ($result) {
                $row = mysqli_fetch_assoc($result);

                if ($row) {
                    $carMake = $row['make'];
                    $carModel = $row['model'];
                    $carYear = $row['year'];
                    $pickupLocation = $row['pickup_location'];
                    $dropoffLocation = $row['dropoff_location'];
                    $carPrice = $row['price'];
                    $carAvailability = $row['availability'];
                    $carColor = $row['color'];
                    $carFuel = $row['fuel'];
                    $carTransmission = $row['transmission'];
                    $carFuelCapacity = $row['fuel_capacity'];
                    $carMileage = $row['mileage'];
                    $carAdditionalFeatures = $row['additional_features'];

                    // Display detailed information about the car
                    echo '<div class="row">
                            <div class="col-md-6">
                                <img src="assets/img/Car.png" class="img-fluid" alt="Car Image">
                            </div>
                            <div class="col-md-6">
                                <h2>' . $carMake . ' ' . $carModel . '</h2>
                                <p><strong>Year:</strong> ' . $carYear . '</p>
                                <p><strong>Pickup Location:</strong> ' . $pickupLocation . '</p>
                                <p><strong>Dropoff Location:</strong> ' . $dropoffLocation . '</p>
                                <p><strong>Price:</strong> £' . $carPrice . '</p>
                                <p><strong>Availability:</strong> ' . $carAvailability . '</p>
                                <p><strong>Color:</strong> ' . $carColor . '</p>
                                <p><strong>Fuel:</strong> ' . $carFuel . '</p>
                                <p><strong>Transmission:</strong> ' . $carTransmission . '</p>
                                <p><strong>Fuel Capacity:</strong> ' . $carFuelCapacity . ' liters</p>
                                <p><strong>Mileage:</strong> ' . $carMileage . ' miles</p>
                                <p><strong>Additional Features:</strong> ' . $carAdditionalFeatures . '</p>
                            </div>
                        </div>';

                    // Display booking form
                    echo '<div class="mt-4">
                            <h3>Book ' . $carMake . ' ' . $carModel . '</h3>
                            <form method="post" action="book_car.php">
                                <input type="hidden" name="car_id" value="' . $carId . '">
                                <div class="mb-3">
                                    <label for="pickup_date" class="form-label">Pickup Date</label>
                                    <input type="datetime-local" class="form-control" id="pickup_date" name="pickup_date" required>
                                </div>
                                <div class="mb-3">
                                    <label for="dropoff_date" class="form-label">Dropoff Date</label>
                                    <input type="datetime-local" class="form-control" id="dropoff_date" name="dropoff_date" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Book Now</button>
                            </form>
                        </div>';
                } else {
                    echo '<p class="text-danger">Car not found.</p>';
                }
            } else {
                echo '<p class="text-danger">Error in query execution.</p>';
            }

            mysqli_close($conn);
        } else {
            echo '<p class="text-danger">Error: Database connection not established.</p>';
        }
        ?>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
