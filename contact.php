<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - International Students in the UK</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f8ff;
        }
        .container {
            width: 100%;
            margin: 0 auto;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            /* padding: 20px; */
            background-color: #f0f8ff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .logo img {
            height: 70px;
            padding: 10px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav li {
            margin: 0 15px;
        }

        nav a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        .content-section {
            text-align: center;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            padding: 20px;
        }
        .card {
            margin: 10px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            width: calc(50% - 20px);
            box-sizing: border-box;
        }
        .about-company {
            margin-bottom: 20px; /* Additional spacing */
        }
        .about-company h1 {
            color: #00796b; /* Theme color for headings */
            margin-bottom: 10px; /* Space between heading and paragraph */
        }
        .about-company p {
            font-size: 16px;
            line-height: 1.6;
            color: #555; /* Darker text for better readability */
        }
        footer {
            text-align: center;
            padding: 10px;
            background-color: #fff;
            box-shadow: 0 -2px 4px rgba(0,0,0,0.1);
            margin-top: 20px;
        }
        #map {
            height: 300px;
            width: 100%;
        }
        .banner {
            width: 100%;
            height: 650px;
            background: url('images/Contactus.jpg') no-repeat center center;
            background-size: cover;
            text-align: center;
            color: #fff;
        }
        .banner h1 {
            padding-top: 80px;
            font-size: 2.5em;
            margin: 0;
        }
        .banner p {
            margin: 20px 0 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">
                <a href="index.php"><img src="images/logo.png" alt="University Logo"></a>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="health.php">Health</a></li>
                    <li><a href="gp_near_me.php">GP Near Me</a></li>
                    <li><a href="recreational_places.php">Recreational Places</a></li>
                    <li><a href="resources.php">Resource Hub</a></li>
                    <li><a href="events.php">Events</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <section class="banner">
                 <h1>Contact Us</h1> 
            </section>
            <div class="content-section">
                <div class="about-company">
                    <h1>About Our Company</h1>
                    <p>Welcome to FitFusion! We are dedicated to enhancing the health and well-being of international students in the UK, especially from India.</p>
                </div>
                <div class="card">
                    <h2>Contact Us</h2>
                    <a href="tel:+4407771023309"><p>Phone: +44 07771023309</p></a>
                    <a href="mailto:santosh.bangera.2023@uni.strath.ac.uk"><p>Email: santosh.bangera.2023@uni.strath.ac.uk</p></a>
                    <p>Address: University Of Strathclyde, Glasgow</p>
                </div>
                <div class="card">
                    <h2>Business Hours</h2>
                    <p>Monday - Friday: 9:00 AM - 5:00 PM</p>
                    <p>Saturday: 10:00 AM - 2:00 PM</p>
                    <p>Sunday: Closed</p>
                </div>
                <div id="map"></div>
            </div>
        </main>

        <footer>
            <p>&copy; 2024 International Students in the UK. All rights reserved.</p>
            <p><a href="contact.php">Contact</a></p>
        </footer>
    </div>

    <script>
        function initMap() {
            var glasgow = {lat: 55.8642, lng: -4.2518}; // Glasgow City Center coordinates
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: glasgow
            });
            var marker = new google.maps.Marker({
                position: glasgow,
                map: map
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpinMhCh3CaS9IGLf51agcLhxtzOKkNA0&callback=initMap"></script>
</body>
</html>
