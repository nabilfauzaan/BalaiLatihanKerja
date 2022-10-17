<?php include("connection.php");?>
<?php include("header.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulir Pendaftaran Siswa Baru</title>
</head>
<body class="bg-success p-2  bg-dark text-white">
    <header>
        <h3 align=center><font color=red>Formulir</font> Pendaftaran Siswa Baru</h3>
    </header><br><br>
    <form action="proses-pendaftaran.php" method="POST">
        <fieldset>
            <p class="kolom-daftar">
                <label for="nama">Nama: </label>
                <input  class="place" type="text" name="nama" placeholder="nama lengkap"/>
            </p>
            <p class="kolom-daftar">
                <label for="alamat">Alamat: </label>
                <textarea name="alamat"></textarea>
            </p>
            <p class="kolom-daftar">
                <label for="jenis_kelamin">Jenis kelamin: </label>
                <label><input type="radio" name="jenis_kelamin" value="pria">Pria</label>
                <label><input type="radio" name="jenis_kelamin" value="wanita">Wanita</label>
            </p>
            <p class="kolom-daftar">
                <label for="agama">Agama: </label>
                <select name="agama">
                    <option value="islam">Islam</option>
                    <option value="kristen">Kristen</option>
                    <option value="budha">Budha</option>
                    <option value="hindu">Hindu</option>
                    <option value="atheis">Atheis</option>
                </select>
            </p>
            <p class="kolom-daftar">
                <label for="hobi">Hobi: </label>
                <label><input type="checkbox" name="hobi[]" value="makan">Makan</label>
                <label><input type="checkbox" name="hobi[]" value="tidur">Tidur</label>
                <label><input type="checkbox" name="hobi[]" value="main bola">Main Bola</label>
            </p><br>
            <p class="kolom-daftar">
            <input type="submit" value="Daftar" name="daftar" class="btn-daftar btn btn-success"/>
            </p>
        </fieldset>
    </form>
    
</body>
</html>