<?php
    $pageTitle = 'Collaborators | MIT Global Startup Workshop 2018';
    include('templates/nav-bar.php');
?>

<div class="parallax-window header" data-parallax="scroll" data-image-src="headers/img/header1.jpg">
    <h1 class="parallax-text">
        Collaborators
    </h1>
</div>
<div class="section" id="team-section">
    <p class="section-header section-header-page">Local Executive Committee</p>

    <p>MIT GSW works closely with a local Executive Committee based in Bangkok to authorize facility usage, sponsorship acquisition and serve as government liaison.</p>
    <br />

    <div class="row text-center">
        <div class="col-md-3">
            <img src="team/img/rami.jpg" class="team-picture" alt="" />
            <div class="team-name">Name</div>
            <div class="team-role"><small>Organization</small></div>
        </div>
        <div class="col-md-3">
            <img src="team/img/rami.jpg" class="team-picture" alt="" />
            <div class="team-name">Name</div>
            <div class="team-role"><small>Organization</small></div>
        </div>
        <div class="col-md-3">
            <img src="team/img/rami.jpg" class="team-picture" alt="" />
            <div class="team-name">Name</div>
            <div class="team-role"><small>Organization</small></div>
        </div>
        <div class="col-md-3">
            <img src="team/img/rami.jpg" class="team-picture" alt="" />
            <div class="team-name">Name</div>
            <div class="team-role"><small>Organization</small></div>
        </div>
    </div>

    <br />

    <p class="section-header section-header-page">Local Working Team</p>
    <p>MIT GSW works with a local working team based in Bangkok to connect and engage with the local community and speakers, develop conference material and content, and finalize details with government agencies and vendors.</p>
    <br />
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

                teamInfoMarkup = '<div class=\"row team-expanded-bio\" id=\"team' + team.name.replace(\" \",\"\") + '\">' +
                    imageMarkup + '</div><div class=\"col-sm-6 col-md-9\">'
                    +'<div class=\"team-expanded-name\">' +  team.name + '</div>'
                    +'<div class=\"team-expanded-role\">' +  team.role + '</div>'
                    +'<div class=\"team-expanded-association\">' +  team.association + '</div>'
                    +'<div class=\"team-expanded-text\">' + team.bio + '</div></div></div>';
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