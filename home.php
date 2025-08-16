<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Tourism Management System</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: url("https://thumbs.dreamstime.com/b/beach-coconut-trees-island-mu-ko-ang-thong-national-marine-park-near-ko-samui-gulf-thailand-surat-thani-80558303.jpg");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            overflow: hidden;
            color: #fff;
        }

        /* Navbar Styling */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .navbar .brand {
            display: flex;
            align-items: center;
        }

        .navbar .brand img {
            height: 50px;
            margin-right: 10px;
            border-radius: 25px;
        }

        .navbar .brand span {
            font-size: 1.5rem;
            font-weight: bold;
            color: #fff;
        }

        .navbar .nav-links {
            display: flex;
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .navbar .nav-links li {
            margin-left: 20px;
        }

        .navbar .nav-links a {
            text-decoration: none;
            color: #fff;
            font-size: 1rem;
            transition: color 0.3s;
        }

        .navbar .nav-links a:hover {
            color: #ffd700;
        }

        /* Main Content Styling */
        main {
            text-align: center;
            padding: 100px 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 100px);
        }

        .content-container {
            max-width: 800px;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 10px;
            color: #ffffff;
            margin-left: 100px;
        }

        .content-container h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        .content-container p {
            font-size: 1.5rem;
            font-weight: bold;
        }

        /* Footer Styling */
        footer {
            text-align: center;
            padding: 10px 0;
            background-color: rgba(0, 0, 0, 0.8);
            position: fixed;
            bottom: 0;
            width: 100%;
            color: #fff;
            font-size: 0.9rem;
        }

        footer span {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <header>
        <div class="navbar">
            <div class="brand">
                <img src="https://t3.ftcdn.net/jpg/05/37/84/90/360_F_537849028_5e8MvNaeZYOfd8rR8edBHY1ofRNjqfj9.jpg" alt="Tourism Logo">
                <span>Tourism Management</span>
            </div>
            <ul class="nav-links">
                <!-- Added Home link here -->
                <li><a href="desired_home.php">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.html">Register</a></li>
            </ul>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <div class="content-container">
            <h1>Welcome to the Tourism Management System</h1>
            <p>You have successfully logged in/registered! Explore our system and discover your next adventure.</p>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; <span>2024</span> Tourism Management System. All rights reserved.</p>
    </footer>
</body>
</html>
