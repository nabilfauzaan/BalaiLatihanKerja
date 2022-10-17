<?php

include("connection.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM calon_siswa WHERE id= $id"; 
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