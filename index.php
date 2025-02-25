<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>International Students in the UK</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f8ff;
        }

        .container {
            width: 100%;
            
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


        .menu-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
            padding: 10px;
        }

        .menu-toggle div {
            width: 25px;
            height: 2px;
            background-color: #333;
            margin: 5px 0;
            transition: all 0.3s;
        }

        .banner {
            width: 100%; /* Set the container width */
            height: 650px; /* Set a fixed height */
            background: url('images/homepgnew.jpg') no-repeat center center;
            background-size: cover;
            text-align: center;
            color: #fff;
        }

        .banner h1 {
            padding-top: 80px; /* Adjust padding to vertically center the text */
            font-size: 2.5em;
            margin: 0;
        }

        .banner p {
            margin: 20px 0 0;
        }

        .features {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        .feature {
            text-align: center;
            margin: 20px;
            width: 90%;
        }

        .feature img {
            width: 80px;
            height: 80px;
        }

        .feature h2 {
            color: #00796b;
        }

        .about-us {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            border-radius: 5px;
            margin-top: 20px;
        }

        #about {
            text-align: center;
            color: #00796b;
            margin: 20px 0;
        }

        .card {
            background-color: #e0f7fa;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            padding: 10px;
            margin: 10px;
            width: 30%; /* Adjusted for equal width on desktop view */
            text-align: center;
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color: #fff;
            box-shadow: 0 -2px 4px rgba(0,0,0,0.1);
            margin-top: 20px;
        }

        @media (max-width: 600px) {
            nav ul {
    flex-direction: column;
    width: 100%;
    height: 100vh; /* Full viewport height */
    display: none; /* Ensures that the menu is hidden by default on mobile */
    background: rgba(240, 248, 255, 0.95); /* Semi-transparent background */
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1000; /* Ensure it's above other content */
    align-items: center; /* Center items vertically */
    justify-content: center; /* Center items horizontally */
    padding-top: 60px; /* Optional: Adjust based on your header's height */
    box-sizing: border-box;
}

nav.active ul {
    display: flex; /* Display the menu when active */
    
}

.menu-toggle {
    display: flex;
    position: absolute;
    right: 10px; /* Position toggle on the right */
    top: 10px; /* Position toggle from the top */
}

.menu-toggle div.active:nth-child(1) {
    transform: translateY(8px) rotate(45deg);
}

.menu-toggle div.active:nth-child(2) {
    opacity: 0;
}

.menu-toggle div.active:nth-child(3) {
    transform: translateY(-8px) rotate(-45deg);
}

            .card{
                width : 80%;
                
            }

        }

        @media (min-width: 600px) {
            .features {
                flex-direction: row;
                justify-content: space-around;
            }

            .feature {
                width: 20%; /* Adjust for smaller width on desktop */
            }

            .about-us {
                flex-direction: row;
                justify-content: space-around;
                align-items: stretch;
            }


        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">
                <a href="index.php"><img src="images/logo.png" alt="Fitfusion Logo"></a>
            </div>
            <div class="menu-toggle" id="mobile-menu">
                <div class="bar"></div>
                <div the "bar"></div>
                <div class="bar"></div>
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
                <!-- <h1>International Students in the UK</h1> -->
            </section>
            <section class="features">
                <div class="feature">
                    <a href="health.php"><img src="images/health.png" alt="Health">
                        <h2>Health</h2>
                        <p>Personalized Diet Plans</p></a>
                </div>
                <div class="feature">
                    <a href="gp_near_me.php"><img src="images/gp-near-me.png" alt="GP Near Me">
                        <h2>GP Near Me</h2>
                        <p>Find a GP Nearby</p></a>
                </div>
                <div class="feature">
                    <a href="recreational_places.php"><img src="images/recreational-places.png" alt="Recreational Places">
                        <h2>Recreational Places</h2>
                        <p>Discover Nearby Activities</p></a>
                </div>
                <div class="feature">
                    <a href="events.php"><img src="images/meetups.png" alt="Events">
                        <h2>Events</h2>
                        <p>Upcoming Events</p></a>
                </div>
            </section>
            <h2 id='about'>About Us</h2>

            <section class="about-us">
                <div class="card">
                    <p>Welcome to FitFusion! We are dedicated to enhancing the health and well-being of international students in the UK, especially from India.</p>
                </div>
                <div class="card">
                    <p>Our platform offers tailored dietary recommendations, access to local health services, and information on recreational activities, all designed to fit your specific needs.</p>
                </div>
                <div class="card">
                    <p>Join us on this journey towards better health and well-being. Welcome to FitFusion – your partner in a healthier, happier student life!</p>
                </div>
            </section>
        </main>
        <footer>
            <p>&copy; 2024 International Students in the UK. All rights reserved.</p>
            <p><a href="contact.php">Contact</a></p>
        </footer>
    </div>
    <script>
const mobileMenu = document.getElementById('mobile-menu');
const nav = document.querySelector('nav');

mobileMenu.addEventListener('click', function() {
    nav.classList.toggle('active');
    this.classList.toggle('is-active');
});


    </script>
</body>
</html>

