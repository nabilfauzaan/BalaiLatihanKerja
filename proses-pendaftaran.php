<?php

include("connection.php");

if(isset($_POST['daftar'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $hobi = $_POST['hobi'];
    $new_hobi = "";

    for($i=0;$i<sizeof($hobi);$i++){
        if($i+1 == sizeof($hobi)){
            $new_hobi = $new_hobi.$hobi[$i];
        }
        else{
            $new_hobi = $new_hobi.$hobi[$i].", ";
        }
    }

    $sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, hobi) 
    VALUE ('$nama', '$alamat', '$jk', '$agama', '$new_hobi')";
    $query = mysqli_query($con, $sql);

    if($query){
        header('Location: register.php?status=sukses');
    }
    else{
        header('Location: register.php?status=gagal');
    }
}
else{
    die("Akses dilarang!");
}
?>