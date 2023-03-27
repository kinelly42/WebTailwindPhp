<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <link rel="stylesheet" href="../css/market.css"> -->
</head>

<body>
    <!-- navbar -->
    <?php
    include '../view/navbar.php'

    ?>
    <!-- navbarEnd -->

    <!-- DataCustomer -->
    <!-- 
    <div class="dataCustomer">
        <div class="login-box">
            <h2>Data Masahasiswa</h2>
            <form action='' method='post' id='formcustomer'>
                <div class="user-box">
                    <input type="text" name="nama" required="" id=''>
                    <label>Nama</label>
                </div>
                <div class="user-box">
                    <input type="text" name="telepon" required="" id='telepon'>
                    <label>Nomor Telepon</label>
                </div>
                <div class="user-box">
                    <input type="text" name="alamat" required="" id='alamat'>
                    <label>Alamat</label>
                </div>
                <div class="user-box">
                    <input type="number" name="npm" required="" id='npm'>
                    <label>NPM</label>
                </div>

                <button href="#" type='submit' form='formcustomer' value='kirim' name='kirim'>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Submit
                </button>
            </form>
        </div> -->

    <table border="1" style="border: 2px" class="border border-sky-500">
        <thead>
            <tr>
                <th>Id</th>
                <th>Npm</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>


            <?php
            include '../config/config.php';
            $sql = "SELECT * FROM mahasiswa";
            $query = mysqli_query($db, $sql);

            while ($siswa = mysqli_fetch_array($query)) {
                echo "<tr>";

                echo "<td>" . $siswa['id'] . "</td>";
                echo "<td>" . $siswa['npm'] . "</td>";
                echo "<td>" . $siswa['nama_lengkap'] . "</td>";
                echo "<td>" . $siswa['kelas'] . "</td>";
                echo "<td>" . $siswa['alamat'] . "</td>";

                echo "<td>";
                echo "<a href='form-edit.php?id=" . $siswa['id'] . "'>Edit</a> | ";
                echo "<a href='hapus.php?id=" . $siswa['id'] . "'>Hapus</a>";
                echo "</td>";

                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    </div>
    </div>

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>


</body>

</html>