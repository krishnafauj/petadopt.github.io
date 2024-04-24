<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dog Adoption Form</title>
</head>
<body>
    <h2>Dog Adoption Form</h2>
    <form action="process_form.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="age">Age:</label>
        <input type="number" name="age" id="age" required><br><br>

        <label for="breed">Breed:</label>
        <input type="text" name="breed" id="breed" required><br><br>

        <label for="color">Color:</label>
        <input type="text" name="color" id="color" required><br><br>

        <label for="size">Size:</label>
        <select name="size" id="size" required>
            <option value="small">Small</option>
            <option value="medium">Medium</option>
            <option value="large">Large</option>
        </select><br><br>

        <label for="vaccinated">Vaccinated:</label>
        <input type="radio" name="vaccinated" id="vaccinated_yes" value="yes" required>
        <label for="vaccinated_yes">Yes</label>
        <input type="radio" name="vaccinated" id="vaccinated_no" value="no" required>
        <label for="vaccinated_no">No</label><br><br>

        <label for="temperament">Temperament:</label>
        <textarea name="temperament" id="temperament" required></textarea><br><br>

        <label for="description">Description:</label>
        <textarea name="description" id="description" required></textarea><br><br>

        <label for="image">Image:</label>
        <input type="file" name="image" id="image" accept="image/*" required><br><br>

        <label for="state">State:</label>
        <input type="text" name="state" id="state" required><br><br>

        <label for="district">District:</label>
        <input type="text" name="district" id="district" required><br><br>

        <label for="pincode">Pincode:</label>
        <input type="text" name="pincode" id="pincode" required><br><br>

        <label for="owner_name">Owner Name:</label>
        <input type="text" name="owner_name" id="owner_name" required><br><br>

        <label for="mobile_no">Mobile No:</label>
        <input type="text" name="mobile_no" id="mobile_no" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
// Establish database connection
$conn = new mysqli('localhost', 'root', '', 'pet_adoption');
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Prepare SQL statement
$stmt = $conn->prepare("INSERT INTO dogs (name, age, breed, color, size, vaccinated, temperament, description, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
if ($stmt === false) {
    die('Error: ' . $conn->error);
}

// Bind parameters
$name = $_POST['name'];
$age = $_POST['age'];
$breed = $_POST['breed'];
$color = $_POST['color'];
$size = $_POST['size'];
$vaccinated = $_POST['vaccinated'];
$temperament = $_POST['temperament'];
$description = $_POST['description'];
$image = $_FILES['image']['name']; // Assuming image file is uploaded

$stmt->bind_param("sisssssss", $name, $age, $breed, $color, $size, $vaccinated, $temperament, $description, $image);

// Execute statement
if ($stmt->execute() === false) {
    die('Error: ' . $stmt->error);
}

echo "Dog adoption form submitted successfully";

$stmt->close();
$conn->close();
?>

