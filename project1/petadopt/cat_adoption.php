<?php
session_start();

// Check if the session variable 'email' is set
if (isset($_SESSION['email'])) {
    // Session variable 'email' exists, so you can access its value
    $email = $_SESSION['email'];
    echo "Logged in as: $email";
} else {
    // Session variable 'email' is not set, meaning the user is not logged in
    echo "Not logged in.";
}

$conn = new mysqli('localhost', 'root', '', 'petadopt_project');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name = $_POST['name'];
    $Mobile = $_POST['mobile'];
    $Area = $_POST['area'];
    $District = $_POST['district'];
    $State = $_POST['state'];
    $Pincode = $_POST['pincode'];
    $Email = $_POST['email'];
    $PetName = $_POST['pet_name'];
    $PetWeight = $_POST['pet_weight'];
    $PetAge = $_POST['pet_age'];
    $PetBreed = $_POST['pet_breed'];

    // Sanitize inputs to prevent SQL injection
    $Name = mysqli_real_escape_string($conn, $Name);
    $Mobile = mysqli_real_escape_string($conn, $Mobile);
    $Area = mysqli_real_escape_string($conn, $Area);
    $District = mysqli_real_escape_string($conn, $District);
    $State = mysqli_real_escape_string($conn, $State);
    $Pincode = mysqli_real_escape_string($conn, $Pincode);
    $Email = mysqli_real_escape_string($conn, $Email);
    $PetName = mysqli_real_escape_string($conn, $PetName);
    $PetWeight = mysqli_real_escape_string($conn, $PetWeight);
    $PetAge = mysqli_real_escape_string($conn, $PetAge);
    $PetBreed = mysqli_real_escape_string($conn, $PetBreed);

    // Insert data into the database
    $sql = "INSERT INTO pet_adoption (name, mobile, area, district, state, pincode, user_email, pet_name, pet_weight, pet_age, pet_breed) 
            VALUES ('$Name', '$Mobile', '$Area', '$District', '$State', '$Pincode', '$Email', '$PetName', '$PetWeight', '$PetAge', '$PetBreed')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header('Location: thankyou.php');
        exit;

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Adoption Form</title>
    <link rel="stylesheet" href="projectcss.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 80px auto;
            padding: 20px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        form {
            margin-top: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .cat_pic{
            background-image: url('catadoptionpic.png');
            background-size: 19.5%; /* Ensure the image covers the entire div */
            background-position: center; /* Center the image */
            overflow: hidden;
        }
    </style>
</head>
<body>
<div class="cat_pic">
<header class="header1">
      <div class="top">
        <div>
            <h1 class="topheading">
               PETADOPT
            </h1>
           </div>
            
            <div class="topheading1">
                <div>
    
                </div>
               <div class="topheading12">
                <a href="websitetest1.php" id="home">HOME</a>
                <a href="">PET SHOP</a>
               <div>
                <a href="">DONATE</a>
               </div>
                <a href="">FEEDBACK</a>
                <a href="">ABOUT US</a>
               </div>
            </div>
            <div>
    
            </div>
            <div class="topheading2">
            <a href="http://localhost/project1/petadopt/Loginpage.php">
                
            </a>
            <a href="http://localhost/project1/petadopt/signup.php"></a> 
            </div>
            
      </div>
    </header>
    <div class="container">
        <h2>Cat Adoption Form</h2>
        <form action="#" method="post">
            <label for="pet_name">Cat Name</label>
            <input type="text" name="pet_name" required>

            <label for="pet_weight">Cat Weight</label>
            <input type="text" name="pet_weight" required>

            <label for="pet_age">Cat Age</label>
            <input type="text" name="pet_age" required>

            <label for="pet_breed">Cat Breed</label>
            <input type="text" name="pet_breed" required>

            <label for="name">Cat Owner's Name</label>
            <input type="text" name="name" required>

            <label for="mobile">Cat Owner's Mobile Number</label>
            <input type="text" name="mobile" required>

            <label for="area">Address</label>
            <input type="text" name="area" required>

            <label for="district">Current District</label>
            <input type="text" name="district" required>

            <label for="state">State</label>
            <input type="text" name="state" required>

            <label for="pincode">Pincode</label>
            <input type="text" name="pincode" required>

            <label for="email">Email Address</label>
            <input type="text" name="email" required>
            
            <input type="submit" value="Submit">           
        </form>
    </div>
</div>
</body>
</html>
