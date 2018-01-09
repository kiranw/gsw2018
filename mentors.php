<?php
    $pageTitle = 'Mentors | MIT Global Startup Workshop 2018';
    include('templates/nav-bar.php');
?>

<div class="parallax-window header" data-parallax="scroll" data-image-src="headers/img/competition-generic-header.png">
    <h1 class="parallax-text">
        Our Mentors
    </h1>
</div>
<div class="section" id="speaker-section-expanded">
    <p class="section-header section-header-page">About Our Mentors</p>
    <div class="row speaker-expanded-bio">
        <div class="col-md-3"></div>
        <div class="col-md-9"></div>
    </div>
</div>

<?php
$scripts .= "
<script src=\"splash/js/d3.js\"></script>
<script>
   d3.csv(\"data/speakers.csv\", function(error, mentors) {
      if (error) throw error;

    var totalColumns = 4;
    var rows = mentors.length/totalColumns;
    for (var i = 0; i < rows; i++){
        // Only for speakers who are mentors
        if (speaker.mentor != 'yes') {
            continue;
        }

        // Display speaker info
        var markup = '<div class=\'row speaker-row text-center\'>';
        for (var j = 0; j < totalColumns; j++){
            var index = i*totalColumns + j;
            if (index < mentors.length){
                var speaker = mentors[i*totalColumns + j];
                imageMarkup = '<div class=\'speaker col-sm-6 col-md-3\'>' +
                    '<a class=\'anchor\' name=\'speaker'+ speaker.id +'\'></a>' +
                    '<img class=\'speaker-picture-association\' src=\'speaker/img/' + speaker.association + '\'/>' +
                    '<img class=\'speaker-picture\' src=\'speaker/img/' + speaker.imgpath + '\'>';
                markup += imageMarkup + speaker.name + '</div>';

                speakerInfoMarkup = '<div class=\'row speaker-expanded-bio\' id=\'speaker' + speaker.name.replace(' ','') + '\'>' +
                    imageMarkup + '</div><div class=\'col-sm-6 col-md-9 speaker-expanded-text\'>'
                    + '<div class=\'speaker-expanded-name\'>' + speaker.name + '</div>'
                    + '<div class=\'speaker-expanded-position\'>' + speaker.position + '</div>'
                    + speaker.bio + '</div></div>';
                $(speakerInfoMarkup).appendTo('#speaker-section-expanded');
            }
            else {
                markup += '<div class=\'speaker col-sm-6 col-md-3\'></div>';
            }
        }
    }
   
   });
</script>";

include("templates/footer.php");
?>