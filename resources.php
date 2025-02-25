<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resource Hub</title>
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
        .resource-filter {
            text-align: center;
            margin-bottom: 20px;
        }

        .resource-filter button {
            padding: 10px 20px;
            margin-right: 10px;
            border: none;
            background-color: #00796b;
            color: white;
            cursor: pointer;
        }

        .resource-filter button:hover {
            background-color: #004d40;
        }

        .resource-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around; /* Ensures even spacing between cards */
        }

        .resource-card {
            flex: 0 0 48%; /* Sets the card to take up roughly half the width minus margin */
            display: flex;
            flex-direction: column;
            align-items: center;
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .resource-card h4 {
            margin-top: 0;
        }

        .resource-card.video {
            background-color: #e0ffff;
        }

        .resource-card.website {
            background-color: #fff0f5;
        }

        iframe {
            width: 100%;
            height: 340px;
            border: none;
        }

        @media (min-width: 992px) {
            .resource-container {
                display: grid;
                grid-template-columns: repeat(2, 1fr); /* Adjust to 2 columns for wider screens */
                grid-gap: 20px;
            }
        }
        .banner {
            width: 100%;
            padding: 0;
            height: 650px;
            background: url('images/resource.jpeg') no-repeat center center;
            background-size: cover;
            text-align: center;
            color: #fff;
        }

        .banner h1 {
            padding-top: 280px;
            font-size: 2.5em;
            margin: 0;
            color: black;
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

        footer {
            text-align: center;
            padding: 10px;
            background-color: #fff;
            box-shadow: 0 -2px 4px rgba(0,0,0,0.1);
            margin-top: 20px;
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
                <h1>Resource Hub</h1>
            </section>
            <center><section class='paragraph'>
                <p>
             Welcome to Our Health Resource Hub! Find essential videos and articles to support your mental well-being. Discover expert advice and practical tips to help you manage stress, anxiety, and overall mental health.                </p>
            </section></center>
            <div class="resource-filter">
                <button onclick="filterResources('all')">All</button>
                <button onclick="filterResources('video')">Videos</button>
                <button onclick="filterResources('website')">Websites</button>
            </div>
            <div id="resourceContainer" class="resource-container">
                <!-- Dynamic content will be loaded here -->
            </div>
        </main>
    </div>
    <footer>
        <p>&copy; 2024 International Students in the UK. All rights reserved.</p>
        <p><a href="contact.php">Contact</a></p>
    </footer>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const resources = [ 
                { type: 'video', title: 'International students face unique mental health stresses', url: 'https://www.youtube.com/embed/F8TSBogMYqY?si=JEpFAzmpaxDliLxt' },
                { type: 'video', title: 'Supporting International Student Mental Health During Challenging Times ', url: 'https://www.youtube.com/embed/WCBbssfVRFg?si=F9B8piclmS7rk31M' },
                { type: 'video', title: 'Student mental health support', url: 'https://www.youtube.com/embed/zcczTmuQwZA?si=eVKVOAe-6l7QiwVH' },
                { type: 'video', title: 'Wellbeing Strategies for International Students Mental Health', url: 'https://www.youtube.com/embed/yWpIhb0QpXM?si=EqnyztulJmCPeOTx' },
                    { type: 'website', title: 'International Student Support Team', url: 'https://www.strath.ac.uk/studywithus/internationalstudents/whileyourehere/internationalstudentsupportteam/' },
                { type: 'website', title: 'Practical Information for International Student', url: 'https://www.gla.ac.uk/international/support/practicalinformationinternationalstudents/nhs-health-services/' },
                { type: 'website', title: 'NAFSA - Mental Health Issues of Students Who Cross Borders', url: 'https://www.nafsa.org/ie-magazine/2023/5/5/mental-health-issues-students-who-cross-borders' },
                { type: 'website', title: 'Mental Health Support in the UK', url: 'https://ukcisa.org.uk/Information--Advice/Studying--living-in-the-UK/Mental-health-support-in-the-UK' },
                { type: 'website', title: 'Healthcare for International Students', url: 'https://www.ncbi.nlm.nih.gov/pmc/articles/PMC10882177/' },
                { type: 'website', title: 'Mental Health and International Students', url: 'https://global.ed.ac.uk/transitions-and-mentoring-toolkit/transitions-toolkit/transitions-for-wellbeing/mental-health-and-international-students' },
                
            ];

            function displayResources(filter) {
                const container = document.getElementById('resourceContainer');
                container.innerHTML = '';
                resources.filter(r => filter === 'all' || r.type === filter).forEach(resource => {
                    const card = document.createElement('div');
                    card.className = `resource-card ${resource.type}`;
                    if (resource.type === 'video') {
                        card.innerHTML = `<h4>${resource.title}</h4><iframe src="${resource.url}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`;
                    } else if (resource.type === 'website') {
                        card.innerHTML = `<h4>${resource.title}</h4><a href="${resource.url}" target="_blank">Visit Website</a>`;
                    }
                    container.appendChild(card);
                });
            }

            function filterResources(type) {
                displayResources(type);
            }

            window.filterResources = filterResources;
            displayResources('all');
        });
    </script>
</body>
</html>
