<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Halaman Login</title>
    <style>
body::before {
    content: "";
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('gambar_anime.jpg') no-repeat center center fixed;
    background-size: cover;
}

body {
    background: none;
    height: 100vh;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
}

form {
    background-color: rgba(255, 255, 255, 0.8);
    padding: 60px;
    border-radius: 30px;
    width: 500px;
}

h1 {
    text-align: center;
}


form table tr td {
    padding: 10px;
}

form table tr td:first-child {
    width: 30%;
}

form table tr td:last-child {
    width: 70%;
}

form table tr:last-child td {
    padding-top: 20px;
}

form button {
    margin-right: 10px;
}

    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <form action="validasi.php" method="POST">
        <h1>Selamat Datang!</h1>
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">LOGIN</button>
                    <button type="reset">CLEAR</button>
                </td>
            </tr>
        </table>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>

