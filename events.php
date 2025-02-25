<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events in UK Cities - International Students in the UK</title>
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
            display: flex;
            justify-content: space-between;
            margin: 20px;
        }

        
        .results-section {
            flex: 1;
            padding: 20px;
            /* background-color: #fff; */

        }

      
        .form-section {
            text-align: center;
        }

        .form-section h2 {
            color: #00796b;
        }   
        .form-section button:hover {
            background-color: #004d40;
        }

        #map {
            width: 50%;
            /* Set the width of the map */
            height: 400px;
            /* Set the height of the map */
            /* border: 1px solid #ccc; */
            margin-left: 20px;
        }

        .results-section {
            flex: 1;
        }

        .event {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .event h3 {
            color: #00796b;
        }

        .event p {
            color: #555;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
            margin-top: 40px;
        }

        footer p {
            margin: 5px 0;
        }

        footer a {
            color: #00796b;
            text-decoration: none;
        }

        .features a {
            text-decoration: none;
        }

        /* Tab styles to align with the theme */

        /* Styling for footer links to match tabs */
        footer a {
            color: #00796b;
            /* Use the same green color for footer links */
            font-weight: bold;
            /* Bold font for emphasis */
        }

        .banner {
            width: 100%;
            /* Set the container width */
            height: 650px;
            /* Set a fixed height */
            background: url('images/events.jpg') no-repeat center center;
            background-size: cover;
            text-align: center;
            color: #fff;
        }

        .banner h1 {
            padding-top: 80px;
            /* Adjust padding to vertically center the text */
            font-size: 2.5em;
            margin: 0;
            color: white;
        }

        .banner p {
            margin: 20px 0 0;
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
        .form-section input[type="text"],
        .form-section select
        {
            padding: 10px;
            width: 200px;
            margin-right: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-section button {
            padding: 10px 20px;
            color: #fff;
            background-color: #00796b;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
 
    </style>
</head>

<body>
    <div class="container">
        <header>
            <div class="logo">
                <a href="index.php" class="logo"><img src="images/logo.png" alt="Fitfusion Logo"></a>
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

                <h1>Find Events in UK Cities</h1>
            </section>
            <center><section class='paragraph'>
<p>
Discover exciting events in UK cities! Find concerts, festivals, exhibitions, and more happening near you. Select your city from the dropdown menu below and click "Find Events" to explore the latest happenings. Start your adventure now by choosing your city and diving into the vibrant event scene.</p>
    </section></center>
            <section class="form-section">
                <select id="citySelect">
                    <option value="London">London</option>
                    <option value="Manchester">Manchester</option>
                    <option value="Birmingham">Birmingham</option>
                    <option value="Leeds">Leeds</option>
                    <option value="Glasgow">Glasgow</option>
                    <option value="Sheffield">Sheffield</option>
                    <option value="Liverpool">Liverpool</option>
                    <option value="Edinburgh">Edinburgh</option>
                    <option value="Bristol">Bristol</option>
                    <option value="Newcastle">Newcastle</option>
                </select>
                <button onclick="fetchEvents()">Find Events</button>
            </section>
            <div class="content-section">
                <section class="results-section" id="results">
                    <!-- Events will be displayed here -->
                </section>
                <div id="map"></div> <!-- Map section for displaying locations -->
            </div>
        </main>
        <footer>
            <p>&copy; 2024 International Students in the UK. All rights reserved.</p>
            <p><a href="contact.php">Contact</a></p>
        </footer>
    </div>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpinMhCh3CaS9IGLf51agcLhxtzOKkNA0&libraries=places"></script>
    <script>
        async function fetchEvents() {
            const city = document.getElementById('citySelect').value;
            const apiKey = 'a6042041b84f97e28c1790f60c280b20';
            const url = `https://www.skiddle.com/api/v1/events/search/?api_key=${apiKey}&city=${city}`;

            try {
                const response = await fetch(url);
                const data = await response.json();
                displayEvents(data.results);
                if (data.results.length > 0) {
                    initializeMap(data.results); // Initialize map with all events
                }
            } catch (error) {
                console.error('Failed to fetch events:', error);
                document.getElementById('results').innerHTML = `Failed to fetch events: ${error.message}`;
            }
        }

        function displayEvents(events) {
            const resultsDiv = document.getElementById('results');
            resultsDiv.innerHTML = ''; // Clear previous results
            events.forEach(event => {
                const eventDiv = document.createElement('div');
                eventDiv.classList.add('event');
                eventDiv.innerHTML = `
                <h3>${event.eventname}</h3>
                <p>Date: ${event.date}</p>
                <p>Venue: ${event.venue.name}, ${event.venue.town}</p>
                <p><a href="${event.link}" target="_blank">More Info</a></p>
            `;
                resultsDiv.appendChild(eventDiv);
            });
        }

        function initializeMap(events) {
            const mapArea = document.getElementById('map');
            const firstEvent = events[0];
            const mapCenter = { lat: parseFloat(firstEvent.venue.latitude), lng: parseFloat(firstEvent.venue.longitude) };

            const map = new google.maps.Map(mapArea, {
                zoom: 14,
                center: mapCenter
            });

            // Add markers for all events
            events.forEach(event => {
                if (event.venue.latitude && event.venue.longitude) {
                    const markerLocation = { lat: parseFloat(event.venue.latitude), lng: parseFloat(event.venue.longitude) };
                    const marker = new google.maps.Marker({
                        position: markerLocation,
                        map: map,
                        title: event.eventname
                    });
                }
            });
        }
    </script>


</body>

</html>