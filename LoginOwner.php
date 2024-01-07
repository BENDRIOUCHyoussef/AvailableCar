<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Owner</title>
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
                session_start();

                include 'connection.php';

                if ($_SERVER["REQUEST_METHOD"] === "POST") {
                    $email = $_POST["email"] ?? '';
                    $password = $_POST["password"] ?? '';

                    // Changed SQL query to use prepared statement
                    $sql = "SELECT * FROM owner WHERE Email = ?";
                    $stmt = mysqli_stmt_init($conn);

                    if (mysqli_stmt_prepare($stmt, $sql)) {
                        mysqli_stmt_bind_param($stmt, "s", $email);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);

                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();

                            // Verify the password
                            if (password_verify($password, $row["Password"])) {
                                // Password is correct, set session variables
                                $_SESSION["user_id"] = $row["Driver_ID"];
                                $_SESSION["user_email"] = $row["Email"];

                                // Redirect to a dashboard or home page
                                header("Location: DashboardOwner.php");
                                exit();
                            } else {
                                echo "Incorrect password";
                            }
                        } else {
                            echo "User not found";
                        }

                        mysqli_stmt_close($stmt);
                    } else {
                        die("Something went wrong");
                    }
                }
                ?>



        <form class="form-signin" method="post" action="">
            <h1 class="h3 mb-3 font-weight-normal">Car Owner Log In</h1>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required=""
                autofocus="">

            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="">
            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                        <label class="form-check-label" for="form2Example31"> Remember me </label>
                    </div>
                </div>

                <div class="col">
                    <!-- Simple link -->
                    <a href="#!">Forgot password?</a>
                </div>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4" name="login">Log In</button>

            <!-- Register buttons -->
            <div class="text-center">
                <p>Not a member? <a href="#!">Register</a></p>

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