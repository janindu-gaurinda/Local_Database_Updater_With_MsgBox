<?php
// Database configuration
include "./conn.php";


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO admin (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $hashed_password);
    // Execute the query
    if ($stmt->execute()) {
        $new_record_add = "New record created successfully";
        // Redirect back to the feedback page with the success message
        header("Location: ./home.php?new_record_add=" . urlencode($new_record_add));
        exit();
    } else {
        $record_add_error = "Error: " . $stmt->error;
        // Redirect back to the feedback page with the success message
        header("Location: ./index.php?record_add_error=" . urlencode($record_add_error));
        exit();
    }

    // Close the statement and connection
    // $stmt->close();
    $conn->close();
}
