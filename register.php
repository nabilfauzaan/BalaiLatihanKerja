<?php include("connection.php");?>
<?php include("header.php");?>
<html>
    <body class="bg-success p-2  bg-dark text-white">
    <link rel="stylesheet" href="style.css">
    <header>
        <h3 align=center><font color=red>Daftar</font> Seluruh Siswa</h3>
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
    <table border=1 class="table table-light table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Hobi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM calon_siswa";
            $query = mysqli_query($con, $sql);

            while($siswa = mysqli_fetch_array($query)){
                echo "<tr>";

                echo "<td align=center>".$siswa['id']."</td>";
                echo "<td align=center>".$siswa['nama']."</td>";
                echo "<td align=center>".$siswa['alamat']."</td>";
                echo "<td align=center>".$siswa['jenis_kelamin']."</td>";
                echo "<td align=center>".$siswa['agama']."</td>";
                echo "<td align=center>".$siswa['hobi']."</td>";

                echo "<td>";
                echo "<a href='form-edit.php?id=".$siswa['id']."' >";
                echo "<button type='button' class='btn btn-success'><i class='fa-solid fa-pencil'></i></button>";
                echo "</a> | ";
                echo "<a href='hapus.php?id=".$siswa['id']."'>";
                echo "<button type='button' class='btn btn-danger'><i class='fa-solid fa-trash'></i></button>";
                echo "</a>";
                echo "</td>";

                echo "</tr>";
            }
            ?>
        </tbody>
        </table>

        <p class="total-siswa" align=center>Total: <?php echo mysqli_num_rows($query) ?></p>
        <nav align=center class="link">
            <a href="form-daftar.php" class="btn btn-success">Tambah Siswa Baru </a>
        </nav>

    
</body>
</html>