<?php
// Database configuration
$hostname = "127.0.0.1";
$username = "root";
$password = "Chanchal@12";
$dbname = "userform_db";

$connection = new mysqli($hostname, $username, $password, $dbname);
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];

$sql = "INSERT INTO all_users (first_name, last_name, dob, gender, telephone, email) 
        VALUES ('$first_name', '$last_name', '$dob', '$gender', '$telephone', '$email')";
if ($connection->query($sql) === TRUE) {
    
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <style>
     body {
    text-align: center;
    background-color: #f2f2f2;
    font-family: Arial, sans-serif;
}

.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 40px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    color: #333;
}

.success-message {
    color: #4CAF50;
    font-weight: bold;
    margin-bottom: 20px;
}
.button:hover {
    background-color: #3d8e41;
}

button {
    display: block;
    width: 200px;
    margin: 20px auto;
    padding: 10px;
    font-size: 16px;
    color: #fff;
    background-color: #007bff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  button:hover {
    background-color: #0056b3;
  }
    

    </style>
</head>
<body>
    <h1>Data saved successfully!</h1>
    <button onclick="goToHomePage()">Go to Home Page</button>
    <button id="button" onclick="switchToDashboard()">Go to Dashboard</button>

    <script>
        function goToHomePage() {
            window.location.href = "index.php"; 
        }
        function switchToDashboard() {
        window.location.href = "dashboard.php";
      }
    </script>
</body>
</html>
