```php
<?php

include('config.php');

if(isset($_GET['Id_Buku']))
{

    $Id_Buku = $_GET['Id_Buku'];

    // memadam data buku daripada jadual dengan menggunakan Id_Buku
    $result = mysqli_query($conn, "DELETE FROM jadual_buku WHERE Id_Buku='$Id_Buku'");

    // kembali ke halaman utama
    header("Location:index.php");
}
?>
```
