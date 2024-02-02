<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Makanan dan Minuman - Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }

        header {
            color: black;
            padding: 10px;
            text-align: center;
        }

        nav {
            background-color: #444;
            color: white;
            padding: 10px;
            text-align: center;
        }

        nav a {
            text-decoration: none;
            color: white;
            padding: 10px;
            display: inline-block;
        }

        section {
            padding: 20px;
            text-align: center;
        }

        .card {
            margin: 10px;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <header>
        <h1>Selamat Datang di Toko Makanan dan Minuman</h1>
    </header>

    <?php include "menu.php"; ?>

    <section>
        <h2>Promo Spesial Minggu Ini</h2>
        <p>Nikmati berbagai promo spesial kami pada minggu ini. Dapatkan diskon dan penawaran menarik untuk setiap pembelian makanan.</p>

        <div class="card-deck">
            <!-- Card 1 -->
            <div class="card">
                <img src="02.jpg" class="card-img-top" alt="Makanan">
                <div class="card-body">
                    <h5 class="card-title">Promo Makanan Spesial</h5>
                    <p class="card-text">Dapatkan diskon 20% untuk setiap pembelian di atas Rp 100.000,-.</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="card">
                <img src="04.jpg" class="card-img-top" alt="Minuman">
                <div class="card-body">
                    <h5 class="card-title">Bonus Minuman</h5>
                    <p class="card-text">Setiap pembelian menu makanan, dapatkan minuman gratis pilihanmu.</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="card">
                <img src="01.jpg" class="card-img-top" alt="Minuman Kopi">
                <div class="card-body">
                    <h5 class="card-title">Diskon Pecinta Kopi</h5>
                    <p class="card-text">Bagi pecinta kopi, nikmati diskon 30% untuk setiap pembelian kopi.</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        &copy; 2024 Toko Makanan dan Minuman. All rights reserved.
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
