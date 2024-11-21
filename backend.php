<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $date = htmlspecialchars($_POST['date']);

    // Process the data here (e.g., send an email, save to a database)
    
    // Example: Sending a confirmation message (replace with actual booking logic)
    echo "<h2>Thank you, $name!</h2>";
    echo "<p>Your appointment is booked for $date. A confirmation email will be sent to $email shortly.</p>";
} else {
    echo "<p>Invalid request.</p>";
}
?>
