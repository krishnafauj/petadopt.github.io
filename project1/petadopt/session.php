// Start the session
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
?>
