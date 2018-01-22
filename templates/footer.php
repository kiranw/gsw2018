<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center subscribe">
                <p class="section-header section-header-footer">Stay in touch! Subscribe to our newsletter.</p>
                <p>Don't miss any news about MIT GSW 2018. We promise we won't spam you.</p>
                <form method="post" class="form-inline" action="http://gsw.mit.edu/wordpress/?na=s">
                    <div class="form-group">
                        <input class="form-control" type="email" name="ne" placeholder="Email" required>
                        <input class="form-control" id="subscribe-button" type="submit" value="Subscribe">
                    </div>
                </form>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-offset-2 col-md-8">
                <div class="row">
                <div class="col-xs-4 col-md-offset-1 col-md-2">
                    <a href="https://twitter.com/MITGSW"><span class="fa fa-twitter-square sm-icon"></span></a>
                </div>
                <div class="col-xs-4 col-md-2">
                    <a href="https://www.facebook.com/MITGSW/"><span class="fa fa-facebook-square sm-icon"></span></a>
                </div>
                <div class="col-xs-4 col-md-2">
                    <a href="https://www.instagram.com/MITGSW/"><span class="fa fa-instagram sm-icon"></span></a>
                </div>
                <div class="col-xs-4 col-xs-offset-2 col-md-offset-0 col-md-2">
                    <a href="https://www.linkedin.com/groups/4117846"><span class="fa fa-linkedin-square sm-icon"></span></a>
                </div>
                <div class="col-xs-4 col-md-2">
                    <a href="mailto:gsw-tech@mit.edu"><span class="fa fa-envelope-square sm-icon"></span></a>
                </div></div>
            </div>
        </div>
        
        <br />

        <hr id="footer-hr">

        <div class="row">
            <div class="col-md-offset-2 col-md-4">
                <p class="footer-title">The Conference</p>
                <a href="index.php">Home</a><br>
                <a href="agenda.php">Agenda</a><br>
                <a href="registration.php">Registration</a><br>
                <a href="index.php#registration-section">Competitions</a><br>
                <a href="speakers.php">Speakers</a><br>
            </div>
            <div class="col-md-4">
                <p class="footer-title">Organization</p>
                <a href="history.php">History</a><br>
                <a href="team.php">Who we are</a><br>
<!--                <a href="sponsors.php">Sponsors</a><br>-->
                <a href="index.php#location">Venue</a><br>
            </div>
        </div>
    
        <div class="row">
            <div class="copyright col-md-12">
                Copyright ©2011–2018 Massachusetts Institute of Technology. All rights reserved.<br>
                For more information please contact <a href="mailto:gsw-tech@mit.edu">gsw-tech@mit.edu</a>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109416268-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-109416268-1');
</script>

<script>
    // Display pictures in previous parallax sections
    $(".parallax-window").each(function() {
        var background_image_src = $(this).data("image-src");
        if (background_image_src != null) {
            $(this).css("background-image", "url(" + background_image_src + ")");
        }
    });
</script>
<?= $scripts ?>

</body>
</html>