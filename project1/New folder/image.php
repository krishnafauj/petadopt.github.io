<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image">
        <br>
        <button type="submit" name="submit"></button>
    </form>
</body>
</html>
<?php
if (isset($_POST["submit"])) {
    // Get file details
    $file_name = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];

    // Specify the folder where you want to save the uploaded images
    $folder = 'images/' . $file_name;

    // Move uploaded file to desired folder
    if (move_uploaded_file($tempname, $folder)) {
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

        // Prepare SQL query using prepared statement to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO images (pics) VALUES (?)");
        $stmt->bind_param("s", $file_name);

        // Execute the statement
        if ($stmt->execute()) {
            echo "File uploaded successfully.";
        } else {
            echo "Error uploading file: " . $conn->error;
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();
    } else {
        echo "Error uploading file.";
    }
}
?>
