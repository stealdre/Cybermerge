<?php

require_once 'Firestore.php';

use Kreait\Firebase;

$factory = (new Firebase\Factory)
    ->withServiceAccount('token/cybermerge-25933-firebase-adminsdk-hgzgs-17fa4efea2.json')
    // The following line is optional if the project id in your credentials file
    // is identical to the subdomain of your Firebase project. If you need it,
    // make sure to replace the URL with the URL of your project.
    ->withDatabaseUri('https://console.firebase.google.com/project/cybermerge-25933/database/firestore/data/');

$fs = new database('news', $factory);

$news = $fs->getNews();

?>

<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta chars et="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cybermerge feed</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/animate.css">
    <!-- CSS Animation -->
    <link rel="stylesheet" href="css/awsmIcomoon.css">
    <!--Icon font -->
    <link rel="stylesheet" href="css/awsm-timeline.css">
    <!-- Resource style -->
    <script src="js/modernizr.js"></script>
</head>

<body>

<!-- header -->
<div class="header">
    <div id="navbar">
        <a href="#news">About</a>
        <a href="#contact">Contact</a>
    </div>
    <img src="Img/logo/header_logo.jpg" class="header-logo">
</div>
<div class="awsm-container">
    <!-- awsm-left-align/awsm-right-align/awsm-alternate/awsm-date-opposite-->
    <div class="awsm-timeline awsm-timeline-style-4 awsm-alternate">
        <div class="awsm-timeline-block awsm-timeline-label-block">
            <div class="awsm-labels awsm-start-label">
                <span>Today</span>
            </div>
            <!-- .awsm-start-label -->
        </div>  <!-- TODAY -->
        <!-- awsm-timeline-block -->

        <?php

        $date = new DateTime();

        foreach ($news as &$item) {

            $match_date = new DateTime($item["date"]);
            $interval = $date->diff($match_date);

            if ($interval->days == 0) {
                printNews($item);
            }
        }
        ?>

        <div class="awsm-timeline-block awsm-timeline-label-block">
            <div class="awsm-labels awsm-start-label">
                <span>Yesterday</span>
            </div>
            <!-- .awsm-start-label -->
        </div> <!-- YESTERDAY -->

        <?php

        foreach ($news as &$item) {

            $match_date = new DateTime($item["date"]);
            $interval = $date->diff($match_date);

            if ($interval->days == 1) {
                printNews($item);
            }
        }
        ?>

        <div class="awsm-timeline-block awsm-timeline-label-block">
            <div class="awsm-labels awsm-start-label">
                <span>Last week</span>
            </div>
            <!-- .awsm-start-label -->
        </div> <!-- LAST WEEK -->

        <?php

        foreach ($news as &$item) {

            $match_date = new DateTime($item["date"]);
            $interval = $date->diff($match_date);

            if ($interval->days >= 2) {
                printNews($item);
            }
        }
        ?>
    </div>
    <!-- awsm-timeline -->
</div>
<!-- .awsm-container -->

<?php

    function printNews($item)
    {
        echo '<div class="awsm-timeline-block awsm-odd-item">';
        echo '<div class="awsm-timeline-img">';
        echo '<img src="Img/Icons/malware.png">';
        echo '</div>';
        echo '<div class="awsm-timeline-content">';
        echo '<div class="awsm-timeline-content-inner">';
        echo '<h2><a href="' . $item["url"] . '" target="_blank" style="text-decoration: none">' . $item["title"] . '</a></h2>';
        echo '<p>' . $item["summary"] . '</p>';
        echo '</div></div></div>';
    }

?>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="js/awsm-timeline.min.js"></script>
<!-- Resource jQuery -->
</body>

</html>
