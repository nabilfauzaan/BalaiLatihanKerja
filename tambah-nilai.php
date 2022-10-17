<?php
include("connection.php");
include("header.php");
$sql = "SELECT * FROM calon_siswa";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tambah Nilai Siswa</title>
</head>
<body class="bg-success p-2  bg-dark text-white">
    <header>
        <h3 align=center><font color=red>Tambah</font> Nilai Siswa</h3>
    </header><br><br>
    <form action="proses-nilai.php" method="POST">
        <fieldset>
            <p class="kolom-tambah">
                <label for="">Nama Siswa </label>
                <select name="id_siswa" id="" required>
                    <?php while($siswa = mysqli_fetch_array($query)) : ?>
                        <option value="<?php echo $siswa['id'] ?>"><?php echo $siswa['nama'] ?></option>
                    <?php endwhile; ?>
                </select>
            </p>
            <p class="kolom-tambah">
                <label for="">Mata Kuliah </label>
                <select name="mata_kuliah" id="mata_kuliah" required>
                    <option value="demo">Demo</option>
                    <option value="agama">Agama</option>
                    <option value="matematika">Matematika</option>
                    <option value="sejarah">Sejarah</option>
                    <option value="bahasa indonesia">Bahasa Indonesia</option>
                </select>
            </p>
            <p class="kolom-tambah">
                <label for="">Nilai </label>
                <input type="number" name="nilai" required><br><br>
                <input type="submit" value="Submit" name="submit" class="btn-edit btn btn-success">
            </p>
        </fieldset>
    </form>
    
</body>
</html>