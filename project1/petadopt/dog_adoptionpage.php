<?php
session_start();

// Check if the session variable 'email' is set
if (isset($_SESSION['email'])) {
    // Session variable 'email' exists, so you can access its value
    $email_maalik = $_SESSION['email'];
} else {
    // If session variable 'email' is not set, you may handle it as per your requirements
    // For example, you might want to redirect the user to the login page
    header("Location: Loginpage.php");
    exit(); // Ensure script execution stops after redirection
}


// Database connection
$conn = new mysqli('localhost', 'root', '', 'petadopt_project');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dog_name = $_POST['dog_name'];
    $dog_breed = $_POST['dog_breed'];
    $dog_nature = $_POST['dog_nature'];
    $dog_age = $_POST['dog_age'];
    $owner_mobile = $_POST['owner_mobile'];
    $owner_name = $_POST['owner_name'];
    $owner_district = $_POST['owner_district'];
    $owner_state = $_POST['owner_state'];
    $owner_address = $_POST['owner_address'];
    $owner_email = $_POST['owner_email'];

    // Sanitize inputs to prevent SQL injection
    $dog_name = mysqli_real_escape_string($conn, $dog_name);
    $dog_breed = mysqli_real_escape_string($conn, $dog_breed);
    $dog_nature = mysqli_real_escape_string($conn, $dog_nature);
    $dog_age = mysqli_real_escape_string($conn, $dog_age);
    $owner_mobile = mysqli_real_escape_string($conn, $owner_mobile);
    $owner_name = mysqli_real_escape_string($conn, $owner_name);
    $owner_district = mysqli_real_escape_string($conn, $owner_district);
    $owner_state = mysqli_real_escape_string($conn, $owner_state);
    $owner_address = mysqli_real_escape_string($conn, $owner_address);
    $owner_email = mysqli_real_escape_string($conn, $owner_email);
    $email_maalik = mysqli_real_escape_string($conn, $email_maalik); // Add this line to sanitize email_maalik

    // Insert data into the database
    $sql = "INSERT INTO pet_details (dog_name, dog_breed, dog_nature, dog_age, owner_mobile, owner_name, owner_district, owner_state, owner_address, owner_email, email_maalik) 
            VALUES ('$dog_name', '$dog_breed', '$dog_nature', '$dog_age', '$owner_mobile', '$owner_name', '$owner_district', '$owner_state', '$owner_address', '$owner_email', '$email_maalik')";

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
        <h2>Dog Adoption Form</h2>
        <form action="#" method="post">
            <label for="dog_name">Dog Name</label>
            <input type="text" name="dog_name" required>

            <label for="dog_breed">Dog Breed</label>
            <input type="text" name="dog_breed" required>

            <label for="dog_nature">Dog Nature</label>
            <input type="text" name="dog_nature" required>

            <label for="dog_age">Dog Age</label>
            <input type="text" name="dog_age" required>

            <label for="owner_mobile">Owner's Mobile Number</label>
            <input type="text" name="owner_mobile" required>

            <label for="owner_name">Owner's Name</label>
            <input type="text" name="owner_name" required>

            <label for="owner_district">Current District</label>
            <input type="text" name="owner_district" required>

            <label for="owner_state">State</label>
            <input type="text" name="owner_state" required>

            <label for="owner_address">Address</label>
            <input type="text" name="owner_address" required>

            <label for="owner_email">Email Address</label>
            <input type="text" name="owner_email" required>
            
            <input type="submit" value="Submit">           
        </form>
    </div>
</div>
</body>
</html>
