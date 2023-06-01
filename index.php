<?php
    session_start();
    if(!isset($_SESSION['login'])){
        header("Location: login.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/8d0a2aa6d4.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="images/logo.ico">
    <title>UPNVY FEST</title>
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
                
                <li><a class="nav_link_ticket" href="order.php"> Get ticket</a></li>
            </ul>
            <ul class="nav_link">
                <li><a class="nav_link_line" href="#">About</a></li>
                <li><a class="nav_link_line" href="#">concert</a></li>
                <li><a class="nav_link_line" href="#">ticket</a></li>
            </ul>
        </nav>

    </header>
    <main>
        <section class="homepage">
            <div class="homepage_content">
                <div class="header_content">
                    <h1 class="h1_image">UPNVY FESTIVAL 2023</h1>
                </div>
                <div class="paragraph">
                    <p>Tonton dan saksikan festival UPNVY yang menghadirkan<br>band-band ternama serta berbagai macam acara yang meriah</p>
                </div>
                <div class="paragraph_two">
                    <h2>
                        30 DEC 2023
                    </h2>
                    <p>@upnyk_fest </p>
                </div>
            </div>
        </section>
        <section class="work_section">
            <div class="work_section_content">
                <div class="main_program">
                    <h2>RUNDOWN</h2>
                    <div class="line_program"></div>
                </div>
                <div class="program_details_wrapper">
                    <article class="program_details">
                        <img src="images/program_icon_01.png" alt="icon image">
                        <h3>19.30</h3>
                        <p> Open Gate </p>
                    </article>
                    <article class="program_details">
                        <img src="images/program_icon_02.png" alt="icon image">
                        <h3>19.45 - 20.15</h3>
                        <p>Penampilan Band Lokal </p>
                    </article>
                    <article class="program_details">
                        <img src="images/program_icon_04.png" alt="icon image">
                        <h3>20.15 - 20.45</h3>
                        <p>Penampilan Artis Solo</p>
                    </article>
                    <article class="program_details">
                        <img src="images/program_icon_05.png" alt="icon image">
                        <h3>20.45 - 21.15</h3>
                        <p> Surprise Performance </p>
                    </article>
                    <article class="program_details">
                        <img src="images/program_icon_05.png" alt="icon image">
                        <h3>21.15 - Selesai</h3>
                        <p> Penampilan Bintang Utama dan Closing</p>
                    </article>
                </div>
            </div>

        </section>
        
    </main>
    <footer>
        <section class="footer">
            <div class="lower_footer">
                <img src="images/logo.png" alt="logo image">
                <p>@2023 UNPVY Fest. </p>
            </div>
        </section>

    </footer>

</body>

</html>