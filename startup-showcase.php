<?php
    $pageTitle = 'Startup Showcase | MIT Global Startup Workshop 2018';
    include('templates/nav-bar.php');
?>

<div class="parallax-window header" data-parallax="scroll" data-image-src="headers/img/startup-showcase-header.png">
    <h1 class="parallax-text">
        Startup Showcase
    </h1>
</div>
<div class="section">
    <div class="row">
        <div class="col-xs-12">
            <div class="row">
                <div class="col-md-2 competitions-highlights">
                    <img src="splash/img/showcase-thumbnail.png" class="competition-img" />
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-9 marginTop">
                    <p class="date">26 March Monday</p>
                    <p class="competition-slogan">Write nice slogan phrase</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h2 class="competition-subtitle">Format</h2>
                    <p>The MIT GSW Startup Showcase offers the opportunity to:</p>
                    <ul>
                        <li class="list-competition"><span style="font-weight: 800">Display your products/services</span> to over 750 attendees at GSW</li>
                        <li class="list-competition">Meet with potential <span style="font-weight: 800">investors, mentors, and government officials</span></li>
                        <li class="list-competition">Participate in a <span style="font-weight: 800">networking night</span> for startups</li>
                    </ul>
                    <br />
                </div>
                <div class="col-md-6">
                    <h2 class="competition-subtitle">Eligibility</h2>
                    <p>Who should apply?</p>
                    <br>
                    <ul>
                        <li class="list-competition">All early stage startups looking to advertise their company, find potential investors, and seek advice</li>
                        <li class="list-competition">Startups must have less than $250,000 USD in annual revenue to be eligible</li>
                    </ul>
                    <br />
                </div>
            </div>
            <div class="text-center">
                <a class="btn btn-default register-button" href="#" role="button">Apply now<br>to Startup Showcase</a>
            </div>
        </div>
    </div>
</div>

<?php
include("templates/footer.php");
?>