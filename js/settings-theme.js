//Settings theme Dittoo


/*****************************/
/*      Slider Settings      */
/*****************************/
 jQuery(function(){          
    jQuery('#camera_wrap_1').camera({
        playPause: false, //Show button play        
        time: 5000, // Time transition image slider        
        loader: 'pie',
        loaderColor: '#EDEDED', //Color bar loading
        loaderBgColor: 'rgba(31, 35, 37, 0.36)'   //Color background loader     
        });     
 });

/*****************************/
/*       Conf clients         */
/*****************************/

$(document).ready(function() { 
  $("#owl-demo").owlCarousel({ 
    navigation : true,
    navigationText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
    rewindNav : true,
    scrollPerPage : true,
    pagination : false,
    autoPlay: 4000, //Set AutoPlay to 3 seconds
    items : 3, //Number Set Items
    autoHeight: true,
    itemsDesktop : [1199,3],
    itemsDesktopSmall : [979,3] 
  });
 
});



/*****************************/
/*       Portafolio          */
/*****************************/

$(document).ready(function() {
  $('.popup-gallery').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1]
    },
    image: {
      tError: 'The image #%curr% could not be loaded.',      
    },

    zoom: {
    enabled: true, 
    duration: 350, // duration of the effect, in milliseconds
    easing: 'ease-in-out',
    opener: function(openerElement) {
      return openerElement.is('img') ? openerElement : openerElement.find('img');
    }
  }
  });
});


/*****************************/
/*        Progres Bar        */
/*****************************/
$(document).ready(function() {
  
  setGoTop();
  toggleGoTop();
  buildContents();
  
/*----------Sckill OPC 1 --------*/ 
  var skillopc1 = {
    horTitle:'CSS',
    colorRange:true,
    counterStep:1,
    milestones:true,
    horBarHeight:27, //Set the height bar in PX
    Default: true,
    animTime:5000 // duration of the effect, in milliseconds
  }  
 $('#skillopc1').barIndicator(skillopc1); 

 /*----------Sckill OPC 2 --------*/ 
  var skillopc1 = {
    horTitle:'Java Script ',
    colorRange:true,
    counterStep:1,
    milestones:true,
    horBarHeight:27, //Set the height bar in PX
    Default: true,
    animTime:5000 // duration of the effect, in milliseconds
  }  
 $('#skillopc2').barIndicator(skillopc1);

/*----------Sckill OPC 3 --------*/ 
  var skillopc1 = {
    horTitle:'HTML 5',
    colorRange:true,
    counterStep:1,
    milestones:true,
    horBarHeight:27, //Set the height bar in PX
    Default: true, 
    animTime:5000 // duration of the effect, in milliseconds
  }  
 $('#skillopc3').barIndicator(skillopc1);

/*----------Sckill OPC 4 --------*/ 
  var skillopc1 = {
    horTitle:'jQuery',
    colorRange:true,
    counterStep:1,
    milestones:true,
    horBarHeight:27, //Set the height bar in PX 
    Default: true,
    animTime:5000 // duration of the effect, in milliseconds
  }  
 $('#skillopc4').barIndicator(skillopc1);

/*----------Sckill OPC 5 --------*/ 
  var skillopc1 = {
    horTitle:'Bootstrap',
    colorRange:true,
    counterStep:1,
    milestones:true,
    horBarHeight:27, //Set the height bar in PX
    Default: true,
    animTime:5000 // duration of the effect, in milliseconds
  }  
 $('#skillopc5').barIndicator(skillopc1); 
  
/*----------Sckill OPC 6 --------*/ //Add new Sckill option
  /*var skillopc1 = {
    horTitle:'Sclill 6',
    colorRange:true,
    counterStep:1,
    milestones:true,
    horBarHeight:27, //Set the height bar in PX
    Default: true,
    animTime:5000 // duration of the effect, in milliseconds
  }  
 $('#skillopc6').barIndicator(skillopc1); */

});
