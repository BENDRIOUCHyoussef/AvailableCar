<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - AvailableCar</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>

        /* Custom styles for the about page */
        body {
            background-color: #f8f9fa;
        }

        /* About Section */
        .about-section {
            padding: 60px 0;
            text-align: center;
            background-color: #ffffff;
            margin-bottom: 30px;
        }

        .about-section img {
            max-width: 100%;
            height: auto;
            margin-right: 20px;
            border-radius: 10px;
        }

        .about-section h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .about-section p {
            color: #6c757d;
            font-size: 18px;
        }

        /* Stats Section */
        .stats-section {
            padding: 80px 0;
            background-color: #f8f9fa;
            text-align: center;
            margin-bottom: 30px;
        }

        .stats-item {
            margin-bottom: 30px;
        }

        .stats-item img {
            width: 60px;
            height: 60px;
            margin-bottom: 20px;
        }

        .stats-item h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .stats-item p {
            color: #6c757d;
            font-size: 16px;
        }

        /* Team Section */
        .team-section {
            padding: 80px 0;
            background-color: #ffffff;
            text-align: center;
        }

        .team-member {
            margin-bottom: 30px;
        }

        .team-member img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .team-member h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .team-member p {
            color: #6c757d;
            font-size: 16px;
        }

        /* Footer */
        .footer-section {
            background-color: #343a40;
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <?php include 'navbarOwner.php'; ?>

    <!-- About Us Section -->
    <div class="container-fluid about-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Image to the left -->
                <div class="col-md-6">
                    <img src="assets/img/about.jpg" alt="About Us Image">
                </div>

                <!-- Text content to the right -->
                <div class="col-md-6">
                    <h2>About Us</h2>
                    <p>Welcome to AvailableCar, your trusted partner in car rentals. Start the engine, and your adventure
                        begins. Certain but she but shyness why cottage. Guy the put instrument sir entreaties
                        affronting. Pretended exquisite see cordially the you. Weeks quiet do vexed or whose. Motionless
                        if no to affronting imprudence no precaution. My indulged as disposal strongly attended.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="container stats-section">
        <h2>Our Stats</h2>
        <div class="row">
            <!-- Stat Item 1 -->
            <div class="col-md-4 stats-item">
                <img src="assets/img/drive.png" alt="Car Types Icon">
                <h3>20</h3>
                <p>Car Types</p>
            </div>

            <!-- Stat Item 2 -->
            <div class="col-md-4 stats-item">
                <img src="assets/img/selectcar.png" alt="Rental Outlets Icon">
                <h3>85</h3>
                <p>Rental Outlets</p>
            </div>

            <!-- Stat Item 3 -->
            <div class="col-md-4 stats-item">
                <img src="assets/img/operator.png" alt="Repair Shop Icon">
                <h3>75</h3>
                <p>Repair Shop</p>
            </div>
        </div>
    </div>

    <!-- Team Section -->
    <div class="container team-section">
        <h2>Meet Our Team</h2>
        <div class="row">
            <!-- Team Member 1 -->
            <div class="col-md-4 team-member">
                <img src="assets/img/team1.jpg" alt="Team Member 1">
                <h3>John Doe</h3>
                <p>Founder & CEO</p>
            </div>

            <!-- Team Member 2 -->
            <div class="col-md-4 team-member">
                <img src="assets/img/team2.jpg" alt="Team Member 2">
                <h3>Jane Smith</h3>
                <p>Chief Operating Officer</p>
            </div>

            <!-- Team Member 3 -->
            <div class="col-md-4 team-member">
                <img src="assets/img/team3.jpg" alt="Team Member 3">
                <h3>Mike Johnson</h3>
                <p>Head of Marketing</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
