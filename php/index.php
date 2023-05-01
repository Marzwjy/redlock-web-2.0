<?php
$conn = mysqli_connect("172.19.0.3", "root", "123poiasd", "Redlock");

if(!$conn){
    die("Failed". mysql_connect_error());
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["ID"]. " - Nama: " . $row["Nama"]. " - Alamat: " . $row["Alamat"]. " - Jabatan: ". $row["Jabatan"] ."<br>";
    }
} else {
    echo "Tidak ada data.";
}
?>