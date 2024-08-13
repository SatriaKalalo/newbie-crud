<?php 

    $id= $_GET["id"];

    $koneksi = mysqli_connect("localhost","root","","buatbaru");

    $query = mysqli_query($koneksi, "delete from baru where id=$id");

    header("location:index.php")

?>