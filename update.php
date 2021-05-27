<?php
$con = mysqli_connect("localhost", "root", "");
if (!$con) {
    die('Could not connect: ' . mysqli_error($conn));
}
mysqli_select_db($con, "datatamu");
$test = mysqli_query($con, "UPDATE tamu SET address = 'jakarta' 
WHERE name = 'Deia'");
if ($test) {
    echo "Edit Data Berhasil";
}
mysqli_close($con);
