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
   d3.csv(\"data/speakers.csv\", function(error, speakers) {
      if (error) throw error;

    var totalColumns = 4;
    var rows = speakers.length/totalColumns;
    var totalMentorRows = 0;
    var mentors = [];

    // select the mentors from the speakers list
    for (var i = 0; i < rows; i++){
        // Only for speakers who are mentors
        if (speakers[i].Mentor != 'Y') {
            mentors.push(speakers[i]);
        }
    }

    // add them to the markup
    for (var i = 0; i < rows; i++){
            var markup = '<div class=\'row speaker-row text-center\'>';
            for (var j = 0; j < totalColumns; j++){
                var index = i*totalColumns + j;
                if (index < mentors.length){
                    var speaker = mentors[i*totalColumns + j];

                    var name = speaker['First Name'] + ' ' + speaker['Last Name'];
                    var anchor = name.replace(/ /g,\"\");

                    var path = speaker['Filename'];
                    var bio = speaker['Bio'];
                    var title = speaker['Title'];
                    var associationMarkup = speaker['MIT association'] == 'Y' ?
                        '<img class=\'speaker-picture-association\' src=\'speaker/img/mit.png\'/>' : '';

                    imageMarkup = '<div class=\'speaker col-sm-6 col-md-3\'>'
                        + associationMarkup
                        + '<img class=\'speaker-picture\' src=\'speaker/img/' + path + '\'>';
                    markup += imageMarkup + name + '</div>';

                    speakerInfoMarkup = '<div class=\'row speaker-expanded-bio\'>'
                        + '<span class=\"anchor\" id=\"' + anchor + '\"></span>'
                        + imageMarkup + '</div><div class=\'col-sm-6 col-md-9 speaker-expanded-text\'>'
                        + '<div class=\'speaker-expanded-name\'>' + name + '</div>'
                        + '<div class=\'speaker-expanded-position\'>' + title + '</div>'
                        + bio + '</div></div>';
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