<?php
include "config.php";

$result = mysqli_query($conn, "SELECT * FROM complaints ORDER BY created_at DESC");

echo "<h2>All Complaints</h2>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<div style='border:1px solid black; padding:10px; margin:10px;'>";

    echo "<b>Name:</b> {$row['name']}<br>";
    echo "<b>Email:</b> {$row['email']}<br>";
    echo "<b>Complaint:</b> {$row['complaint']}<br>";
    echo "<b>Status:</b> {$row['status']}<br>";
    echo "<b>Date:</b> {$row['created_at']}<br><br>";

    echo "
    <form action='update_status.php' method='POST'>
        <input type='hidden' name='id' value='{$row['id']}'>
        <select name='status'>
            <option>Pending</option>
            <option>In Progress</option>
            <option>Resolved</option>
        </select>
        <button type='submit'>Update</button>
    </form>
    ";

    echo "</div>";
}
?>
