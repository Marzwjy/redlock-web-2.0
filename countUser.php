<?php
$conn = mysqli_connect("172.19.0.3", "root", "123poiasd", "Redlock");

if(!$conn){
    die("Failed". mysql_connect_error());
}

$sql = "SELECT COUNT(*) as TOTAL FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "Total Users = " . $row["TOTAL"];
} else {
    echo "0 User.";
}
?>
