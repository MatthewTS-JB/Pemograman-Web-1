<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TokuBayaFan</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/JavaScript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet'>
    <link rel="stylesheet" href="path/ke/font-awesome/css/all.min.css">

</head>
<body>
    <?php
    $page = $_GET['page'] ?? 'home';
    include 'home/header.php';
    switch($page) {
        case 'home':
            include 'page/home.php';
            break;
        case 'home1':
            include 'page/home1.php';
            break;
        case 'series':
            include 'page/series.php';
            break;
        case 'movie':
            include 'page/movie.php';
            break;
        case 'other':
            include 'page/other.php';
            break;
        case 'report':
            include 'page/report.php';
            break;
        case 'credit':
            include 'page/credit.php';
            break;
        case 'series1':
            include 'page/series1.php';
            break;
        case 'series1_2':
            include 'page/series1_2.php';
            break;
        case 'series2':
            include 'page/series2.php';
            break;
        case 'series3':
            include 'page/series3.php';
            break;
        case 'seriesdetail':
            include 'page/series-detail.php';
            break;
        case 'seriesdetail1':
            include 'page/series-detail1.php';
            break;
        case 'seriesdetail2':
            include 'page/series-detail2.php';
            break;
        case 'movie1':
            include 'page/movie1.php';
            break;
        case 'movie2':
            include 'page/movie2.php';
            break;
        case 'bonus':
            include 'page/bonus.php';
            break;
        case 'spinoff':
            include 'page/spinoff.php';
            break;
        default:
            include 'page/home.php';
            break;
    }
    include 'home/footer.php';
    ?>
    
    