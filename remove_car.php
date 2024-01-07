<?php
// Include your database connection file
include 'connection.php';

// Check if car_id is provided in the URL
if (isset($_GET['car_id'])) {
    $car_id = $_GET['car_id'];

    // Perform the deletion
    $delete_query = "DELETE FROM cars WHERE car_id = $car_id";
    if (mysqli_query($conn, $delete_query)) {
        echo '<script>alert("Car removed successfully!");</script>';
    } else {
        echo '<script>alert("Error removing car: ' . mysqli_error($conn) . '");</script>';
    }
} else {
    echo '<script>alert("Car ID not provided!");</script>';
}

// Close the database connection
mysqli_close($conn);

// Redirect back to the page displaying the cars
header("Location: DashboardOwner.php");
exit();
?>
