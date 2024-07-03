<?php
include 'assets/Common/connection.inc.php';

// Assuming you have a MySQLi connection $conn already established

// Define the initial range and the stopping point
$startRange = 1000;
$endRange = 5000;
$stopAt = 1000000;

// Loop until endRange exceeds stopAt
while ($endRange <= $stopAt) {
    // Prepare the data to be inserted
    $dataToInsert = "$startRange - $endRange";

    // Prepare the SQL statement
    $sql = "INSERT INTO investment_range (Investment_Range_Name) VALUES ('$dataToInsert')";

    // Execute the statement
    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully: $dataToInsert<br>";
    } else {
        echo "Error inserting record: " . $conn->error . "<br>";
    }

    // Increment the ranges for the next iteration
    $startRange = $endRange;
    $endRange += 5000;
}

// Close the connection
$conn->close();
?>
