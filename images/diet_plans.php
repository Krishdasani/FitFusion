<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indian Diet Plan for Students</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 20px;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        input, select, button {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #28a745;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #218838;
        }

        .result, .full-plan {
            margin-top: 20px;
        }

        .result p, .full-plan p {
            font-size: 16px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Personalized Indian Diet Plan</h1>
        <div class="form-group">
            <label for="weight">Current Weight (kg):</label>
            <input type="number" id="weight" required>
        </div>
        <div class="form-group">
            <label for="target_weight">Target Weight (kg):</label>
            <input type="number" id="target_weight" required>
        </div>
        <div class="form-group">
            <label for="height">Height (cm):</label>
            <input type="number" id="height" required>
        </div>
        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" id="age" required>
        </div>
        <div class="form-group">
            <label for="gender">Gender:</label>
            <select id="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>
        <div class="form-group">
            <label for="activity_level">Activity Level:</label>
            <select id="activity_level" required>
                <option value="1.2">Sedentary (little or no exercise)</option>
                <option value="1.375">Lightly active (light exercise/sports 1-3 days/week)</option>
                <option value="1.55">Moderately active (moderate exercise/sports 3-5 days/week)</option>
                <option value="1.725">Very active (hard exercise/sports 6-7 days a week)</option>
                <option value="1.9">Super active (very hard exercise/sports & a physical job)</option>
            </select>
        </div>
        <button onclick="calculateDiet()">Generate Diet Plan</button>
        <div class="result" id="result"></div>
    </div>

    <script>
    function calculateDiet() {
        const weight = document.getElementById('weight').value;
        const targetWeight = document.getElementById('target_weight').value;
        const height = document.getElementById('height').value;
        const age = document.getElementById('age').value;
        const gender = document.getElementById('gender').value;
        const activityLevel = document.getElementById('activity_level').value;

        let bmr;
        if (gender === "male") {
            bmr = 10 * weight + 6.25 * height - 5 * age + 5;
        } else {
            bmr = 10 * weight + 6.25 * height - 5 * age - 161;
        }

        const tdee = bmr * activityLevel;
        const weightDifference = targetWeight - weight;
        const dailyCaloricIntake = tdee + (weightDifference * 7700 / 30);

        document.getElementById('result').innerHTML = `
            <p>To reach your target weight of ${targetWeight} kg from your current weight of ${weight} kg, you should consume approximately ${Math.round(dailyCaloricIntake)} calories per day.</p>
            ${getIndianDietPlan(dailyCaloricIntake)}
        `;
    }

    function getIndianDietPlan(calories) {
        // Sample meal suggestions based on caloric intake
        const meals = {
            breakfast: 'Poha or Upma with one glass of milk',
            lunch: 'Roti with mixed vegetable curry and a bowl of dal',
            evening_snack: 'Green tea with sprouts salad',
            dinner: 'Chicken curry with rice or Paneer tikka with mixed salad'
        };

        return `
            <div class='full-plan'>
                <h3>Sample Indian Diet Plan</h3>
                <p><strong>Breakfast:</strong> ${meals.breakfast}</p>
                <p><strong>Lunch:</strong> ${meals.lunch}</p>
                <p><strong>Evening Snack:</strong> ${meals.evening_snack}</p>
                <p><strong>Dinner:</strong> ${meals.dinner}</p>
            </div>
        `;
    }
</script>

</body>
</html>
