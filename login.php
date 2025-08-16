<?php
// login.php (Handles user login)
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include the database configuration
//    include 'config.php';

    // Get user credentials
  //  $username = $_POST['username'];
   // $password = $_POST['password'];

    // Check if the user exists in the database
 //   $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  //  $result = mysqli_query($conn, $query);

   // if (mysqli_num_rows($result) > 0) {
        // Fetch the user data
  //      $user = mysqli_fetch_assoc($result);
  //      $stored_password = $user['password']; // The hashed password from the database
    
        // Verify the password
  //      if (password_verify($password, $stored_password)) {
  //          echo "<script>alert('Login Successful!'); window.location.href='home.php';</script>";
  //      } else {
  //          echo "<script>alert('Invalid credentials!');</script>";
  //      }
  //  } else {
  //      echo "<script>alert('User not found!');</script>";
  //  }
//}


 //   if (mysqli_num_rows($result) > 0) {
 //       // Redirect to dashboard or main page on successful login
 //       echo "<script>alert('Login Successful!'); window.location.href='home.php';</script>";
 //   } else {
 //       echo "<script>alert('Invalid credentials!');</script>";
 //   }

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include the database configuration
    include 'config.php';

    // Sanitize and retrieve user inputs
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    // Query the database for the username
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        // Fetch user details
        $user = mysqli_fetch_assoc($result);
        $stored_password = $user['password']; // Hashed password from DB

        // Verify the password
        if (password_verify($password, $stored_password)) {
            echo "<script>alert('Login Successful!'); window.location.href='home.php';</script>";
        } else {
            echo "<script>alert('Invalid password!');</script>";
        }
    } else {
        echo "<script>alert('User not found!');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Tourism Management System</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: url('https://thumbs.dreamstime.com/b/beach-coconut-trees-island-mu-ko-ang-thong-national-marine-park-near-ko-samui-gulf-thailand-surat-thani-80558303.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 100vh;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .login-form {
            background-color: rgba(0, 0, 0, 0.7); /* Transparent black background */
            color: white;
            padding: 40px;
            border-radius: 10px;
            width: 300px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.6);
        }

        .login-form h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .login-form label {
            font-size: 1rem;
            margin-bottom: 10px;
            display: block;
        }

        .login-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: none;
            font-size: 1rem;
        }

        .login-form button {
            width: 100%;
            padding: 10px;
            background-color: #ffd700;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
        }

        .login-form button:hover {
            background-color: #ffcc00;
        }

        .forgot-password {
            text-align: right;
            font-size: 0.9rem;
            margin-top: -10px;
        }

        .signup-text {
            font-size: 1rem;
            margin-top: 10px;
        }

        .signup-text a {
            color: #ffd700;
            text-decoration: none;
        }

        .signup-text a:hover {
            color: #ffcc00;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-form">
            <h2>Login</h2>
            <form method="POST" action="login.php">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required><br>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required><br>

                <button type="submit">Login</button>

                

                <div class="signup-text">
                    <p>Don't have an account? <a href="register.html">Sign Up</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
