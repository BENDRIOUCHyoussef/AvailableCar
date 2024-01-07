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

        <div style="margin-bottom: 50px;"></div>
        <!-- Second section  -->

        <div class="container">
            <h2 class="mb-4">Search for a Car</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="make" class="form-label">Make</label>
                        <input type="text" class="form-control" id="make" name="make">
                    </div>

                    <div class="col-md-4">
                        <label for="model" class="form-label">Model</label>
                        <input type="text" class="form-control" id="model" name="model">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>

        <!-- Second section  -->

        <!-- Third section  -->

        <div style="margin-bottom: 50px;"></div>

        <!-- Third section  -->

        <?php
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            include 'connection.php';

            // Get make and model from the form
            $make = mysqli_real_escape_string($conn, $_POST['make']);
            $model = mysqli_real_escape_string($conn, $_POST['model']);

            // Query to search based on make and model
            $query = "SELECT * FROM cars WHERE make LIKE '%$make%' AND model LIKE '%$model%'";
            $result = mysqli_query($conn, $query);

            if ($result) {
                // Display search results
                echo '<div class="container" id="search-results">
                        <h2 class="mb-4">Search Results</h2>
                        <div class="row">';

                while ($row = mysqli_fetch_assoc($result)) {
                    // Display search result card
                    echo '<div class="col-md-3">
                            <div class="card">
                                <img src="assets/img/Car.png" class="card-img-top" alt="Car Image">
                                <div class="card-body">
                                    <h5 class="card-title">' . $row['make'] . ' ' . $row['model'] . '</h5>
                                    <div class="row">
                                        <div class="col-12">
                                            <p>' . $row['year'] . ' miles &#8226 ' . $row['availability'] . ' &#8226 ' . $row['pickup_location'] . ' to ' . $row['dropoff_location'] . '</p>
                                        </div>
                                        <div class="col-12">
                                            <p>Color: ' . $row['color'] . '</p>
                                            <p>Fuel: ' . $row['fuel'] . '</p>
                                            <p>Transmission: ' . $row['transmission'] . '</p>
                                            <p>Fuel Capacity: ' . $row['fuel_capacity'] . ' liters</p>
                                            <p>Mileage: ' . $row['mileage'] . ' miles</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-center">
                                    <p><strong>£ ' . $row['price'] . '</strong></p>
                                    <a href="product.php?car_id=' . $row['car_id'] . '" class="btn btn-success">View Deal</a>
                                </div>
                            </div>
                        </div>';
                }

                echo '</div></div>';
            } else {
                echo "Error: " . mysqli_error($conn);
            }

            // Close the database connection
            mysqli_close($conn);
        }
        ?>

        <!-- Featured Cars section -->
        <div class="container">
            <h2 class="mb-4">Featured Cars</h2>
            <div class="row">
                <?php
                // Include your database connection file
                include 'connection.php';

                // Original code to fetch and display featured cars
                $query = "SELECT * FROM cars";
                $result = mysqli_query($conn, $query);

                if ($result) {
                    echo '<div class="row">';
                    while ($row = mysqli_fetch_assoc($result)) {
                        // Output the card dynamically with "View Deal" button
                        echo '<div class="col-md-3">
                                <div class="card">
                                    <img src="assets/img/Car.png" class="card-img-top" alt="Car Image">
                                    <div class="card-body">
                                        <h5 class="card-title">' . $row['make'] . ' ' . $row['model'] . '</h5>
                                        <div class="row">
                                            <div class="col-12">
                                                <p>' . $row['year'] . ' miles &#8226 ' . $row['availability'] . ' &#8226 ' . $row['pickup_location'] . ' to ' . $row['dropoff_location'] . '</p>
                                            </div>
                                            <div class="col-12">
                                                <p><strong>Color: </strong>' . $row['color'] . '</p>
                                                <p><strong>Fuel: </strong>' . $row['fuel'] . '</p>
                                                <p><strong>Transmission: </strong>' . $row['transmission'] . '</p>
                                                <p><strong>Fuel Capacity: </strong>' . $row['fuel_capacity'] . ' liters</p>
                                                <p><strong>Mileage: </strong>' . $row['mileage'] . ' miles</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center">
                                        <p><strong>£ ' . $row['price'] . ' per day</strong></p>
                                        <a href="product.php?car_id=' . $row['car_id'] . '" class="btn btn-success">View Deal</a>
                                    </div>
                                </div>
                            </div>';
                    }
                    echo '</div>';
                }

                // Free the result set
                mysqli_free_result($result);

                // Close the database connection
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
