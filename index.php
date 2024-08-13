<?php 

$koneksi = mysqli_connect("localhost","root","","buatbaru");

$query = mysqli_query($koneksi,"select * from baru");

while($data = mysqli_fetch_array($query)){
    echo $data["nama"] . "<br />";
    echo $data["id"];
    ?>
    <a href="hapus.php?id=<?= $data['id'] ?>">hapus</a>;
    <?php
    echo "<br / >";
}

?>