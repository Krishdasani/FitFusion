<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health - International Students in the UK</title>
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
            background-color: #f0f8ff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .logo img {
            height: 70px;
            padding:10px;        }

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

        .health-banner {
            width: 100%; /* Set the container width */
            height: 650px; /* Set a fixed height */
            background: url('images/Health.jpg') no-repeat center center;
            background-size: cover;
            text-align: center;
            color: #fff;
        }

        .health-banner h1 {
            padding-top: 80px; /* Adjust padding to vertically center the text */
            font-size: 2.5em;
            margin: 0;
        }

        .health-banner p {
            margin: 20px 0 0;
        }

        .health-options {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            padding: 20px;
        }

        .option {
            text-align: center;
            margin: 20px;
            flex: 1 1 200px;
        }

        .option img {
            width: 100px;
            height: 100px;
        }

        .option h2, .option p {
            margin: 10px 0;
        }

        .option button {
            padding: 10px 20px;
            color: #fff;
            background-color: #00796b;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .option button:hover {
            background-color: #004d40;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
        }

        footer p {
            margin: 5px 0;
        }

        footer a {
            color: #00796b;
            text-decoration: none;
        }
        .paragraph {
            text-align: center;
            padding: 20px;
            margin: 20px 40px;
            font-size: 16px;
            line-height: 1.6;
            color: #333;
            width: 60%;
            border: 1px solid black;
            
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">
                <a href="index.php"><img src="images/logo.png" alt="Logo"></a>
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
            <section class="health-banner">
                <h1>Health and Wellness</h1>
                <p>Explore activities and personalized diet plans to maintain a healthy lifestyle.</p>
            </section>
            <section class="health-options">
                <div class="option">
                    <img src="images/find_activities.png" alt="Find Activities">
                    <h2>Find Activities Near You</h2>
                    <p>Discover local Gyms, Yoga centers, and more.</p>
                    <button onclick="location.href='find_activities.php'">Find Activities</button>
                </div>
                <div class="option">
                    <img src="images/diet.png" alt="Diet Plans">
                    <h2>Personalized Diet Plans</h2>
                    <p>Get diet plans tailored to your needs and preferences.</p>
                    <button onclick="location.href='diet_plans.php'">Get Diet Plans</button>
                </div>
            </section>
        </main>
        <footer>
            <p>&copy; 2024 International Students in the UK. All rights reserved.</p>
            <p> <a href="contact.php">Contact</a></p>
        </footer>
    </div>
</body>
</html>