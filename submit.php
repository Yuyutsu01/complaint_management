<?php
include "config.php";

$name = $_POST['name'];
$email = $_POST['email'];
$complaint = $_POST['complaint'];

$sql = "INSERT INTO complaints (name, email, complaint)
        VALUES ('$name', '$email', '$complaint')";

if (mysqli_query($conn, $sql)) {
    echo "Complaint submitted successfully.<br>";
    echo "<a href='index.html'>Go Back</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
