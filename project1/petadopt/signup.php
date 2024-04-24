<?php
error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="projectcss.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <script>
        function showAlert() {
            alert("This is an alert message!");
        }
    </script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f0f0f0;
        }

        .container {
            max-width: 600px;
            margin: 60px auto;
            padding: 20px;
            background-color: rgb(160, 32, 240,0.1);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-image: url();
            top: 0%;
            position: absolute;
            left: 25%;
            right: 25%;
          
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            color: #333;
        }

        .avatar {
            width: 150px;
            height: 150px;
            margin: 0 auto 20px;
            border-radius: 50%;
            overflow: hidden;
        }

        .avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input[type="email"],
        .form-group input[type="password"],
        .form-group input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-group input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .whole{
            margin-top: 50px;
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

                <div>

                </div>

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
<div class="whole">

    <div class="container" >

        <div class="header">
            <h1>Signup Form</h1>
        </div>
        <div class="avatar">

        </div>
        <form action="signup.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="re_password">Re-enter Password:</label>
                <input type="password" id="re_password" name="re_password" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Signup">
            </div>
        </form>

    </div>
</div>
</body>

</html>
<?php
// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "petadopt_project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form submission handling
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO signup (email, password, USER_NAME) VALUES (?, ?, ?)");
    if ($stmt === false) {
        die('Error: ' . $conn->error);
    }

    // Bind parameters
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $verifyPassword = $_POST['re_password'];

    if ($password == $verifyPassword) {
        $stmt->bind_param("sss", $email, $password, $username);

        // Execute statement
        if ($stmt->execute() === false) {
            die('Error: ' . $stmt->error);
        } else {
            $stmt->close();
            $conn->close();
            // Redirect after successful signup
            echo '<script>alert("Signup successful!"); window.location.href = "Loginpage.php";</script>';
        }
    } else {
        // Passwords don't match
        echo "Both passwords are not the same";
    }
}
?>
