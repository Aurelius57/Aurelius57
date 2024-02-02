<?php
session_start();

if (!array_key_exists("username", $_SESSION)) {
    header("location:logout.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #333;
            color: white;
            padding: 10px;
        }

        ul {
            list-style: none;
            margin: 0;
            padding: 10;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        li {
            position: relative;
            margin-bottom: 8px;
        }

        a {
            text-decoration: none;
            color: white;
            padding: 15px;
            display: block;
        }

        ul ul {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #444;
        }

        ul li:hover>ul {
            display: inherit;
        }

        li:hover a {
            color: #ff8c00;
        }

        ul ul li {
            width: 100px;
            float: none;
            display: list-item;
            position: relative;
        }

        ul ul ul li {
            position: relative;
            top: -60px;
            left: 100px;
        }

        ul ul a {
            padding: 10px 10px;
            color: #fff;
        }

        ul ul ul a {
            padding: 10px;
            color: #fff;
        }

        li a:last-child {
            margin-right: 0;
        }

        .welcome {
            margin-left: auto;
        }

        li ul li {
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <nav>
        <ul>
            <li><a href="home.php">HOME</a></li>
            <li>MASTER
                <ul>
                    <?php if ($_SESSION["level"] == "admin") : ?>
                        <li><a href="user.php">User</a></li>
                    <?php endif ?>
                    <li><a href="barang.php">Barang</a></li>
                </ul>
            </li>
            <li>TRANSAKSI
                <ul>
                    <li><a href="penjualan.php">Penjualan</a></li>
                    <li><a href="pembelian.php">Pembelian</a></li>
                </ul>
            </li>
            <li class="welcome">Selamat Datang ! , <?= $_SESSION["username"] ?>
                <ul>
                    <li><a href="profil.php">Profil</a></li>
                    <li><a href="logout.php">Log out</a></li>
                </ul>
            </li>
        </ul>
    </nav>

</body>

</html>