<?php
require 'koneksi.php';
$username = $_POST["username"];
$role = $_POST["role"];
$email = $_POST["email"];
$password = $_POST["password"];

if (empty($username) || empty($email) || empty($password)|| $role == "Pilih Gender")  {
    echo "<center><h1>Harap Lengkapi Semua input</h1>
            <button><strong><a href='registrasi.html'>OK</a></strong></button></center>";
} else {
    $query_sql = "INSERT INTO tbl_users (username, role, email, password) 
    VALUES ('$username', '$role', '$email', '$password')";

    if (mysqli_query($conn, $query_sql)) {
    header("Location: login.html");
    } else {  
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}
}