<?php

include("connection.php");

if(isset($_POST['submit'])){
    $id_siswa = $_POST['id_siswa'];
    $mata_kuliah = $_POST['mata_kuliah'];
    $nilai = $_POST['nilai'];

    $sql = "INSERT INTO nilai_siswa (id_siswa, mata_kuliah, nilai) VALUE ('$id_siswa', '$mata_kuliah', '$nilai')"; 
    $query = mysqli_query($con, $sql);

    if($query){
        header('Location: daftar_nilai.php?status=sukses');
    }
    else{
        header('Location: daftar_nilai.php?status=gagal');
    }
}
else{
    die("Akses dilarang!");
}
?>