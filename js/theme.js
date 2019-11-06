/*****************************/
/*         Loader            */
/*****************************/
'use strict';
 $(window).load(function(){

    $(".loader-item").delay(700).fadeOut(); 
  $("#pageloader").delay(1200).fadeOut("slow");
  //Menu 
    $("#header").sticky({ topSpacing: 0 });
 });


 /*****************************/
/*    Animate Effects        */
/*****************************/
new WOW().init();


/*****************************/
/*       Language Theme      */
/*****************************/
$(document).ready(function(){
  $('#clicklan').click(function()
  {
      $("#panellan").animate({width:'toggle'},500);       
  });
});
/*----------Languaje active item--------*/
$(document).ready(function(){
  $(".list-group > a").click(function(){
      $('.list-group-item').removeClass("active");
      $(this).addClass( "active");
      $("#panellan").animate({width:'toggle'},500);    
  });
});


/*****************************/
/*       Color Theme         */
/*****************************/
function changecss(sheet){
  document.getElementById('pagestyle').setAttribute('href', sheet);
  $("#panel").animate({width:'toggle'},500); 
}

$(document).ready(function(){
  $('#click').click(function()
  {
      $("#panel").animate({width:'toggle'},500);       
  });
});


/*****************************/
/*       SmoothScroll        */
/*****************************/
smoothScroll.init({
    selector: '[data-scroll]', 
    selectorHeader: '[data-scroll-header]', 
    speed: 800, // Integer. How fast to complete the scroll in milliseconds
    easing: 'easeInOutCubic', 
    updateURL: true, 
    offset: 54, 
    callback: function ( toggle, anchor ) {} 
});


/*****************************/
/*        Slider             */
/*****************************/
$(document).ready(function(){    
    var cont=0;    
    $(".navbar-toggle").click(function(){                  
         if(cont==0){
            $("#camera_wrap_1").css("z-index", "-99");           
            cont ++;
         }
         else if(cont!=0)
         {
            $("#camera_wrap_1").css("z-index", "99");
            cont =0;
         }         
    });
});


/*****************************/
/*    Filters Portafolio     */
/*****************************/
$(document).ready(function() {

       var $grid = $('#grid');

      $grid.shuffle({
        itemSelector: '.item'
      });
      $('#filter a').click(function (e) {
        e.preventDefault();

        $('#filter a').removeClass('active');
        $(this).addClass('active');

        var groupName = $(this).attr('data-group');

        $grid.shuffle('shuffle', groupName );
      });

});


/*****************************/
/*     Contact validate      */
/*****************************/
    $(document).on('ready', function(){ 
      
      $('#message').hide();

      $('#sendmessage').on('click',function(e){ 
        var Name=$('#Name').val();        
        var Mail=$('#Mail').val();
        var Message=$('#Message').val();

        if (Name=="" && Mail=="" && Message=="") {
          e.preventDefault();
          $('#frm-name').addClass("has-error");
          $('#frm-mail').addClass("has-error");
          $('#frm-message').addClass("has-error");
          
        }
        if (Name=="") {
          e.preventDefault();
          $('#frm-name').addClass("has-error");

        }else {
          $('#frm-name').removeClass("has-error");
        }

        if(Mail==""){
          e.preventDefault();
          $('#frm-Mail').addClass("has-error");
        }else{
          $('#frm-Mail').removeClass("has-error");
        }
        if(Message==""){
          e.preventDefault();
          $('#frm-message').addClass("has-error");
        }else{
          $('#frm-message').removeClass("has-error");
        }        
        $('#message').show();
    });
});
