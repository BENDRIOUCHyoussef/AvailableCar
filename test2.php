<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyWi1WCKlf5H9tNYuqFkzaeg5L5t4i5Ml" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css"> <!-- Add your custom styles if needed -->
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Car Rental</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#home">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="bg-primary text-white text-center">
        <div class="container">
            <h1 class="display-4">Car Rental</h1>
            <p class="lead">Explore the world with our wide range of rental cars</p>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid rounded-circle" src="https://via.placeholder.com/400" alt="">
                </div>
                <div class="col-lg-6">
                    <h2 class="section-heading">About Us</h2>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu diam a
                        dolor auctor iaculis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                        ac turpis egestas. Integer tristique venenatis congue. Aliquam id justo id nisi suscipit
                        fringilla. </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-5 mb-lg-0">
                        <img class="card-img-top" src="https://via.placeholder.com/400" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Car Selection</h4>
                            <p class="card-text">Choose from our wide range of cars to suit your needs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card mb-5 mb-lg-0">
                        <img class="card-img-top" src="https://via.placeholder.com/400" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Easy Booking</h4>
                            <p class="card-text">Our booking process is simple and user-friendly.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <img class="card-img-top" src="https://via.placeholder.com/400" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Customer Support</h4>
                            <p class="card-text">24/7 customer support to assist you at any time.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="section-heading">Contact Us</h2>
                    <p class="text-muted">Have questions or need assistance? Feel free to reach out to us.</p>
                </div>
                <div class="col-lg-6">
                    <!-- Your contact form goes here -->
                    <form>
                        <!-- Form fields go here -->
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-4 bg-dark text-white">
        <div class="container text-center">
            <p>Car Rental &copy; 2023. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"
        integrity="sha384-pzjw8TXk4z9gWSg2utVeiW+yfpX0ncLBE2pZT/ekGfUZBfGeaaGmO8axpC2YXGmB"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyWi1WCKlf5H9tNYuqFkzaeg5L5t4i5Ml"
        crossorigin="anonymous"></script>

</body>

</html>
