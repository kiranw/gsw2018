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
            <div class="team-area">Executive Director of the Legatum Center</div>
        </div>
        <div class="col-md-3">
            <img src="team/img/sarah.jpg" class="team-picture" alt="" />
            <div class="team-name">Sarah Jane Maxted</div>
            <div class="team-area">Executive Director of the MIT Regional Entrepreneurship Program</div>
        </div>
        <div class="col-md-3">
            <img src="team/img/aditi.jpg" class="team-picture" alt="" />
            <div class="team-name">Aditi Gupta</div>
            <div class="team-area">MIT GSW 2017 Lead</div>
        </div>
        <div class="col-md-3">
            <img src="team/img/rami.jpg" class="team-picture" alt="" />
            <div class="team-name">Rami Abi Akl</div>
            <div class="team-area">MIT GSW 2017 Lead</div>
        </div>
    </div>

    <br />

    <div class="section-header section-header-page">Organizing Team</div>
</div>
<div class="section">
    <hr class="blue-hr" />
</div>
<div class="section" id="team-section-expanded">
</div>

<?php
$scripts .= "
<script src=\"splash/js/d3.js\"></script>
<script>
d3.csv(\"data/team.csv\", function(error, teams) {
    if (error) throw error;

    var rows = teams.length;
    var currentCategory = \"\";
    var changedCategory = false;
    var markup = \"<div>\";
        
    for (var i = 0; i < rows; i++){
        var team = teams[i];

        var anchor = 'team' + team.name.replace(/ /g,\"\");

        changedCategory = currentCategory != team.category;
        currentCategory = team.category;
        if (changedCategory) {
            markup += '</div>';
            markup += '<div class=\"row team-row text-center\">'
                + '<div class=\"col-xs-12\"><h2>' + team.category + '</h2></div>';
        }

        var column_size = team.category == \"Leads\" ? \"col-md-4\" : \"col-sm-6 col-md-3\";

        markup += '<div class=\"team ' + column_size + '\">'
            +'<a href=\"#' + anchor + '\"><img class=\"team-picture\" src=\"team/img/' + team.imgpath + '\"></a>'
            +'<div class=\"team-name\">' +  team.name + '</div>'
            +'<div class=\"team-role\">GSW ' +  team.role + '</div>'
            +'<div class=\"team-area\">' +  team.area + '</div>'
            +'</div>';

        teamInfoMarkup = '<div class=\"row team-expanded-bio\">'
            + '<span class=\"anchor\" id=\"' + anchor + '\"></span>'
            + '<div class=\"team col-md-5 col-lg-3 text-center\">'
            + '<a href=\"#' + anchor + '\"><img class=\"team-picture\" src=\"team/img/' + team.imgpath + '\"></a>'
            + '</div><div class=\"col-md-7 col-lg-9\">'
            +'<div class=\"team-expanded-name\">' +  team.name + '</div>'
            +'<div class=\"team-expanded-role\">' +  team.role + '</div>'
            +'<div class=\"team-expanded-text\">' + team.bio + '</div></div></div>';
        $(teamInfoMarkup).appendTo(\"#team-section-expanded\");
    }
    $(markup).appendTo(\"#team-section\");
});
    
</script>
";

include("templates/footer.php");
?>