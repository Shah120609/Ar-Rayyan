<?php
//membuat sambungan pangkalan data//
$conn = mysqli_connect("localhost","root","","perpustakaan");

if(!$conn)
{
    die("Sambungan gagal : " . mysqli_connect_error());
}

mysqli_set_charset($conn,"utf8");
?>