
$(document).ready(function () {

    var timeoutId = 0;

    $('input').on('touchstart', function(event) {

        var imgElement = this;

        timeoutId = setTimeout(function() {           

            $(imgElement).one('click', function(event) {
                event.preventDefault();
            });

            /* Show message ... */

        }, 1000);

    }).on('touchend touchcancel', function(event) {                                
        clearTimeout(timeoutId);
    });
    var timeoutId2 = 0;

    $('textarea').on('touchstart', function(event) {

        var imgElement = this;

        timeoutId2 = setTimeout(function() {           

            $(imgElement).one('click', function(event) {
                event.preventDefault();
            });

            /* Show message ... */

        }, 1000);

    }).on('touchend touchcancel', function(event) {                                
        clearTimeout(timeoutId2);
    });
    $('.contact-page').css('-webkit-overflow-scrolling','touch');
    $('.about-page').css('-webkit-overflow-scrolling','touch');
    $('.newsblog_content_wrapper').css('-webkit-overflow-scrolling','touch');
var domElem = $(".about_spacer").css('width','100%');
var waypoint = new Waypoint({
  
  element: $(".about_spacer").get(0),
  handler: function(direction) {
     // alert("test");
    if (direction == 'down') {
            $('.about_heropic').css('transition','transform 2000ms ease 0s');
            $('.about_heropic').css('transform','scale(1.04)');
            $('.about_hero_text_outer_wrapper').css('transition','500ms ease 0s');
            $('.about_hero_text_outer_wrapper').css('transform','translateX(0px) translateY(100px)');
            $('.about_hero_text_outer_wrapper').css('opacity','0');
    }
    else {
            $('.about_heropic').css('transition','transform 2000ms ease 0s');
            $('.about_heropic').css('transform','scale(1)');
            $('.about_hero_text_outer_wrapper').css('transition','500ms ease 0s');
            $('.about_hero_text_outer_wrapper').css('transform','translateX(0px) translateY(0px)');
            $('.about_hero_text_outer_wrapper').css('opacity','1');
    } 
    
    
  },
  context: $(".about_centralarea").get(0),
  offset: 'bottom-in-view'
});

var domElem2 = $(".about_description_text").css('transform','translateX(-100px) translateY(0px)');
var domElem2 = $(".about_description_text").css('opacity','0');
var domElem3 = $(".about_description_subline").css('transform','translateX(100px) translateY(0px)');
var domElem3 = $(".about_description_subline").css('opacity','0');
var waypoint2 = new Waypoint({
  
  element: $(".about_description_text").get(0),
  handler: function(direction) {
     // alert("test");
    if (direction == 'down') {
            $('.about_description_text').css('transition','500ms ease 0s');
            $('.about_description_text').css('transform','translateX(0px) translateY(0px)');
            $('.about_description_text').css('opacity','1');
            
            $('.about_description_subline').css('transition','500ms ease 0s');
            $('.about_description_subline').css('transform','translateX(0px) translateY(0px)');
            $('.about_description_subline').css('opacity','1');
    }
    else {
        $('.about_description_text').css('transition','500ms ease 0s');
        $('.about_description_text').css('transform','translateX(-100px) translateY(0px)');
        $('.about_description_text').css('opacity','0');
        
        $('.about_description_subline').css('transition','500ms ease 0s');
        $('.about_description_subline').css('transform','translateX(100px) translateY(0px)');
        $('.about_description_subline').css('opacity','0');
    } 
    
    
  },
  context: $(".about_centralarea").get(0),
  offset: '80%'
});

var domElem4 = $(".about_ref_headline").css('display','block');
var domElem5 = $('.about_ref_box_wrapper').css('opacity','0');
var domElem5 = $('.about_ref_box_wrapper').css('transform','translateX(0px) translateY(100px)');
var domElem6 = $('.about_ref_contact_box').css('opacity','0');
var domElem6 = $('.about_ref_contact_box').css('transform','translateX(0px) translateY(100px)');
var waypoint3 = new Waypoint({
  
  element: $(".about_ref_headline").get(0),
  handler: function(direction) {
     // alert("test");
    if (direction == 'down') {
        
        //row: w-row about_ref_box_cols
        //item: about_ref_box_wrapper
        var len1 = $('.about_ref_box_cols').length;
        $('.about_ref_box_cols').each(function(i) {
            var elemsInRow = $(this).find('.about_ref_box_wrapper');
            var len2 = $('.about_ref_box_cols').find('.about_ref_box_wrapper').length;
            $('.about_ref_box_cols').find('.about_ref_box_wrapper').each(function(j) {
                $(this).clearQueue().delay(400*i+100*j).queue(function(){
                    $(this).css('transition','500ms ease 0s');
                    $(this).css('transform','translateX(0px) translateY(0px)');
                    $(this).css('opacity','1');
                });
                if(j == len2 - 1){
                    $('.about_ref_contact_box').clearQueue().delay(400*i+100*(j+1)).queue(function(){
                        $('.about_ref_contact_box').css('transition','500ms ease 0s');
                        $('.about_ref_contact_box').css('transform','translateX(0px) translateY(0px)');
                        $('.about_ref_contact_box').css('opacity','1');
                    });
                }
                
            });
        });
    }
    else {
        var len1 = $('.about_ref_box_cols').length;
        $('.about_ref_box_cols').each(function(i) {
            var elemsInRow = $(this).find('.about_ref_box_wrapper');
            var len2 = $('.about_ref_box_cols').find('.about_ref_box_wrapper').length;
            $('.about_ref_box_cols').find('.about_ref_box_wrapper').each(function(j) {
                $(this).clearQueue().delay(10*i+5*j).queue(function(){
                    $(this).css('transition','500ms ease 0s');
                    $(this).css('transform','translateX(0px) translateY(100px)');
                    $(this).css('opacity','0');
                });
                if(j == len2 - 1){
                    $('.about_ref_contact_box').clearQueue().delay(10*i+5*(j+1)).queue(function(){
                        $('.about_ref_contact_box').css('transition','500ms ease 0s');
                        $('.about_ref_contact_box').css('transform','translateX(0px) translateY(100px)');
                        $('.about_ref_contact_box').css('opacity','0');
                    });
                }
                
            });
        });
        
    } 
  },
  context: $(".about_centralarea").get(0),
  offset: '80%'
});

 
    
    var js = document.createElement("script");

        js.type = "text/javascript";
        js.src = 'http://apps2go.at/kunden/spatzek/webflow/parallax.js';

        document.body.appendChild(js);
    

});
X
Validation failed. Please retry or wait till
W3C allows validation again