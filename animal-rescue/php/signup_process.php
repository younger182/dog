<?php
session_start();
include 'db_connect.php'; // Include database connection file

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get form data
    $firstName = trim($_POST['firstName'] ?? '');
    $lastName = trim($_POST['lastName'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirmPassword = $_POST['confirmPassword'] ?? '';

    // Validate inputs
    if (empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($confirmPassword)) {
        die("All fields are required.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email address.");
    }

    if ($password !== $confirmPassword) {
        die("Passwords do not match.");
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert data into the database
    $stmt = $conn->prepare("INSERT INTO users (email, password, first_name, last_name) VALUES (?, ?, ?, ?)");
    if ($stmt === false) {
        die("Failed to prepare statement: " . $conn->error);
    }

    $stmt->bind_param("ssss", $email, $hashedPassword, $firstName, $lastName);

    if ($stmt->execute()) {
        // Successful signup: Redirect to login page
        header('Location: ../Html file/login.php');
        exit(); // Ensure no further script execution
    } else {
        // Check for duplicate email error
        if ($conn->errno === 1062) { // Duplicate entry error code
            echo "The email you entered is already registered. <a href='../Html file/signup.php'>Try again</a>";
        } else {
            echo "Error: " . $conn->error;
        }
    }
    
    $stmt->close();
}

$conn->close();
?>
