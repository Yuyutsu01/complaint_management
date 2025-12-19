<?php
include "config.php";

$id = $_POST['id'];
$status = $_POST['status'];

$sql = "UPDATE complaints SET status='$status' WHERE id=$id";

mysqli_query($conn, $sql);

header("Location: fetch.php");
?>
