<?php
    $pageTitle = 'Sponsors | MIT Global Startup Workshop 2018';
    $headerImageSrc = 'headers/img/header1.jpg';
    include('templates/nav-bar.php');
?>

<div class="parallax-window header" data-parallax="scroll" data-image-src="headers/img/header1.jpg">
    <h1 class="parallax-text">
        Our sponsors
    </h1>
</div>
<div class="section">
    <div class="section-header-light text-center">
        <p>We're proud to bring these organizations on board with us!</p>
    </div>
    <div class="row text-center">
        <div class="col-sm-6 col-md-3">
            <img class="partner-logo" src="splash/img/logos/sasin.png">
        </div>
        <div class="col-sm-6 col-md-3">
            <img class="partner-logo" src="splash/img/logos/mitthailand.png">
        </div>
        <div class="col-sm-6 col-md-3">
            <img class="partner-logo" src="splash/img/logos/reap.png">
        </div>
        <div class="col-sm-6 col-md-3">
            <img class="partner-logo" src="splash/img/logos/legatum.png">
        </div>
    </div>
</div>

<?php
include("templates/footer.php");
?>