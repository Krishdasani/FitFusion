<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Places of Worship - International Students in the UK</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f8ff;
        }

        .container {
            width: 100%;
            /* max-width: 1200px; */
            margin: 0 auto;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            /* padding: 20px; */
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .logo img {
            height: 50px;
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
            text-align: center;
            background-color: #e0f7fa;
        }

        .banner img {
            width: 100%;
        }

        .banner h1 {
            margin: 20px 0;
            font-size: 2.5em;
            color: #00796b;
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

        .form-section button {
            padding: 10px 20px;
            color: #fff;
            background-color: #00796b;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .form-section button:hover {
            background-color: #004d40;
        }

        .results-section {
            padding: 20px;
            background-color: #f9f9f9;
        }

        .results-section .result {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        .results-section .result h3 {
            margin: 0;
            color: #00796b;
        }

        .results-section .result p {
            margin: 5px 0;
            color: #555;
        }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpinMhCh3CaS9IGLf51agcLhxtzOKkNA0&libraries=places"></script>
    <script defer>
        document.addEventListener('DOMContentLoaded', function () {
            const button = document.querySelector('button');
            button.addEventListener('click', function (e) {
                e.preventDefault();
                const postcode = document.getElementById('postcode').value;
                findPlacesOfWorship(postcode);
            });

            function findPlacesOfWorship(postcode) {
    const geocoder = new google.maps.Geocoder();
    geocoder.geocode({ 'address': postcode }, function (results, status) {
        console.log(status, results); // Log status and results for debugging
        if (status === 'OK') {
            const location = results[0].geometry.location;
            const map = new google.maps.Map(document.createElement('div'), {
                center: location,
                zoom: 15
            });
            const service = new google.maps.places.PlacesService(map);
            service.nearbySearch({
                location: location,
                radius: 3000,
                type: ['church', 'mosque', 'hindu_temple', 'synagogue']
            }, function (results, status) {
                console.log(status, results); // Log status and results for debugging
                if (status === google.maps.places.PlacesServiceStatus.OK) {
                    displayResults(results);
                } else {
                    displayError('No places of worship found near this location.');
                }
            });
        } else {
            displayError('Geocode was not successful for the following reason: ' + status);
        }
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
                <img src="images/logo.png" alt="Logo">
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="health.php">Health</a></li>
                    <li><a href="gp_near_me.php">GP Near Me</a></li>
                    <li><a href="recreational_places.php">Recreational Places</a></li>
                    <li><a href="place_of_worship.php">Places of Worship</a></li>
                    <li><a href="events.php">Events</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <section class="banner">
                <img src="images/place_of_worship_banner.png" alt="Places of Worship Banner">
                <h1>Find Places of Worship Near You</h1>
            </section>
            <section class="form-section">
                <h2>Enter Your Postcode</h2>
                <form id="postcodeForm">
                    <input type="text" id="postcode" name="postcode" placeholder="Enter Postcode" required>
                    <button type="submit">Find Places of Worship</button>
                </form>
            </section>
            <section id="results" class="results-section">
                <!-- Places of worship results will be displayed here -->
            </section>
        </main>
        <footer>
            <p>&copy; 2024 International Students in the UK. All rights reserved.</p>
            <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a> | <a href="#">Contact</a></p>
        </footer>
    </div>
</body>
</html>
