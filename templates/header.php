<div data-parallax="scroll" class="parallax-window main-page-header">
    <div class="brand">
        <div class="brand-theme">
                dream <span class="brand-highlight">big.</span><br>
                dream <span class="brand-highlight">tech.</span>
        </div>

        <div class="brand-title">tools for innovation-driven entrepreneurship</div>
        <div class="brand-subtitle">in collaboration with Sasin School of Management and the MIT Association of Thailand</div>
        <div class="brand-text"><span class="brand-highlight">Bangkok, Thailand</span></div>
        <div class="brand-text"><span class="brand-highlight">26-28 March, 2018</span></div>
    </div>
    <div class="banner">
        <div id="partner-icons">
            <img src="splash/img/logos/mitthailand.png" class="partner-icon">
            <img src="splash/img/logos/sasinsplash.png" class="partner-icon">
        </div>
    </div>

    <!-- Image while loading -->
    <img class="top-background visible-xs-block" src="splash/img/top_background_mobile.jpg" />

    <!-- Full-size video -->
    <video class="top-background hidden-xs" preload="none" autoplay loop muted="muted" plays-inline="" src="http://gsw-2018.herokuapp.com/splash/img/gsw_background_video.mp4"></video>
</div>
<div class="section" id="countdown">
    <div class="row countdown-text text-center">
        <div class="col-sm-3">
            <span id="days" class="number">5</span><br>
            <span class="number-label">days</span>
        </div>
        <div class="col-sm-3">
            <span id="hours" class="number">10</span><br>
            <span class="number-label">hours</span>
        </div>
        <div class="col-sm-3">
            <span id="minutes" class="number">1</span><br>
            <span class="number-label">minutes</span>
        </div>
        <div class="col-sm-3">
            <span id="seconds" class="number">1</span><br>
            <span class="number-label">seconds</span>
        </div>
    </div>
</div>
<script>
    /* COUNTDOWN */
    // Set the date we're counting down to (Thailand is UTC+7)
    var countDownDate = new Date(Date.UTC(2018, 2, 26, 1, 0, 0)).getTime(); // 8AM
    console.log("ahepp")
    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the following element
        $("#days").html(days);
        $("#hours").html(hours);
        $("#minutes").html(minutes);
        $("#seconds").html(seconds);

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            $("#countdown").html = "";
        }
    }, 1000);
</script>
<div class="section" id="registration-section">
    <div class="row text-center">
        <div class="col-xs-12">
            <br />
            <div class="section-subheader text-center">
                <p><strong>Register</strong> now to guarantee your spot at <strong>MIT Global Startup Workshop 2018</strong>!</p>
            </div>
            <a class="btn btn-default registration-button" href="registration.php" role="button">Register to attend</a>
            <br /><hr><br />

            <h2>Learn more about our competitions</h2>
            <br />
            <div class="row competitions-highlights text-center">
                <div class="col-sm-4">
                    <a class="competition-type" href="epc.php">
                        <img src="splash/img/epc-thumbnail.png" class="competition-img link-img" />
                        <span class="text-small">Elevator Pitch Competition</span>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a class="competition-type" href="bpc.php">
                        <img src="splash/img/bpc-thumbnail.png" class="competition-img link-img" />
                        <span class="text-small">Business Plan Competition</span>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a class="competition-type" href="startup-showcase.php">
                        <img src="splash/img/showcase-thumbnail.png" class="competition-img link-img" />
                        <span class="text-small">Startup Showcase</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="hidden-xs">
            <div class="col-xs-1"></div>
            <div class="col-xs-5">
                <div class="quote">
                    <p class="img-quote">By bringing together cross-sector experts</br>and leaders, GSW has built a global</br>support network, empowering and accelerating</br>entrepreneurship in emerging markets,</br>from Seoul to Madrid, Cape Town to Santiago.</br>And now Bangkok.</p>
                    <p class="quote-name">L. Rafael Reif</p>
                    <p class="quote-position">President of MIT</p>
                </div>
            </div>
            <img src="splash/img/rafael_reif.jpg" class="img-responsive hidden-xs" alt="Statement from L. Rafael Reif, president of MIT: By bringing together cross-sector experts and leaders, GSW has built a global support network, empowering and accelerating entrepreneurship in emerging markets, from Seoul to Madrid, Cape Town to Santiago. And now Bangkok."/>
        </div>
        <img src="splash/img/gsw-rafael-reif-mobile.jpg" class="img-responsive visible-xs-block" alt="Statement from L. Rafael Reif, president of MIT: By bringing together cross-sector experts and leaders, GSW has built a global support network, empowering and accelerating entrepreneurship in emerging markets, from Seoul to Madrid, Cape Town to Santiago. And now Bangkok."/>
    </div>
</div>
<div class="section">
    <div class="row">
        <div class="col-xs-12">
            <div class="section-header">
                    <p>Why attend?</p>
            </div>
            <ul>
                <li>Transform your ideas into successful startups by gaining valuable MIT expertise through workshops</li>
                <li>Learn about cutting edge, innovative technologies from MIT & world experts through panel discussions</li>
                <li>Participate in the GSW Competitions to receive mentorship from renowned entrepreneurs and gain access to exclusive VIP networking events</li>
                <li>Display your company in the GSW Startup Showcase featuring protected time with investors</li>
                <li>Gain access to top talent and emerging tech startups</li>
                <li>Learn and understand the business landscape in the South East Asian market</li>
                <li>Make fruitful connections with investors, government officials, corporate representatives, and more.</li>
            </ul>
        </div>
    </div>
</div>
