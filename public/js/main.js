// JS and jQuery Scripts
// $(document).ready(function() {
//     $('a.link').click(function () {  
//         $('#wrapper').scrollTo($(this).attr('href'), 200);
//         setPosition($(this).attr('href'), '#parallax-bg', '0px', '200px', '400px', '600px')
//         setPosition($(this).attr('href'), '#parallax', '0px', '1600px', '3200px', '4800px')
//         $('a.link').removeClass('selected');  
//         $(this).addClass('selected');
//         return false;  
//     });  
// });

$(document).ready(function() {
    $('a.link').click(function () {
        setPosition($(this).attr('href'));
        $('a.link').removeClass('selected');  
        $(this).addClass('selected');
        return false;  
    });  
});

function setPosition(check) {
    var dWidth = $(window).width() / 3;
    var pWidth = $(window).width() / 10;
    if(check==='#box1') {
        $("#wrapper").animate({scrollLeft: 0});
        $('#parallax-bg').animate({right:'0px'}, 450);
        //$('#main-bg').addClass("main-slide");
        }
    else if(check==='#box2') {
        $("#wrapper").animate({scrollLeft: dWidth * 3});
        $('#parallax-bg').animate({right: '200px'}, 450);
        }
    else if(check==='#box3'){
        $("#wrapper").animate({scrollLeft: dWidth * 6});
        $('#parallax-bg').animate({right: '400px'}, 450);
        }
    else {
        $("#wrapper").animate({scrollLeft: dWidth * 9});
        $('#parallax-bg').animate({right: '600px'}, 450);
    }
};