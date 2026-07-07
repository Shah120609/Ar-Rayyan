```php
<?php
include('config.php');
?>

<html>

<head>
<title>Rekod Pendafataran Buku</title>
</head>

<style>
h2{
    text-align:center;
    padding-top:20px;
}

body{
    background-color:white;
}
</style>

<body>

<h2>REKOD PENDAFTARAN BUKU</h2>

<center>

<img id="myimage"
     src="imej1.png"
     width="750"
     height="350"
     onmouseover="tukarImej()"
     onmouseout="asalImej()">

<script>
// menghasilkan kesan pertukaran imej banner

function tukarImej()
{
    document.getElementById("myimage").src="imej2.png";
}

function asalImej()
{
    document.getElementById("myimage").src="imej1.png";
}
</script>

<br><br>

<table border="0" cellpadding="7" cellspacing="5" bgcolor="white"
style="padding:20px;border-top:2px solid black;border-left:2px solid black;border-right:2px solid black;border-bottom:2px solid black;border-radius:10px;">

<form method="post" action="">

<tr>
    <td>ID Buku</td>
    <td>:</td>
    <td><input type="text" name="Id_buku" required></td>
</tr>

<tr>
    <td>Genre Buku</td>
    <td>:</td>
    <td><input type="text" name="Genre_buku" required></td>
</tr>

<tr>
    <td>Judul Buku</td>
    <td>:</td>
    <td><input type="text" name="Judul_buku" required></td>
</tr>

<tr>
    <td>Tahun Terbit</td>
    <td>:</td>
    <td><input type="text" name="Tahun_terbit" required></td>
</tr>

<tr>
    <td>Pengedar</td>
    <td>:</td>
    <td><input type="text" name="Pengedar" required></td>
</tr>

<tr>
    <td colspan="3" align="center">
        <input type="submit" name="submit" value="HANTAR">
    </td>
</tr>

</form>

<?php

// menghantar data masuk ke dalam jadual

if(isset($_POST['submit']))
{
    $Id_buku = $_POST['Id_buku'];
    $Genre_buku = $_POST['Genre_buku'];
    $Judul_buku = $_POST['Judul_buku'];
    $Tahun_terbit = $_POST['Tahun_terbit'];
    $Pengedar = $_POST['Pengedar'];

    $sql = "INSERT INTO jadual_buku
    (Id_Buku, Genre_Buku, Judul_Buku, Tahun_Terbit, Pengedar)
    VALUES
    ('$Id_buku','$Genre_buku','$Judul_buku','$Tahun_terbit','$Pengedar')";

    if(mysqli_query($conn,$sql))
    {
        header("Location:index.php");
    }
    else
    {
        echo "Data buku gagal disimpan! ".mysqli_error($conn);
    }

    mysqli_close($conn);
}

?>

</table>

</center>

</body>

</html>
```
