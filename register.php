<?php
// Include database connection file
include 'config.php';


// Initialize variables to store form input values
$name = $email = $phone = $username = $password = $confirm_password = '';

// Initialize error variables
$name_error = $email_error = $phone_error = $username_error = $password_error = $confirm_password_error = '';

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form values
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate form fields
    if (empty($name)) {
        $name_error = "Name is required.";
    }
    if (empty($email)) {
        $email_error = "Email is required.";
    }
    if (empty($phone)) {
        $phone_error = "Phone number is required.";
    }
    if (empty($username)) {
        $username_error = "Username is required.";
    }
    if (strlen($password) < 8) {
        $password_error = "Password must be at least 8 characters long.";
    }
    if ($password !== $confirm_password) {
        $confirm_password_error = "Passwords do not match.";
    }

    // If no errors, proceed with registration
    if (empty($name_error) && empty($email_error) && empty($phone_error) && empty($username_error) && empty($password_error) && empty($confirm_password_error)) {

        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
       // $hashed_password = $password; // Stores the plain text password


        // Check if the username or email already exists
        $query = "SELECT * FROM users WHERE username='$username' OR email='$email'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            echo "<script>alert('Username or Email already exists!');</script>";
        } else {
            // Insert the new user into the database
            $sql = "INSERT INTO users (name, email, phone, username, password) VALUES ('$name', '$email', '$phone', '$username', '$hashed_password')";

            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('Registration successful!'); window.location.href='home.php';</script>";
            } else {
                echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
            }
        }
    }
}

?>

