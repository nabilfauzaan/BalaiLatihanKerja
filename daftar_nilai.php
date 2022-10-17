<?php include("connection.php");?>
<?php include("header.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Daftar Nilai</title>
</head>
<body class="bg-success p-2  bg-dark text-white">
    <header>
        <h3 align=center><font color=red>Daftar</font> Nilai Siswa</h3>
    </header>

    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
        if($_GET['status'] == 'sukses'){
            echo "Pendaftaran siswa baru berhasil!";
        } else{
            echo "Pendaftaran Gagal!";
        }
        ?>
    </p>

    <?php endif; ?>
    <br>
    <table border="1" class="table table-light table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Alamat Siswa</th>
                <th>Mata Kuliah</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM nilai_siswa INNER JOIN calon_siswa ON nilai_siswa.id_siswa = calon_siswa.id";
            $query = mysqli_query($con, $sql);

            while($nilai = mysqli_fetch_array($query)){
                echo "<tr>";

                echo "<td align=center>".$nilai['id']."</td>";
                echo "<td align=center>".$nilai['nama']."</td>";
                echo "<td align=center>".$nilai['alamat']."</td>";

                echo "<td align=center>".$nilai['mata_kuliah']."</td>";
                echo "<td align=center>".$nilai['nilai']."</td>";

                echo "</tr>";
            }
            ?>
        </tbody>
        </table>

        <p class="total">Total: <?php echo mysqli_num_rows($query) ?></p>
        <nav align=center class="link-nilai">
            <a href="tambah-nilai.php" class="btn btn-success">Tambah Nilai Siswa </a>
        </nav>
    
</body>
</html>