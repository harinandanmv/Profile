<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Simple validation
    if (empty($name) || empty($email) || empty($password)) {
        echo "Please fill all fields.";
        exit;
    }

    // Prepare data line to save
    $data_line = $name . "," . $email . "," . $password . "\n";

    // Save data to file
    file_put_contents("registrations.txt", $data_line, FILE_APPEND);

    echo "Data saved successfully.";
} else {
    echo "Please submit the form.";
}
?>
