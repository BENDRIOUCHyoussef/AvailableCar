<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Owner</title>
    <link rel="stylesheet" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!-- navbar -->
    <?php include 'navbar.php'; ?>

    <!-- navbar  -->


    <!-- Log In form -->

    <div class="container mb-6">
        <?php
        include 'connection.php';

        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit"])) {
            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            $phone = $_POST["phone"];
            $postcode = $_POST["postcode"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $passwordRepeat = $_POST["repassword"];

            $errors = array();

            if (empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($passwordRepeat)) {
                array_push($errors, "All fields are required");
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors, "Email is not valid");
            }
            if (strlen($password) < 8) {
                array_push($errors, "Password must be at least 8 characters long");
            }
            if ($password !== $passwordRepeat) {
                array_push($errors, "Passwords do not match");
            }

            // Changed SQL query to use prepared statement
            $sql = "SELECT * FROM owner WHERE Email = ?";
            $stmt = mysqli_stmt_init($conn);

            if (mysqli_stmt_prepare($stmt, $sql)) {
                mysqli_stmt_bind_param($stmt, "s", $email);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) > 0) {
                    array_push($errors, "Email already exists");
                }

                mysqli_stmt_close($stmt);
            } else {
                die("Something went wrong");
            }

            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    echo "<div class='alert alert-danger'>$error</div>";
                }
            } else {
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                
                // Changed SQL query to use prepared statement
                $sql = "INSERT INTO owner (First_name, Last_name, Phone, Postcode, Email, Password) VALUES (?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);

                if (mysqli_stmt_prepare($stmt, $sql)) {
                    mysqli_stmt_bind_param($stmt, "ssssss", $firstname, $lastname, $phone, $postcode, $email, $hashedPassword);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_close($stmt);

                    echo "<div class='alert alert-success'>You are registered successfully. <a href='LoginOwner.php'>Login</a></div>";
                } else {
                    die("Something went wrong");
                }
            }
        }
    ?>
    

        <form class="form-signin" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <h1 class="h3 mb-3 font-weight-normal">Owner Sign Up</h1>
            <!-- firstname -->
            <div class="mb-3">
                <label for="inputFirstname" class="sr-only">First Name</label>
                <input type="firstname" name="firstname" id="inputFirstname" class="form-control" placeholder="Firstname" required=""
                    autofocus="">
            </div>

            <!-- Lastname -->
            <div class="mb-3">
                <label for="inputLastname" class="sr-only">Last Name</label>
                <input type="Lastname" name="lastname" id="inputLastname" class="form-control" placeholder="Lastname" required=""
                    autofocus="">
            </div>

            <!-- phone -->
            <div class="mb-3">
                <label for="inputPhone" class="sr-only">Phone number</label>
                <input type="tel" name="phone" id="inputPhone" class="form-control" placeholder="Phone number" required=""
                    autofocus="">
            </div>

            <!-- postcode -->
            <div class="mb-3">
                <label for="inputPostcode" class="sr-only">Postcode</label>
                <input type="text" name="postcode" id="inputPostcode" class="form-control" placeholder="Postcode" required=""
                    autofocus="">
            </div>

            <!-- email -->
            <div class="mb-3">
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required=""
                    autofocus="">
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
            <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">Sign Up</button>

            <!-- Register buttons -->
            <div class="text-center">
                <p>Already have an Account? <a href="LoginOwner.php">Login</a></p>
            </div>
        </form>
    </div>






    <!-- Log In Form -->

    <!-- <footer> -->
    <?php include 'footer.php'; ?>
    <!-- </footer> -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>



</html>