<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pet Details Form</title>
<link rel="stylesheet" href="projectcss.css">
<style>
    body {
        font-family: Arial, sans-serif;
    }
    .container {
        max-width: 500px;
        margin: auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        border: none;
        margin-top: 30px;
    }
    label {
        display: block;
        margin-bottom: 5px;
    }
    input[type="text"],
    input[type="email"],
    select {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
    .error {
        color: red;
        font-size: 14px;
        margin-bottom: 10px;
    }
    img{
        position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 1300px;
    height: auto;
    z-index: -1;
    }
    .header1{
position: relative;
}
   
</style>
</head>
<body>
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
                <a href="#home" id="home">HOME</a>
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
                <button class="login">LOGIN</button>
            </a>
            <a href="http://localhost/project1/petadopt/signup.php"> <button class="signup">SIGNUP</button></a> 
            </div>
            
      </div>
    </header>
<h1>PETADOPT</h1>
<div class="container">
    <h2>Pet Details Form</h2>
    <form action="submit_form.php" method="post">
        <label for="dog_name">Pet Name:</label>
        <input type="text" id="dog_name" name="dog_name" required>
        
        <label for="dog_age">Pet Age:</label>
        <input type="text" id="dog_age" name="dog_age" required>
        
        <label for="dog_breed">Pet Breed:</label>
        <input type="text" id="dog_breed" name="dog_breed" required>
        
        <label for="dog_nature">Pet Nature:</label>
        <input type="text" id="dog_nature" name="dog_nature" required>
        
        <label for="owner_name">Owner Name:</label>
        <input type="text" id="owner_name" name="owner_name" required>
        
        <label for="vaccinated">Vaccinated:</label>
      
        <label for="category">ANIMAL CATEGORY</label>
        
        <label for="owner_mobile">Owner Mobile No:</label>
        <input type="text" id="owner_mobile" name="owner_mobile" required>
        
        <label for="owner_address">Owner Local Address:</label>
        <input type="text" id="owner_address" name="owner_address" required>
        
        <label for="owner_district">Owner District:</label>
        <input type="text" id="owner_district" name="owner_district" required>
        
        <label for="owner_state">Owner State:</label>
        <input type="text" id="owner_state" name="owner_state"  required>
        
        <label for="owner_email">Owner Email:</label>
        <input type="email" id="owner_email" name="owner_email" required>

        <div class="error" id="error_message"></div>

        <input type="submit" value="Submit">
    </form>
</div>

<script>
    document.querySelector('form').addEventListener('submit', function(e) {
        var inputs = document.querySelectorAll('input, select');
        var isValid = true;
        inputs.forEach(function(input) {
            if (!input.checkValidity()) {
                isValid = false;
            }
        });
        if (!isValid) {
            document.getElementById('error_message').innerText = 'Please fill out all fields correctly.';
            e.preventDefault();
        }
    });
</script>

</body>
</html>
<?php

$conn = new mysqli('localhost', 'root', '', 'petadopt_project');


if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
} 


$stmt = $conn->prepare("INSERT INTO pet_details (dog_name, dog_age, dog_breed, dog_nature, owner_name, owner_mobile, owner_address, owner_district, owner_state, owner_email) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

if ($stmt === false) {
    die('Error: ' . $conn->error);
}


$dog_name = $_POST['dog_name'] ?? '';
$dog_age = $_POST['dog_age'] ?? '';
$dog_breed = $_POST['dog_breed'] ?? '';
$dog_nature = $_POST['dog_nature'] ?? '';
$owner_name = $_POST['owner_name'] ?? '';
$owner_mobile = $_POST['owner_mobile'] ?? '';
$owner_address = $_POST['owner_address'] ?? '';
$owner_district = $_POST['owner_district'] ?? '';
$owner_state = $_POST['owner_state'] ?? ''; 
$owner_email = $_POST['owner_email'] ?? '';



$stmt->bind_param("ssssssssss", $dog_name, $dog_age, $dog_breed, $dog_nature, $owner_name,  $owner_mobile, $owner_address, $owner_district, $owner_state, $owner_email);





if ($stmt->execute() === false) {
    die('Error: ' . $stmt->error);
} else {
    // Display success message
    echo "Pet details submitted successfully";
}

// Close statement
$stmt->close();

// Close database connection
$conn->close();
?>
