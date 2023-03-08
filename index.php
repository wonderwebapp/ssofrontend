<?php
// $v=10;
$v = date("Y_m_d_H_i_s");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAUDI SOCIETY OF OPTOMETRY</title>
    <link rel="icon" type="image/png" href="images/fav.png">
    <link rel="stylesheet" href="css/bootstrap_ltr.css?v=<?= $v ?>">
    <link rel="stylesheet" href="css/main.css?v=<?= $v ?>">
    <link rel="stylesheet" href="css/ltr.css?v=<?= $v ?>">
    <link rel="stylesheet" href="css/aos.css?v=<?= $v ?>">

    <script src="js/bootstrap.js?v=<?= $v ?>"></script>
    <script src="js/jquery.js?v=<?= $v ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="js/aos.js?v=<?= $v ?>"></script>
    <script src="js/main.js?v=<?= $v ?>"></script>

</head>

<body>
    <?php
    include("components/header.php");
    include("components/nav.php");
    include("components/slider.php");
    include("components/about.php");
    include("components/speakers.php");
    include("components/gallery.php");
    include("components/sponsors.php");
    include("components/partners.php");
    include("components/news.php");
    include("components/footer.php");
    ?>

</body>

</html>