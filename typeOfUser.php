<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!-- navbar -->
    <?php include 'navbar.php'; ?>

    <!-- navbar  -->



    <div class="container-md ">
        <h1 class="h3 mb-3 font-weight-normal">Which type of User are you:</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="assets/img/Driver.png" alt="Card image cap">
                    <div class="card-body row-2">
                        <a href="LoginDriver.php" class="btn btn-primary">Login</a>
                        <a href="RegisterDriver.php" class="btn btn-primary">Sign Up</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="assets/img/Owner.png" alt="Card image cap">
                    <div class="card-body row-2">
                        <a href="LoginOwner.php" class="btn btn-primary">Login</a>
                        <a href="RegisterOwner.php" class="btn btn-primary">Sign Up</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="assets/img/Admin.png" alt="Card image cap">
                    <div class="card-body row-2">
                        <a href="LoginAdmin.php" class="btn btn-primary">Login</a>
                    </div>
                </div>
            </div>
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