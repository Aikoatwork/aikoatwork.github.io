<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="images/logo.ico">
    <title>UPNVY FEST</title>
    <style>
        body {
            background-image: url(images/mobile\ background.png);
            background-repeat: no-repeat;
            background-size: cover;
        }

        table {
            width: 100%;
            max-width: 400px;
            border-collapse: collapse;
            background-color: rgba(255, 255, 255, 0.8);
            margin-top: 100px;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .order-link {
            color: blue;
            text-decoration: underline;
            cursor: pointer;
        }

        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }

        .button-container a {
            text-decoration: none;
            margin: 0 10px;
        }

        .button-container button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button-container button.edit {
            background-color: #36b853;
        }

        .button-container button.refund {
            background-color: #e74c3c;
        }

        .button-container button:hover {
            background-color: #333;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <a href="index.php" class="music_logo">
                <img src="images/logo.png" alt="logo image">
            </a>
            <div class="hamburger_menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="mobile_menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="./about.html">About</a></li>
                <li><a href="featured.html">Featured</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <center>
            <table>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Jumlah Tiket</th>
                        <th>Subtotal Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    session_start();
                    $username = $_SESSION['username'];

                    $sql = "SELECT username, banyak_tiket FROM member where username = '$username'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $username = $row["username"];
                            $banyakTiket = $row["banyak_tiket"];
                            $subtotal = $banyakTiket * 20000;

                            echo "<tr><td>" . $username . "</td><td>" . $banyakTiket . "</td><td><p?>Rp. " . $subtotal . "</p></td></tr>";
                        }
                    }

                    $conn->close();
                    ?>
                </tbody>
            </table>
            <div class="button-container">
            <a href="edit.php"><button class="edit">Edit</button></a>
            <a href="refund.php"><button class="refund">Refund</button></a>
        </div>
        </center>
    </main>
</body>

</html>