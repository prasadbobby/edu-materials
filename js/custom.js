  
    //inspiration
//https://dribbble.com/shots/6492639-Account-team-switcher-animation
let light = 0;

$('.icons').on('click', function(){
  $('.light').removeClass("light").addClass("off");
  $(this).addClass("light").removeClass("off");
  var id = $(this).attr('id');
  if(id == "home"){
    $('.title').text("Dashboard");
    $('.ball').removeClass('ball-c');
    $('.ball').removeClass('ball-s');
    $('.ball').addClass('ball-h');
    $('#home').attr('style','');
    $('#arrow, #spoty').attr('style','z-index:99');
  }
  if(id == "arrow"){
    $('.title').text("Charts");
    $('.ball').removeClass('ball-h');
    $('.ball').removeClass('ball-s');
    $('.ball').addClass('ball-c');
    $('#arrow').attr('style','');
    $('#home, #spoty').attr('style','z-index:99');
  }
  if(id == "spoty"){
    $('.title').text("Music");
    $('.ball').removeClass('ball-h');
    $('.ball').removeClass('ball-c');
    $('.ball').addClass('ball-s');
    $('#spoty').attr('style','');
    $('#home, #arrow').attr('style','z-index:99');
  }
  
  $('#list').attr("style","opacity:0");
  $('#list').animate({opacity: 1}, 800);
  
});

    