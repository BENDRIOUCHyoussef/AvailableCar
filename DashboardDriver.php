<?php
    session_start();

    if (isset($_SESSION['user_email']) == "") {
        header("Location: index.php");
    }

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Driver</title>
    <link rel="stylesheet" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!-- navbar Driver-->

    <?php include 'navbarDriver.php'; ?>

    <!-- add car  -->

    <div class="container">
        <h2 class="mb-4">Add My Car for Rental</h2>
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
                    <label for="location" class="form-label">Location</label>
                    <input type="text" class="form-control" id="location" name="location">
                </div>
                <div class="col-md-4">
                    <label for="price" class="form-label">Price Range</label>
                    <select class="form-select" id="price" name="price">
                        <option value="0-50">$0 - $50</option>
                        <option value="50-100">$50 - $100</option>
                        <option value="100-150">$100 - $150</option>
                        <option value="150-200">$150 - $200</option>
                        <option value="200+">Over $200</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label for="availability" class="form-label">Availability</label>
                    <select class="form-select" id="availability" name="availability">
                        <option value="available">Available</option>
                        <option value="not_available">Not Available</option>
                    </select>
                </div>
            </div>


            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="availability_calendar" class="form-label">Availability Calendar</label>
                    <input type="datetime-local" class="form-control" id="availability_calendar"
                        name="availability_calendar">
                </div>
                <div class="col-md-4">
                    <label for="rate" class="form-label">Hourly/Daily Rate</label>
                    <input type="text" class="form-control" id="rate" name="rate">
                </div>
                <div class="col-md-4">
                    <label for="additional_features" class="form-label">Additional Features</label>
                    <input type="text" class="form-control" id="additional_features" name="additional_features">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Add Car</button>
        </form>
    </div>

    <!-- add car  -->

    <!-- Manage car  -->
    <div style="margin-bottom: 50px;"></div>



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

    <?php include 'footer.php'; ?>
    <!-- </footer> -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>

</html>