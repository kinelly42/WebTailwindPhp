<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/market.css">
</head>

<body>


    <!-- DataCustomer -->
    <div class="dataCustomer">
        <div class="login-box">
            <h2>Data Customer</h2>
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
                    <input type="text" name="barang" required="" id='barang'>
                    <label>Barang</label>
                </div>

                <button href="#" type='submit' form='formcustomer' value='kirim' name='kirim'>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Submit
                </button>
            </form>
        </div>


        <?php
        $berkas = "../data/customer.json";
        $dataCustomer = array();

        $dataJson = file_get_contents($berkas);
        $dataCustomer = json_decode($dataJson, true);

        if (isset($_POST['kirim'])) {
            //Memasukkan data masing-masing item ke dalam array $item.
            //array_push($item, $_POST['nilai']);
            //Memasukkan data customer dari form ke dalam array $databaru.
            $dataBaru = array(
                'nama' => $_POST['nama'],
                'telepon' => $_POST['telepon'],
                'alamat' => $_POST['alamat'],
                'barang' => $_POST['barang'],
            );
            array_push($dataCustomer, $dataBaru); //Menambahkan data baru ke dalam data yang sudah ada dalam berkas. 

            //Mengkonversi kembali data nilai dari array PHP menjadi array Json dan menyimpannya ke dalam berkas.
            $dataJson = json_encode($dataCustomer, JSON_PRETTY_PRINT);
            file_put_contents($berkas, $dataJson);
        }

        ?>



</body>

</html>