<?php
    $pageTitle = 'Speakers | MIT Global Startup Workshop 2018';
    include('templates/nav-bar.php');
?>

<div class="parallax-window header" data-parallax="scroll" data-image-src="headers/img/speakers-header-2.jpg">
    <h1 class="parallax-text">
        Our Speakers
    </h1>
</div>
<div class="section" id="speaker-section-expanded">
    <p class="section-header section-header-page">About Our Speakers</p>
    <div class="row speaker-expanded-bio">
        <div class="col-md-3"></div>
        <div class="col-md-9"></div>
    </div>
</div>

<?php
$scripts .= "
<script src=\"splash/js/d3.js\"></script>
<script>
   d3.csv(\"data/speakers_new.csv\", function(error, speakers) {
      if (error) throw error;

    // columns for display on the site
    var totalColumns = 4;
    var rows = speakers.length/totalColumns;
    for (var i = 0; i < rows; i++){
        var markup = '<div class=\'row speaker-row text-center\'>';
        for (var j = 0; j < totalColumns; j++){
            var index = i*totalColumns + j;
            if (index < speakers.length){
                var speaker = speakers[i*totalColumns + j];
                var name = speaker['First Name'] + ' ' + speaker['Last Name'];
                var path = speaker['Filename'];
                var bio = speaker['Bio'];
                var title = speaker['Title'];
                var associationMarkup = speaker['MIT association'] == 'Y' ?
                    '<img class=\'speaker-picture-association\' src=\'speaker/img/mit.png\'/>' : '';

                imageMarkup = '<div class=\'speaker col-sm-6 col-md-3\'>' +
                    '<a class=\'anchor\' name=\'speaker'+ speaker[3] +'\'></a>' +
                    associationMarkup +
                    '<img class=\'speaker-picture\' src=\'speaker/img/' + path + '\'>';
                markup += imageMarkup + name + '</div>';

                speakerInfoMarkup = '<div class=\'row speaker-expanded-bio\' id=\'speaker' + name.replace(' ','') + '\'>' +
                    imageMarkup + '</div><div class=\'col-sm-6 col-md-9 speaker-expanded-text\'>'
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