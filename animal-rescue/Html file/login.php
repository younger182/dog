<?php
session_start(); // Start the session
include '../php/db_connect.php'; // Include database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the email and password are provided
    if (empty($email) || empty($password)) {
        $error = "Please fill in all fields.";
    } else {
        // Prepare and execute the SQL statement
        $stmt = $conn->prepare("SELECT id, first_name, last_name, password FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // Verify the password
            if (password_verify($password, $user['password'])) {
                // Set session variables
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['first_name'] = $user['first_name'];
                $_SESSION['last_name'] = $user['last_name'];

                // Redirect to the index.php page
                header("Location: ../Html file/index.php");
                exit;
            } else {
                $error = "Invalid password.";
            }
        } else {
            $error = "No user found with this email.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/Login.css">
  <title>Login Page</title>
</head>

<body>
  <div class="mainform">
    <form method="POST" action="login.php">
      <p class="form-title">Sign in to your account</p>
      <?php if (!empty($error)) : ?>
        <p style="color: red;"><?= htmlspecialchars($error) ?></p>
      <?php endif; ?>
      <div class="input-container">
        <input 
            type="email" 
            name="email" 
            placeholder="Enter your email" 
            required 
            pattern="[a-zA-Z0-9._%+-]+@gmail\.com" 
            title="Please enter a valid email address (e.g., username@gmail.com)"
        >
        <span></span>
      </div>
      <div class="input-container">
        <input type="password" name="password" placeholder="Enter password" required>
      </div>
      <button type="submit" class="submit">Sign in</button>

      <p class="signup-link">
        No account? <a href="signup.php">Sign up</a>
      </p>
      <p class="back-to-homepage">
        <a href="../Html file/index.php">Go back to homepage</a>
      </p>
    </form>
  </div>
</body>

</html>
