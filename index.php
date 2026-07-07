```php
<html>

<head>
<title>Rekod Pendafataran Buku</title>
</head>

<style>
h2 {
    text-align: center;
    padding-top: 20px;
}

body {
    background-color: white;
}
</style>

<body>

<h2>REKOD PENDAFTARAN BUKU</h2>

<div style="width: 80%; margin: 20 auto; text-align: center;">
    <img src="imej1.png"
         id="gambar"
         style="border-radius:0px; width:750px; height:350px;"
         onmouseover="tukarGambar()"
         onmouseout="asalGambar()">
</div>

<script>
function tukarGambar()
{
    document.getElementById("gambar").src = "imej2.png";
}

function asalGambar()
{
    document.getElementById("gambar").src = "imej1.png";
}
</script>

<center>
<h1>Selamat Datang ke Perpustakaan Kolej Ar-Rayyan</h1>
<table border="1" cellpadding="5" cellspacing="0" bgcolor="white">

<tr>
    <th>Id_Buku</th>
    <th>Genre_Buku</th>
    <th>Judul_Buku</th>
    <th>Tahun_Terbit</th>
    <th>Pengedar</th>
    <th>Tindakan</th>
</tr>

<?php

include("config.php");

$result = mysqli_query($conn, "SELECT * FROM jadual_buku");

while($res = mysqli_fetch_array($result))
{
    echo "<tr>";

    echo "<td>".$res['Id_Buku']."</td>";
    echo "<td>".$res['Genre_Buku']."</td>";
    echo "<td>".$res['Judul_Buku']."</td>";
    echo "<td>".$res['Tahun_Terbit']."</td>";
    echo "<td>".$res['Pengedar']."</td>";

    echo "<td>
            <a href=\"padam.php?Id_Buku=".$res['Id_Buku']."\" onclick=\"return confirm('Rekod ini akan dihapuskan')\">
            Padam
            </a>
          </td>";

    echo "</tr>";
}

?>

</table>



<p>
<a href="tambah.php">
<button name="submit" type="submit">TAMBAH BUKU</button>
</a>

<br><br>

<button onclick="hubungi()">KHIDMAT PELANGGAN</button>

<p id="hubungi"></p>

<script>
function hubungi()
{
    document.getElementById("hubungi").innerHTML = "08-33669562";
}
</script>

</center>

</body>
</html>
```
