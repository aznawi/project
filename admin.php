<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Library</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container">

        <header>
            <img src="images/header.png" alt="">
        </header>

        <nav>
            <ul>
                <li><a href="admin.php">Home</a></li>
                <li><a href="admin.php?page=create">Daftar</a></li>
                <li><a href="admin.php?page=read">Daftar Pengunjung</a></li>
                <li><a href="admin.php?page=contact">Contact</a></li>
                <li><a href="admin.php?page=about">About</a></li>
                <li><a href="admin.php?page=visimisi">Visi Misi</a></li>
                <li><a href="admin.php?page=author">Book Author</a></li>
                <li><a href="admin.php?page=logout">Logout</a></li>

            </ul>
        </nav>

        <main>

        <?php
            if (isset($_GET["page"])) {
                require $_GET["page"] . ".php";
            } else {
                require "main.php";
            }
        ?>


        </main>

        <footer>
            Copyright &copy; 2024. Aznawi - Window Of World
        </footer>
    </div>
    
</body>
</html>