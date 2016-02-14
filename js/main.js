/**
 * Created by Ltas on 13.02.2016.
 */
//document.addEventListener("DOMContentLoaded", function() { initialiseMediaPlayer(); }, false);
//var mediaPlayer;
//function initialiseMediaPlayer() {
//    mediaPlayer = document.getElementsByClassName('media-video');
//    mediaPlayer.controls = false;
//}
//function togglePlayPause() {
//    var btn = document.getElementsByClassName('play-pause-button');
//    if (mediaPlayer.paused || mediaPlayer.ended) {
//        btn.style.display = 'none';
//        mediaPlayer.play();
//        mediaPlayer.controls = true;
//    }
//}
//progress-bar
//$(document).ready(function () {
//    progressBarUpdate(23, 100);
//});

function rotate(element, degree) {
    element.css({
        '-webkit-transform': 'rotate(' + degree + 'deg)',
        '-moz-transform': 'rotate(' + degree + 'deg)',
        '-ms-transform': 'rotate(' + degree + 'deg)',
        '-o-transform': 'rotate(' + degree + 'deg)',
        'transform': 'rotate(' + degree + 'deg)',
        'zoom': 1
    });
}
$(document).ready(function() {
    $('a[href^="#"]').click(function(){
        var el = $(this).attr('href');
        $('body').animate({
            scrollTop: $(el).offset().top - 50}, 1000);
        return false;
    });
    $( ".cross" ).hide();
    $( ".menu" ).hide();
    $( ".hamburger" ).click(function() {
        $( ".menu" ).slideToggle( "slow", function() {
            $( ".hamburger" ).hide();
            $( ".cross" ).show();
        });
    });

    $( ".cross" ).click(function() {
        $( ".menu" ).slideToggle( "slow", function() {
            $( ".cross" ).hide();
            $( ".hamburger" ).show();
        });
    });
});


//function progressBarUpdate(x, outOf) {
//    var firstHalfAngle = 180;
//    var secondHalfAngle = 0;
//
//    // caluclate the angle
//    var drawAngle = x / outOf * 360;
//
//    // calculate the angle to be displayed if each half
//    if (drawAngle <= 180) {
//        firstHalfAngle = drawAngle;
//    } else {
//        secondHalfAngle = drawAngle - 180;
//    }
//
//    // set the transition
//    rotate($(".slice1"), firstHalfAngle);
//    rotate($(".slice2"), secondHalfAngle);
//
//    // set the values on the text
//    $(".status").html(x + "%");
//}