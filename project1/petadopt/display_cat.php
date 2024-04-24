<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: Loginpage.php");
    exit(); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Adopted Pets</title>
    <link rel="stylesheet" href="projectcss.css">
    <style>
        .pet-card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 20px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .pet-info {
            margin-bottom: 10px;
        }
       * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

html,
body {
    height: 100%;
    width: 100%;
}

.top {
    display: grid;
    grid-template-columns: 20% 50% 16% 14%;
    height: 60px;
    top: 0;
    left: 0;
    right: 0;
    position: fixed;
    background-color: white;
}

.topheading {
    color: black;
    font-size: 40px;
}

.topheading1 {

    display: grid;
    grid-template-columns: 30% 70%;
    align-items: center;
    justify-content: space-between;
}
.topheading12{
    display: flex;
    justify-content: space-between;
}
.topheading2 {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.login {
    background-color: purple;
    border-color: white;
    color: white;
    border: 0px;
    width: 80px;
    height: 35px;
    cursor: pointer;
}

.login:hover {
    background-color: purple;
    border-color: white;
    color: white;
    border: 0px;
    width: 100px;
    height: 55px;
    cursor: pointer;
    font-size: 19px;
}

.signup {
    background-color: white;
    border-color: white;
    color: purple;
    border: 0px;
    width: 80px;
    height: 35px;
    cursor: pointer;
}

.signup:hover {
    border-style: solid;
    border: 2px;
    font-size: 19px;
    border-color: purple;
    width: 100px;
    height: 55px;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {
    background-color: #f1f1f1;
}

.dropdown:hover .dropdown-content {
    display: block;
}
.dropbtn{
    color: purple;
}
.dropdown:hover  {
   
    color: purple;
}

.boxes{
    display: grid;
    width: 100%;
    grid-template-columns: 3% 18% 19% 18% 19% 20% 3%;
    height: 300px;
    height: 220px;
    top: 74%;
    right: 0%;
    left: 0%;
    position: absolute;
}
.footer{
    font-size: small;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
.footer5{
    justify-content: center;
   
    align-items: center;
    font-size: x-large;
    display: flex;
    flex-direction: column;
    background-color: purple;
    border-radius: 5px;
    
}
.footer7{
    display: flex;
    justify-content: center;
    color: white;
    font-size: medium;
}
.end{
    display: grid;
    grid-template-columns: 10% 80% 10%;
    margin-top: 20px;
    height: 30px;
}
.end2{
    background-color: purple;
}
.mid{
    height: 100vh;
}
.mid1{
    display: grid;
    grid-template-columns: 19% 14% 2% 14% 2% 14% 2% 14% 19%;
    margin-top: 80px;

}
.mid2{
    border-style: solid;
    display: flex;
    border-color: purple;
    border-radius: 25px;
    height: 200px;
    justify-content: center;
    align-items: last baseline;
    color: purple;
    font-size: 25px;
    cursor: pointer;
    background-image: url(''); /* Set your image */
    background-size: cover; /* Ensure the image covers the entire div */
    background-position: center; /* Center the image */
    background-repeat: no-repeat;
    overflow: hidden; 
}
.mid2 img {
    max-width: 100%; /* Ensure image doesn't exceed the width of its container */
    max-height: 100%; /* Ensure image doesn't exceed the height of its container */
    margin-right: 10px; /* Add some space between the image and the text */
}
.mid2:hover{
   
   border-style: solid;
   border-color: white;
}

.mid3{
    border-style: solid;
    display: flex;
    border-color: purple;
    border-radius: 25px;
    height: 200px;
    justify-content: center;
    align-items: last baseline;
    color: purple;
    font-size: 25px;
    cursor: pointer;
    background-image: url('image.png'); /* Set your image */
    background-size: cover; /* Ensure the image covers the entire div */
    background-position: center; /* Center the image */
    background-repeat: no-repeat;
    overflow: hidden; 
}
.mid3 img {
    max-width: 100%; /* Ensure image doesn't exceed the width of its container */
    max-height: 100%; /* Ensure image doesn't exceed the height of its container */
    margin-right: 10px; /* Add some space between the image and the text */
}
.mid3:hover{
   
   border-style: solid;
   border-color: white;
}
.bottom{
    position: relative;
}
.img{
    max-width: 250%;
  max-height: 117vh;
  object-fit: cover;
}
.dogimg{
    height: 160px;
}
.catimg{
    height: 155Px;
}
.header1{
position: relative;
}
.picdoginputform{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 1300;
    height: auto;
    z-index: -1;
}
.container{
    margin-top: 100px;
}
    </style>
</head>
<body>
    <header>
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
                <div class="dropdown">
                    <a class="dropbtn"><u>DONATE</u></a>
                    <div class="dropdown-content">
                        <a href="cat_adoption.php">Cats</a>
                        <a href="dog_adoptionpage.php">Dogs</a>
                        <a href="#">Others</a>
                    </div>
                </div>
               </div>
                <a href="">FEEDBACK</a>
                <a href="">ABOUT US</a>
               </div>
            </div>
            <div>
    
            </div>
            <div class="topheading2">
            <a href="logout.php"> 
                <button class="login"> 
            LOGOUT
        </button>
    </a>
            </div>
            
      </div>
    </header>
    <div class="container">
        <h2>Adopted Pets</h2>
        <?php
        // Connect to the database
        $conn = new mysqli('localhost', 'root', '', 'petadopt_project');
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve data from the database
        $sql = "SELECT * FROM pet_adoption";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                
              echo "<div class='pet-card'>";
                echo "<div class='pet-info'><strong>Cat Name:</strong> ".$row["pet_name"]."</div>";
                echo "<div class='pet-info'><strong>Owner's Name:</strong> ".$row["name"]."</div>";
                echo "<div class='pet-info'><strong>Owner's Mobile Number:</strong> ".$row["mobile"]."</div>";
                echo "<div class='pet-info'><strong>Email Address:</strong> ".$row["user_email"]."</div>";
                echo "<div class='pet-info'><strong>Address:</strong> ".$row["area"]."</div>";
                echo "<div class='pet-info'><strong>Current District:</strong> ".$row["district"]."</div>";
                echo "<div class='pet-info'><strong>State:</strong> ".$row["state"]."</div>";
                echo "<div class='pet-info'><strong>Pincode:</strong> ".$row["pincode"]."</div>";
                echo "<div class='pet-info'><strong>Weight:</strong> ".$row["pet_weight"]."</div>";
                echo "<div class='pet-info'><strong>Age:</strong> ".$row["pet_age"]."</div>";
                echo "<div class='pet-info'><strong>Breed:</strong> ".$row["pet_breed"]."</div>";
                echo "</div>";
            }
        } else {
            echo "<p>No pets adopted yet.</p>";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>
