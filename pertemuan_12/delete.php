<?php
$con = mysqli_connect("localhost", "root", "");
if (!$con) 
{
    die('Could not connect: ' . mysqli_error($conn));
}
mysqli_select_db($con, "datatamu");
$test = mysqli_query($con, "DELETE FROM tamu WHERE id='1'");
if ($test) 
{
	echo "Hapus Data Berhasil";
}
