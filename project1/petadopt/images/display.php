<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
    <style>
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

        .card {
            border: 1px solid purple;
            border-radius: 5px;
            padding: 10px;
    
            margin-top: 50px;
            margin-left: 70px;
            margin-bottom: 30px;
            width: 550px;
            display: inline-block;
            height: 250px;
        }
        .card1{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            grid-gap: 10px;
        }

        .card h2 {
            margin-top: 0;
        }

        .card p {
            margin-bottom: 5px;
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

        .topheading12 {
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

        .header1 {
            margin-top: 0;
            margin-bottom: 120px;
            position: relative;
            padding-top: 0px;
            padding-bottom: 0px;
            position: fixed;
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
                    <a href="C:\Users\Admin\Downloads\newlab\test.html">HOME</a>
                    <a href="">PET SHOP</a>
                    <div>
                        <a href="">SERVICES</a>
                    </div>
                    <a href="">FEEDBACK</a>
                    <a href="">ABOUT US</a>
                </div>
            </div>
            <div>

            </div>
            <div class="topheading2">
                <a href="http://localhost/petadopt/Loginpage.php">
                    <button class="login">LOGIN</button>
                </a>
                <a href="http://localhost/petadopt/signup.php"> <button class="signup">SIGNUP</button></a>
            </div>

        </div>
    </header>
    <?php
session_start(); // Start the session
$conn = new mysqli('localhost', 'root', '', 'petadopt_project');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database and store it in an array
$data = array();
$sql = "SELECT * FROM data";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}
?>

<!-- Now loop through the $data array in your HTML -->
<?php foreach ($data as $row): ?>
  
    <div class="card">
        <h2><?php echo $row['name']; ?></h2>
        <p>Mobile: <?php echo $row['mobile']; ?></p>
        <p>Area: <?php echo $row['area']; ?></p>
        <p>Email: <?php echo $row['email']; ?></p>
    </div>
    
    </div>
 
<?php endforeach; ?>

</body>

</html>
