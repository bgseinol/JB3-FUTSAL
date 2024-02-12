<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futsal Registration Form</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<?php
// Validate and process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Function to sanitize and validate input
    function test_input($data) {
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }

    // Retrieve form data
    $name = test_input($_POST["name"]);
    $class = test_input($_POST["class"]);
    $age = test_input($_POST["age"]);
    $phone = test_input($_POST["phone"]);
    $dob = test_input($_POST["dob"]);
    $address = test_input($_POST["address"]);

    // You can perform additional validation if needed

    // Process the data (you can save it to a database or perform other actions)
    // For demonstration purposes, we'll just print the data
    echo "<h2>Registration Details:</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Class:</strong> $class</p>";
    echo "<p><strong>Age:</strong> $age</p>";
    echo "<p><strong>Phone Number:</strong> $phone</p>";
    echo "<p><strong>Date of Birth:</strong> $dob</p>";
    echo "<p><strong>Address:</strong> $address</p>";
} else {
    // Display the form if not submitted
?>
    <form action="index.php" method="POST">
        <h2>Futsal Registration Form</h2>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="class">Class:</label>
        <select id="class" name="class" required>
            <option value="X">X</option>
            <option value="XI">XI</option>
            <option value="XII">XII</option>
        </select>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>

        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" pattern="\d+" title="Please enter only numbers" required>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>

        <label for="address">Address:</label>
        <textarea id="address" name="address" required></textarea>

        <input type="submit" value="Submit">
    </form>
<?php
}
?>
</body>
</html>
