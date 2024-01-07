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
            <h1 class="h3 mb-3 font-weight-normal">Owner Modify information</h1>
            <!-- firstname -->
            <div class="mb-3">
                <label for="inputFirstname" class="sr-only">First Name</label>
                <input type="text" name="firstname" id="inputFirstname" class="form-control" placeholder="Firstname" required="">
            </div>

            <!-- Lastname -->
            <div class="mb-3">
                <label for="inputLastname" class="sr-only">Last Name</label>
                <input type="text" name="lastname" id="inputLastname" class="form-control" placeholder="Lastname" required="">
            </div>

            <!-- phone -->
            <div class="mb-3">
                <label for="inputPhone" class="sr-only">Phone number</label>
                <input type="tel" name="phone" id="inputPhone" class="form-control" placeholder="Phone number" required="">
            </div>

            <!-- postcode -->
            <div class="mb-3">
                <label for="inputPostcode" class="sr-only">Postcode</label>
                <input type="text" name="postcode" id="inputPostcode" class="form-control" placeholder="Postcode" required="">
            </div>

            <!-- email -->
            <div class="mb-3">
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="">
            </div>

            <!-- password -->
            <div class="mb-3">
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="">
            </div>

            <!-- password repeat -->
            <div class="mb-3">
                <label for="inputPasswordRepeat" class="sr-only">Retype password</label>
                <input type="password" name="repassword" id="inputPasswordRepeat" class="form-control" placeholder="Retype password"
                    required="">
            </div>

            <!-- Submit button -->
            <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">Modify</button>
        </form>

        <!-- footer.php -->
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
                            <!-- Add other links as needed -->
                        </ul>
                    </div>
                </div>
                <hr class="mt-4">
                <p class="text-center mb-0">© 2023 AvailableCar. All rights reserved.</p>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    </body>
</html>
