<?php
include "../config.php";
if (isset($_POST['submit']))
{
    $id = $_POST['id'];
    $password = $_POST['password'];

    $stmt = $koneksi->prepare("SELECT * FROM admin WHERE (id=? || password = ?)");
    $stmt->bind_param("is", $username, $password);
    $stmt->execute();
    $check = $stmt->fetch ();
    $stmt->close();
    if ($check > 0)
    {
        $row = ($check);
        $_SESSION['id'] = $row['id'];
        $_SESSION['password'] = $row['password'];
        echo "<script>alert('Berhasil Login');
                document.location='../admin/admindashboard.php';</script>";
    } else {
    	echo "<script>alert('Gagal Login!');
        document.location='adminlogin.php'; </script>";
    }
}
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    </head>
    <body>
    <style>
        body{
            background-image: url('../gambar/backgroundadmin.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%
        }
    </style>
    </body>
    </html>