<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    // Simple validation
    if (empty($name) || empty($phone)) {
        echo "Name and phone are required.";
        exit();
    }

    // SQL query to insert new member
    $sql = "INSERT INTO members (name, phone) VALUES ('$name', '$phone')";
    if ($conn->query($sql) === TRUE) {
        // Redirect to the success page
        header("Location: ../views/register_success.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
