<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel='shortcut icon' href='../image/LOGO.jpg' />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../frontend/css/style.css">
    <link rel="stylesheet" href="../frontend/css/homepage.css">
    <link rel="stylesheet" href="../frontend/css/header.css">
    <link rel="stylesheet" href="../frontend/css/footer.css">
    <link rel="stylesheet" href="../frontend/css/LoginForm.css">
    <link rel="stylesheet" href="../frontend/css/Account_Info.css">
    <link rel="stylesheet" href="../assets/icons/all.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <title>MOON COSMETIC</title>
</head>

<body>
    <div class="header">
        <?php include 'public/header.php' ?>
    </div>
    <div class="content">
        <?php include 'public/home.php' ?>
    </div>
    <div class="footer">
        <?php include 'public/footer.php' ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="../frontend/js/admin.js"></script>
    <script src="../frontend/js/LoadPage.js"></script>
    <script src="../frontend/js/slideshow.js"></script>
    <script src="../frontend/js/countdown.js"></script>
    <script src="../frontend/js/login.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>

</html