<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Data Barang</title>
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
    
    $sql = "SELECT * FROM barang";
    $stmt = $koneksi->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    ?>

    <div>
        <h1>Data Barang</h1>
        <form action="new-barang.php" method="GET">
            <button type="submit">Tambah</button>
        </form>
        <table>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Harga beli</th>
                <th>Harga jual</th>
                <th>Dibuat pada</th>
                <th>Diubah pada</th>
                <th colspan="2">Aksi</th>
            </tr>

            <?php $i = 1; ?>
            <?php while ($barang = $result->fetch_assoc()) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= htmlspecialchars($barang["nama"]) ?></td>
                    <td><?= htmlspecialchars($barang["kategori"]) ?></td>
                    <td><?= htmlspecialchars($barang["stok"]) ?></td>
                    <td><?= htmlspecialchars($barang["harga_beli"]) ?></td>
                    <td><?= htmlspecialchars($barang["harga_jual"]) ?></td>
                    <td><?= htmlspecialchars($barang["created_at"]) ?></td>
                    <td><?= htmlspecialchars($barang["updated_at"]) ?></td>
                    <td>
                        <form action="read-barang.php" method="GET">
                            <input type="hidden" name="id" value='<?= $barang["id"] ?>'>
                            <button type="submit">Lihat</button>
                        </form>
                    </td>
                    <td>
                        <form action="delete-barang.php" method="POST" onsubmit="return konfirmasi(this)">
                            <input type="hidden" name="id" value='<?= $barang["id"] ?>'>
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
            return confirm(`Hapus barang '${id}'?`);
        }
    </script>
</body>

</html>
