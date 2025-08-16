<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page - Tourism Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white; /* Set background to white */
            margin: 0;
            padding: 0;
            color: #333;
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
            height: 50px; /* Adjust logo size */
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
        .main-content {
            text-align: center;
            padding: 50px;
        }

        .main-content h1 {
            font-size: 2.5rem;
            margin-bottom: 30px;
            color: #333;
        }

        /* Card Container */
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 0 auto;
            max-width: 1200px;
            padding: 20px;
        }

        .card {
            width: 22%;
            margin-bottom: 20px;
            background-color: #f4f4f4;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card .card-content {
            padding: 15px;
        }

        .card .card-title {
            font-size: 1.2rem;
            font-weight: bold;
            color: #333;
        }

        .card .card-description {
            font-size: 0.9rem;
            color: #666;
            margin: 10px 0;
        }

        .card .explore-btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1rem;
            transition: background-color 0.3s;
        }

        .card .explore-btn:hover {
            background-color: #45a049;
        }
        footer {
            text-align: center;
            padding: 10px 0;
            background-color: rgba(0, 0, 0, 0.8);
            position: flex;
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
                <li><a href="home.php">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.html">Register</a></li>
            </ul>
        </div>
    </header>

    <!-- Main Content -->
    <div class="main-content">
        <h1>Let's Select the Place to Travel and Explore</h1>

        <!-- Card Container -->
        <div class="card-container">
            <!-- Row 1 -->
            <div class="card">
                <img src="https://i.pinimg.com/originals/72/68/8b/72688bea449a8f89883a5b53c94bc437.jpg" alt="Place 1">
                <div class="card-content">
                    <h2 class="card-title">Taj Mahal, Agra</h2>
                    <p class="card-description">The iconic marble mausoleum symbolizing eternal love.</p>
                    <a href="tajmahal.html" class="explore-btn">Explore Now -></a>
                </div>
            </div>
            <div class="card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSH-nOwFgIJkBcMddmyyMysZwqE8G_JFCD8QQ&s" alt="Place 2">
                <div class="card-content">
                    <h2 class="card-title">Amber Fort, Jaipur</h2>
                    <p class="card-description">A majestic hilltop fort blending Mughal and Rajput architecture.</p>
                    <a href="amberfort.html" class="explore-btn">Explore Now -></a>
                </div>
            </div>
            <div class="card">
                <img src="https://i.pinimg.com/736x/cf/06/11/cf0611ab9617690a8d4bf67080ba20f7.jpg" alt="Place 3">
                <div class="card-content">
                    <h2 class="card-title">Munnar</h2>
                    <p class="card-description">Hill station in Kerala, known for tea gardens and misty landscapes.</p>
                    <a href="munnar.html" class="explore-btn">Explore Now -></a>
                </div>
            </div>
            <div class="card">
                <img src="https://i.pinimg.com/originals/b2/7b/79/b27b79dbe9e3ad5c6d811100991dabae.jpg" alt="Place 4">
                <div class="card-content">
                    <h2 class="card-title">Golden Temple, Amritsar</h2>
                    <p class="card-description">The holiest Sikh shrine, surrounded by a serene lake.</p>
                    <a href="golden.html" class="explore-btn">Explore Now -></a>
                </div>
            </div>
            <!-- Row 2 -->
            <div class="card">
                <img src="https://i.pinimg.com/474x/04/0e/c2/040ec2ed0a672c7e6f7ad42051db44b2.jpg" alt="Place 5">
                <div class="card-content">
                    <h2 class="card-title">Varanasi Ghats, Uttar Pradesh</h2>
                    <p class="card-description">Sacred steps along the Ganges, witnessing centuries-old rituals.</p>
                    <a href="varanasi.html" class="explore-btn">Explore Now -></a>
                </div>
            </div>
            <div class="card">
                <img src="https://i.pinimg.com/736x/ea/d1/83/ead183df2e32e27f359500e52bc674ac.jpg" alt="Place 6">
                <div class="card-content">
                    <h2 class="card-title">Leh-Ladakh</h2>
                    <p class="card-description">A dream destination for adventure seekers with breathtaking landscapes.</p>
                    <a href="ladakh.html" class="explore-btn">Explore Now -></a>
                </div>
            </div>
            <div class="card">
                <img src="https://thebohochica.com/wp-content/uploads/2019/08/Alleppey-Houseboat.jpg" alt="Place 7">
                <div class="card-content">
                    <h2 class="card-title">Alleppey</h2>
                    <p class="card-description">Famous for its tranquil backwaters and houseboat cruises in Kerala.</p>
                    <a href="alleypey.html" class="explore-btn">Explore Now -></a>
                </div>
            </div>
            <div class="card">
                <img src="https://i.pinimg.com/originals/97/c4/bc/97c4bc6ab9a03150355b08752b096489.jpg" alt="Place 8">
                <div class="card-content">
                    <h2 class="card-title">Goa Beaches</h2>
                    <p class="card-description">Vibrant beaches with golden sands, water sports, and nightlife.</p>
                    <a href="goa.html" class="explore-btn">Explore Now -></a>
                </div>
            </div>
            <!-- Row 1 -->
            <div class="card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0a6eNoRtMVO18H4os0ugvR_WSO-Snibtu-A&s" alt="Place 1">
                <div class="card-content">
                    <h2 class="card-title">Ajanta and Ellora Caves, Maharastra</h2>
                    <p class="card-description">UNESCO World Heritage rock-cut caves with stunning sculptures.</p>
                    <a href="ajanta.html" class="explore-btn">Explore Now -></a>
                </div>
            </div>
            <div class="card">
                <img src="https://i.pinimg.com/736x/e8/87/69/e887690d82a3f58e81d131fa1b951ec4.jpg" alt="Place 2">
                <div class="card-content">
                    <h2 class="card-title">Hampi, Karnataka</h2>
                    <p class="card-description">Ruins of the Vijayanagara Empire, a UNESCO World Heritage Site.</p>
                    <a href="hampi.html" class="explore-btn">Explore Now -></a>
                </div>
            </div>
            <div class="card">
                <img src="https://i.pinimg.com/736x/5f/e7/70/5fe770ca2da0d7ec542a40d867cd9a85.jpg" alt="Place 3">
                <div class="card-content">
                    <h2 class="card-title">Manali</h2>
                    <p class="card-description">Popular Himalayan hill station offering snow-capped mountains and adventure sports.</p>
                    <a href="manali.html" class="explore-btn">Explore Now -></a>
                </div>
            </div>
            <div class="card">
                <img src="https://i.pinimg.com/736x/11/96/64/119664dae230ace6a81692542713f3e0.jpg" alt="Place 4">
                <div class="card-content">
                    <h2 class="card-title">Andaman and Nicobar Islands</h2>
                    <p class="card-description">Pristine beaches, coral reefs, and tropical forests.</p>
                    <a href="andaman.html" class="explore-btn">Explore Now -></a>
                </div>
            </div>
            <!-- Row 2 -->
            <div class="card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSsZDksoV4zBsJFKpqxs3XedbLQBzFuy75wVA&s" alt="Place 5">
                <div class="card-content">
                    <h2 class="card-title">Jaisalmer Fort, Rajasthan</h2>
                    <p class="card-description">The "Golden Fort," surrounded by the Thar Desert.</p>
                    <a href="jaisalmer.html" class="explore-btn">Explore Now -></a>
                </div>
            </div>
            <div class="card">
                <img src="https://i.pinimg.com/736x/27/a8/93/27a89303778916f8e4246e273aeaffdf.jpg" alt="Place 6">
                <div class="card-content">
                    <h2 class="card-title">Coorg</h2>
                    <p class="card-description">Lush green hill station known for coffee plantations and serene beauty.</p>
                    <a href="coorg.html" class="explore-btn">Explore Now -></a>
                </div>
            </div>
            <div class="card">
                <img src="https://i.pinimg.com/originals/29/ae/3c/29ae3cecc1ba2bc70bdca81f4ba7c0c1.jpg" alt="Place 7">
                <div class="card-content">
                    <h2 class="card-title">Shimla, Himachal Pradesh</h2>
                    <p class="card-description">A colonial hill station with breathtaking vistas and cool weather.</p>
                    <a href="shimla.html" class="explore-btn">Explore Now -></a>
                </div>
            </div>
            <div class="card">
                <img src="https://i.pinimg.com/200x150/b7/29/6c/b7296c89339ffbdeb8c763c7cd7737a6.jpg" alt="Place 8">
                <div class="card-content">
                    <h2 class="card-title">Darjeeling</h2>
                    <p class="card-description">Famous for tea estates and spectacular views of Kanchenjunga mountain.</p>
                    <a href="darjeeling.html" class="explore-btn">Explore Now -></a>
                </div>
            </div>
            <!-- Row 3 -->
            <!-- Add more rows with similar cards as needed -->
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; <span>2024</span> Tourism Management System. All rights reserved.</p>
    </footer>

</body>
</html>
