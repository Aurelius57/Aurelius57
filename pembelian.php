<!DOCTYPE html>
<html>

<head>
    <title>Pembelian</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h1 {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            background-color: white;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 5px;
            text-align: center;
        }

        th {
            background-color: #333;
            color: white;
        }

        form {
            display: inline-block;
            margin-bottom: 10px;
        }

        button {
            padding: 5px;
        }

        div {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php include "menu.php"; ?>

    <?php

    require "koneksi.php";

    $sql = "SELECT pembelian.id, barang.nama as nama_barang, pembelian.jumlah, pembelian.total_harga, user.username, pembelian.created_at FROM barang JOIN pembelian on barang.id = pembelian.id_barang JOIN user ON user.id = pembelian.id_staff ORDER BY pembelian.created_at DESC";
    $query = mysqli_query($koneksi, $sql);
    ?>

    <div>
        <h1>Data Pembelian</h1>
        <form action="new-pembelian.php" method="GET">
            <button type="submit">Tambah</button>
        </form>
        <table border="1">
            <tr>
                <th>No.</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
                <th>Diinput oleh</th>
                <th>Waktu</th>
                <th colspan="2">Aksi</th>
            </tr>
            <?php $i = 1; ?>
            <?php while ($pembelian = mysqli_fetch_array($query)) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $pembelian["nama_barang"] ?></td>
                    <td><?= $pembelian["jumlah"] ?></td>
                    <td><?= $pembelian["total_harga"] ?></td>
                    <td><?= $pembelian["username"] ?></td>
                    <td><?= $pembelian["created_at"] ?></td>
                    <td>
                        <form action="read-pembelian.php" method="GET">
                            <input type="hidden" name="id" value='<?= $pembelian["id"] ?>'>
                            <button type="submit">Lihat</button>
                        </form>
                    </td>
                    <td>
                        <form action="delete-pembelian.php" method="POST" onsubmit="return konfirmasi(this)">
                            <input type="hidden" name="id" value='<?= $pembelian["id"] ?>'>
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endwhile ?>
        </table>
    </div>
    <script>
        function konfirmasi(form) {
            formData = new FormData(form);
            id = formData.get("id");
            return confirm(`Hapus pembelian '${id}'?`);
        }
    </script>
</body>

</html>