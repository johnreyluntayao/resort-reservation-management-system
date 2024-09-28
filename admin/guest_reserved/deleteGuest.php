<?php

//deleteGuest.php
include '../db_connection.php';

// Get the reservation ID from the POST request
$reservation_id = $_POST["package_id"];

// Prepare and execute separate DELETE statements
$sql1 = "DELETE FROM confirmation WHERE package_id = '$reservation_id'";
$sql2 = "DELETE FROM payment WHERE package_id = '$reservation_id'";
$sql3 = "DELETE FROM information_details WHERE package_id = '$reservation_id'";
$sql4 = "DELETE FROM details_and_packages WHERE package_id = '$reservation_id'";

// Use a try-catch block to handle any errors
try {
    $conn->begin_transaction();

    // Execute each DELETE statement
    $conn->query($sql1);
    $conn->query($sql2);
    $conn->query($sql3);
    $conn->query($sql4);

    // If all queries succeed, commit the transaction
    $conn->commit();
    
    // Deletion successful
    echo "Success";
} catch (Exception $e) {
    // If an error occurs, rollback the transaction and log the error
    $conn->rollback();
    echo "Error: " . $e->getMessage();
    // Additionally, log the error to a file or error tracking system for detailed analysis
} finally {
    // Close the database connection
    $conn->close();
}

?>

