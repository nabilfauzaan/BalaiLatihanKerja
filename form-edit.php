<?php
include("connection.php");
include("header.php");
$id = $_GET['id'];

$sql = "SELECT * FROM calon_siswa WHERE id = $id";
$query = mysqli_query($con, $sql);
$siswa = mysqli_fetch_array($query);
?>


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
    <form action="proses-edit.php" method="POST">
        <fieldset>
            <p hidden class="kolom-edit">
                <label for="nama">ID: </label>
                <input type="text" name="id" placeholder="nama lengkap" value="<?php echo $id; ?>"/>
            </p>
            <p class="kolom-edit">
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa["nama"]; ?>"/>
            </p>
            <p class="kolom-edit">
                <label for="alamat">Alamat: </label>
                <textarea name="alamat"><?php echo $siswa['alamat']; ?>"</textarea>
            </p>
            <p class="kolom-edit">
                <label for="jenis_kelamin">Jenis kelamin: </label>
                <label><input type="radio" <?php echo ($siswa['jenis_kelamin'] == 'pria') ? "checked": ""?> name="jenis_kelamin" value="pria">Pria</label>
                <label><input type="radio" <?php echo ($siswa['jenis_kelamin'] == 'wanita') ? "checked": ""?> name="jenis_kelamin" value="wanita">Wanita</label>
            </p>
            <p class="kolom-edit">
                <label for="agama">Agama: </label>
                <select name="agama">
                    <option value="islam" <?php echo ($siswa['agama'] == 'islam') ? "checked": ""?> >Islam</option>
                    <option value="kristen" <?php echo ($siswa['agama'] == 'kristen') ? "checked": ""?> >Kristen</option>
                    <option value="budha" <?php echo ($siswa['agama'] == 'budha') ? "checked": ""?> >Budha</option>
                    <option value="hindu" <?php echo ($siswa['agama'] == 'hindu') ? "checked": ""?> >Hindu</option>
                    <option value="atheis" <?php echo ($siswa['agama'] == 'atheis') ? "checked": ""?> >Atheis</option>
                </select>
            </p>
            <p class="kolom-edit">
                <label for="hobi">Hobi: </label>
                <label><input type="checkbox" name="hobi[]" value="makan">Makan</label>
                <label><input type="checkbox" name="hobi[]" value="tidur">Tidur</label>
                <label><input type="checkbox" name="hobi[]" value="main bola">Main Bola</label>
            </p><br>
            <p class="kolom-edit">
            <input type="submit" value="Simpan" name="daftar"  class="btn-edit btn btn-success"/>
            </p>
        </fieldset>
    </form>
    
</body>
</html>