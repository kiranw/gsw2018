<?php
    $pageTitle = 'Team | MIT Global Startup Workshop 2018';
    include('templates/nav-bar.php');
?>

<div class="parallax-window header" data-parallax="scroll" data-image-src="headers/img/we-header-2.png">
    <h1 class="parallax-text">
        Who we are
    </h1>
</div>
<div class="section" id="team-section">
    <div>
        Our team consists of individuals across all parts of the MIT campus, and is supported by an accomplished advisory board.
    </div>

    <br />

    <div class="section-header section-header-page">Advisory Board</div>
    <div class="row text-center team">
        <div class="col-md-3">
            <img src="team/img/georgina.jpeg" class="team-picture" alt="" />
            <div class="team-name">Georgina Campbell Flatter</div>
            <div class="team-role"><small>Executive Director of the Legatum Center</small></div>
        </div>
        <div class="col-md-3">
            <img src="team/img/sarah.jpg" class="team-picture" alt="" />
            <div class="team-name">Sarah Jane Maxted</div>
            <div class="team-role"><small>Executive Director of the MIT Regional Entrepreneurship Program</small></div>
        </div>
        <div class="col-md-3">
            <img src="team/img/aditi.jpg" class="team-picture" alt="" />
            <div class="team-name">Aditi Gupta</div>
            <div class="team-role"><small>MIT GSW 2017 Lead</small></div>
        </div>
        <div class="col-md-3">
            <img src="team/img/rami.jpg" class="team-picture" alt="" />
            <div class="team-name">Rami Abi Akl</div>
            <div class="team-role"><small>MIT GSW 2017 Lead</small></div>
        </div>
    </div>

    <br />

    <div class="section-header section-header-page">Organizing Team</div>
</div>

<?php
$scripts = "
<script src=\"splash/js/d3.js\"></script>
<script>
d3.csv(\"data/team.csv\", function(error, teams) {
      if (error) throw error;

    var totalColumns = 4;
    var rows = teams.length/totalColumns;
    for (var i = 0; i < rows; i++){
        var markup = '<div class=\"row team-row text-center\">';
        for (var j = 0; j < totalColumns; j++){
            var index = i*totalColumns + j;
            if (index < teams.length){
                var team = teams[i*totalColumns + j];
                var imageMarkup = '<div class=\"team col-sm-6 col-md-3\">' +
                    '<a href=\"#team' + team.name.replace(\" \",\"\") + '\"><img class=\"team-picture\" src=\"team/img/' + team.imgpath + '\"></a>';
                markup += imageMarkup
                    +'<div class=\"team-name\">' +  team.name + '</div>'
                    +'<div class=\"team-role\">' +  team.role + '</div>'
                    +'<div class=\"team-association\"><img class=\"team-picture-association\" src=\"team/img/' + team.association + '\"/>'
                    +'</div></div>';

//                teamInfoMarkup = '<div class=\"row team-expanded-bio\" id=\"team' + team.name.replace(\" \",\"\") + '\">' +
//                    imageMarkup + '</div><div class=\"col-sm-6 col-md-9\">'
//                    +'<div class=\"team-expanded-name\">' +  team.name + '</div>'
//                    +'<div class=\"team-expanded-role\">' +  team.role + '</div>'
//                    +'<div class=\"team-expanded-association\">' +  team.association + '</div>'
//                    +'<div class=\"team-expanded-text\">' + team.bio + '</div></div></div>';
//                $(teamInfoMarkup).appendTo(\"#team-section-expanded\");
            }
            else {
                markup += '<div class=\"team col-sm-6 col-md-3\"></div>';
            }
        }
        markup += '</div>';
        $(markup).appendTo(\"#team-section\");
    }
})
    
</script>
";

include("templates/footer.php");
?>