<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <!-- Add any CSS styles here -->
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
        .profile-info {
            margin-top: 20px;
        }
        .profile-info p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>User Profile</h2>
    <div class="profile-info">
        <?php
        session_start();

        // Check if the session variable 'email' is set
        if (isset($_SESSION['email'])) {
            // Session variable 'email' exists, so you can access its value
            $email_maalik = $_SESSION['email'];
            // Database connection
            $conn = new mysqli('localhost', 'root', '', 'petadopt_project');

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch user details from the database where email_maalik matches session email
            $sql = "SELECT * FROM pet_details WHERE email_maalik = '$email_maalik'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
        ?>
                    <div>
                        <p><strong>Dog Name:</strong> <?php echo $row["dog_name"]; ?></p>
                    </div>
                    <div>
                        <p><strong>Dog Breed:</strong> <?php echo $row["dog_breed"]; ?></p>
                    </div>
                    <div>
                        <p><strong>Dog Nature:</strong> <?php echo $row["dog_nature"]; ?></p>
                    </div>
                    <div>
                        <p><strong>Dog Age:</strong> <?php echo $row["dog_age"]; ?></p>
                    </div>
                    <div>
                        <p><strong>Owner's Mobile Number:</strong> <?php echo $row["owner_mobile"]; ?></p>
                    </div>
                    <div>
                        <p><strong>Owner's Name:</strong> <?php echo $row["owner_name"]; ?></p>
                    </div>
                    <div>
                        <p><strong>Current District:</strong> <?php echo $row["owner_district"]; ?></p>
                    </div>
                    <div>
                        <p><strong>State:</strong> <?php echo $row["owner_state"]; ?></p>
                    </div>
                    <div>
                        <p><strong>Address:</strong> <?php echo $row["owner_address"]; ?></p>
                    </div>
                    <div>
                        <p><strong>Email Address:</strong> <?php echo $row["owner_email"]; ?></p>
                    </div>
        <?php
                }
            } else {
                echo "No details found for the logged-in user.";
            }

            // Close the database connection
            $conn->close();
        } else {
            echo "Session email not set.";
        }
        ?>
    </div>
</div>
</body>
</html>
