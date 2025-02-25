<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GP Near Me - International Students in the UK</title>
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
            /* padding: 0 20px; Add padding to container */
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

        .banner {
            width: 100%;
            /* Set the container width */
            height: 650px;
            /* Set a fixed height */
            background: url('images/gp.jpg') no-repeat center center;
            background-size: cover;
            text-align: center;
            color: #fff;
        }

        .banner h1 {
            padding-top: 280px;
            /* Adjust padding to vertically center the text */
            font-size: 2.5em;
            margin: 0;
            color: black;
        }

        .banner p {
            margin: 20px 0 0;
        }

        .content-section {
            display: flex;
            /* Use flexbox to align items side by side */
            justify-content: space-between;
            align-items: flex-start;
        }

        
        .results-section {
            flex: 1;
            /* Each section will take up half of the content section */
            padding: 20px;

            margin: 20px;
        }

        .form-section {
            text-align: center;
        }

        .form-section h2 {
            color: #00796b;
        }

        .form-section input[type="text"] {
            padding: 10px;
            width: 200px;
            margin-right: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-section input[type="submit"] {
            padding: 10px 20px;
            color: #fff;
            background-color: #00796b;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .form-section input[type="submit"]:hover {
            background-color: #004d40;
        }
        #map {
            flex: 1;
            /* Each section will take up half of the content section */
            padding: 20px;

            margin: 20px;
            height: 400px;
            /* Set the height of the map */
        }

        .results-section .result h3 {
            color: #00796b;
        }

        .results-section .result p {
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
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpinMhCh3CaS9IGLf51agcLhxtzOKkNA0&libraries=places"></script>
    <script defer>
        document.addEventListener('DOMContentLoaded', function () {
            const button = document.querySelector('input[type="submit"]');

            const mapArea = document.getElementById('map');
            let map; // Holds the map instance

            button.addEventListener('click', function (e) {
                e.preventDefault();
                const postcode = document.getElementById('postcode').value;
                findGPs(postcode);
            });

            function initMap(location) {
                map = new google.maps.Map(mapArea, {
                    center: location,
                    zoom: 15
                });
            }

            function findGPs(postcode) {
                const geocoder = new google.maps.Geocoder();
                geocoder.geocode({ 'address': postcode }, function (results, status) {
                    if (status === 'OK') {
                        const location = results[0].geometry.location;
                        initMap(location); // Initialize map with location
                        const service = new google.maps.places.PlacesService(map);
                        service.nearbySearch({
                            location: location,
                            radius: 1000,
                            type: ['doctor']
                        }, function (results, status) {
                            if (status === google.maps.places.PlacesServiceStatus.OK) {
                                displayResults(results);
                                results.forEach(place => {
                                    createMarker(place);
                                });
                            } else {
                                displayError('No GPs found near this location.');
                            }
                        });
                    } else {
                        displayError('Please enter a valid postcode');
                    }
                });
            }

            function createMarker(place) {
                new google.maps.Marker({
                    position: place.geometry.location,
                    map: map,
                    title: place.name
                });
            }

            function displayResults(places) {
                const resultsSection = document.getElementById('results');
                resultsSection.innerHTML = '';
                places.forEach(place => {
                    const resultDiv = document.createElement('div');
                    resultDiv.classList.add('result');
                    resultDiv.innerHTML = `
                        <h3>${place.name}</h3>
                        <p>${place.vicinity}</p>
                        <p>Rating: ${place.rating || 'N/A'}</p>
                    `;
                    resultsSection.appendChild(resultDiv);
                });
            }

            function displayError(message) {
                const resultsSection = document.getElementById('results');
                resultsSection.innerHTML = `<p>${message}</p>`;
            }
        });
    </script>
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

                <h1>Find a GP Near You</h1>
            </section>
<center><section class='paragraph'>
<p>
Welcome to our healthcare locator! Find a GP near you quickly and easily. Simply enter your postcode below to discover local general practitioners ready to assist with your medical needs. Start your search now by entering your postcode and clicking "Find GP."
</p>
    </section></center>
             <!-- Add content here, use sections -->
              
            <!-- New div for the content section -->
            <section class="form-section">
                <h2>Enter Your Postcode</h2>
                <form id="postcodeForm">
                    <input type="text" id="postcode" name="postcode" placeholder="Enter Postcode" required>
                    <input type="submit" value="GP near me">
                </form>
            </section>
            <div class="content-section">

                <section id="results" class="results-section">
                    <!-- GP results will be displayed here -->
                </section>
                <section id="map"></section>
            </div>
        </main>
        <footer>
            <p>&copy; 2024 International Students in the UK. All rights reserved.</p>
            <p><a href="contact.php">Contact</a></p>
        </footer>
    </div>
</body>

</html>