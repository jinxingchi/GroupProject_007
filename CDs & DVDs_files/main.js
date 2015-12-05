(function($) {
  update_hide = function(){
    if($('.updateButCart').is('div')) $('.updateButCart').hide();
    
    $('input[type=checkbox][name*=cart_delete]').each(function(){
      $(this).hide();
    })
    
    $('.cart_delete').show();
    
    qty_buttons();
  }
  
  $.fn.deleteProduct = function(){
    return this.each(function(){
      $(this).click(function(){
      //console.log(1);
        if($(this).prev().is('input[type=checkbox]')){
          $(this).prev().prop('checked',true);
          $(this).prev().attr('checked',true);
          $('form[name="cart_quantity"]').submit();
        }
      })
    })
  }
  
  $.ajaxSetup({
	beforeSend: function(){
		$('.shopping_cart').css('opacity','0.3').prepend('<div class="preloader"></div>');
		},
	complete: function(){
                $('.shopping_cart').css('opacity','');
		$('.preloader').remove();
		}
  });
  
function qty_buttons(){
  var disable = [];
  var box = [];
  var productButtonCell = [];
  var val = [];
  $('input[name="cart_quantity"]:not([type="hidden"]), input[name="cart_quantity[]"]:not([type="hidden"])').each(function(i){
    $(this).at = i;
    var val_p = $(this);
    if(!$(this).parent().hasClass('qty-buttons')){
      var j = i;
      if ($(this).attr('value') == 1) disable[i] = ' disable'
      else disable[i] = '';
	  if (typeof more_less == 'undefined' || (typeof more_less == 'boolean' && more_less))
      $(this)
        .wrap('<span class="qty-buttons" style="margin: '+$(this).css('margin')+'"></span>')
        .before('<span class="less'+disable[i]+'"></span>')        
        .css('margin', '0');
        //console.log(val_p.val(), val_p.data('max-qty'));
        if (val_p.val() == val_p.data('max-qty')){
            $(this).after('<span class="more disableM"></span>');
        }else{
            $(this).after('<span class="more"></span>');
        }
      box[i] = $(this).parent();
		
      $(this).change(function(){
      });

      $('.more', box[i]).click(function(){
        productButtonCell[j] = $(this).parents('.qty-buttons');
        val[i] = $('input', productButtonCell[j]).attr('value');
        if (val[i] < $(this).prev().data('max-qty')){
        val[i]++;
        }
        if (val[i] == $(this).prev().data('max-qty')){$(this).addClass('disableM');}
        var input = $('input', productButtonCell[j])
        input.attr('value', val[i]);
        if (val[i] > 1) $(this).siblings('.less').removeClass('disable');
        updateCart()
      });
      $('.less', box[i]).click(function(){
        productButtonCell[j] = $(this).parents('.qty-buttons');
        val[i] = $('input', productButtonCell[j]).attr('value');
        if (val[i] > 1) val[i]--;
        var input = $('input', productButtonCell[j])
        input.attr('value', val[i]);
        if (val[i] < 2) $(this).addClass('disable');
        updateCart()
      })
    }
  });
  $('.shopping_cart-page .update-button').hide()
} 

//function qty_buttons(){
//  var disable = [];
//  var box = [];
//  var productButtonCell = [];
//  var val = [];
//  $('input[name="cart_quantity"]:not([type="hidden"]), input[name="cart_quantity[]"]:not([type="hidden"])').each(function(i){
//    $(this).at = i;
//    if(!$(this).parent().hasClass('qty-buttons')){
//      var j = i;
//      if ($(this).attr('value') == 1) disable[i] = ' disable'
//      else disable[i] = '';
//	  if (typeof more_less == 'undefined' || (typeof more_less == 'boolean' && more_less))
//      $(this)
//        .wrap('<span class="qty-buttons" style="margin: '+$(this).css('margin')+'"></span>')
//        .before('<span class="less'+disable[i]+'"></span>')
//        .after('<span class="more"></span>')
//        .css('margin', '0');
//      box[i] = $(this).parent();
//		
//      $(this).change(function(){
//      });
//
//      $('.more', box[i]).click(function(){
//        productButtonCell[j] = $(this).parents('.qty-buttons');
//        val[i] = $('input', productButtonCell[j]).attr('value');
//        val[i]++;
//        var input = $('input', productButtonCell[j])
//        input.attr('value', val[i]);
//        if (val[i] > 1) $(this).siblings('.less').removeClass('disable');
//        updateCart()
//      });
//
//      $('.less', box[i]).click(function(){
//        productButtonCell[j] = $(this).parents('.qty-buttons');
//        val[i] = $('input', productButtonCell[j]).attr('value');
//        if (val[i] > 1) val[i]--;
//        var input = $('input', productButtonCell[j])
//        input.attr('value', val[i]);
//        if (val[i] < 2) $(this).addClass('disable');
//        updateCart()
//      })
//    }
//  });
//  $('.shopping_cart-page .update-button').hide()
//} 

  set_plugins_del = function(){   
 
    $('.cart_delete').deleteProduct();
  }
  
  updateCart = function(){
    //$('form[name="cart_quantity"]').submit();
   $.post(
     'shopping_cart.php?action=update_product&ajax=true&request=update_product',
     $('form[name="cart_quantity"]').serializeArray(),
     function(data){
       $('.pageContent').replaceWith(data.cart_content);
       $('.it_b_count').html(data.basket);
       $('.t_b_count').html(data.basket_total);
       qty_buttons();
       $('.cart_delete').deleteProduct();
     },
     'json'
   )

  }
  

  
})(jQuery);

jQuery(document).ready(function(){
 update_hide();
 set_plugins_del();

 
$('.slidTab h3').click(function(){
    $(this).toggleClass('open');
    $(this).next().slideToggle(100); 
   }) 

setTimeout(function(){$('.products-rows').inrow({
            item1:'.product-name', 
            item2:'.prices', 
            item3: '.img-holder',
            item4: '.row-item'
        })}, 200);
  
//  $(".shopping_cart .shop-t-menu-w").hover(function(){
//        $(".shopping_cart .header-nav > ul").toggle();
//        $(".shopping_cart .shop-t-menu-w").toggleClass( "bCatClose" );
//    });
  
//$(window).resize();
//var resize = true;
//  
//  $(window).on('resize', function(){
//        if (resize) {
//            resize = false;
//            setTimeout(function(){
//                $(window).trigger('window.resize');
//                resize = true
//            }, 200)
//        }
//    });
//
//    $(window).on('window.resize', function(){
//        $('.products-rows').inrow({
//            item1:'.product-name', 
//            item2:'.prices', 
//            item3: '.img-holder',
//            item4: '.row-item'
//        })        
//    });   

 setTimeout(function(){$('#new-category-products').inrow({item1:'.store-category-name', item2:'h3'})}, 300);
  // prod media carousel
  var imagesSlider = '.product-image-gallery';
  $(imagesSlider).jcarousel({
    animation: 200,
    wrap: 'circular'
  });

  $('.ctrl-next').click(function() {
    $(imagesSlider).jcarousel('scroll', '+=3');
  });
  $('.ctrl-prev').click(function() {
    $(imagesSlider).jcarousel('scroll', '-=3');
  });

  // toggle checkout password fields
  $('.form-group-createaccount :checkbox').change(function () {
    if ($(this).is(':checked')) {
      $('.form-group-password').show();
    } else {
      $('.form-group-password').hide();
    }
  }).change();

  $('.form-group-loginaccount :checkbox').change(function () {
    if ($(this).is(':checked')) {
      $('.form-group-login').show();
    } else {
      $('.form-group-login').hide();
    }
  }).change();

  // toggle checkout shipping fields
  $('#ship-as-bill-check').change(function () {
    if ($(this).is(':checked')) {
      $('.checkout-box-shipping').hide();
    } else {
      $('.checkout-box-shipping').show();
    }
  }).change();

  // copy shipping on field change
  $('.form-set-billing :input').change(function() {
    //console.log($('#one-page-checkout-form')[0]);
    copy_shipping(document.getElementById('ship-as-bill-check'), document.getElementById('one-page-checkout-form'));
  });


  //$('.productRow').inrow({item1:'.productDescriptionCell',item2:'.productNameCell',item3:'.productImageCell'});
  

  if($("#slider img").length>1){
    jQuery('#slider img').removeAttr('width');
    jQuery('#slider img').removeAttr('height');
    jQuery('#slider').nivoSlider({pauseTime:8000, controlNavAlt:true});
  }

  

  
  $('a.popup').click(function(){
    $('.popupBox').remove();
    $('body').append('<div class="popupBox"><div class="popupClose">&nbsp;</div><div class="contentTopRight"><div class="contentTopLeft">&nbsp;</div></div><div class="center_bg centerContent"><div class="popupContent"><div class="popupPreloader">&nbsp;</div></div></div><div class="contentBottomRight"><div class="contentBottomLeft">&nbsp;</div></div></div>');
    $('.popupClose').click(function(){
      $('.popupBox').remove();
    });
    ppLeft = ($('body').width()-$('.popupBox').width())/2;
    ppTop = $('body').scrollTop() + $('html').scrollTop() + 100;
    $('.popupBox').css({'left':ppLeft, 'top':ppTop});
    href = $(this).attr('href');
    jQuery.get(href, {popup: true}, function(data){
      $('.popupContent').html(data);
    });
    
    var moveBox = true;
    $('.popupBox').mousedown(function(e){
      dX = ppLeft - e.pageX;
      dY = ppTop - e.pageY;
      moveBox = true;
      $('body').mousemove(function(pos){
        if (moveBox == true){
          ppLeft = pos.pageX + dX;
          ppTop = pos.pageY + dY;
          $('.popupBox').css({'left':ppLeft, 'top':ppTop});
        }        
      });
    });
    $('.popupBox').mouseup(function(e){
      moveBox = false
    });
    return false;
  });
  $('.product-desc-wrapp').readmore();  
});


jQuery(document).ready(function(){
  jQuery('.login').each(function(){
    box_height = 0;
    jQuery(this).find('.logBox').each(function(){
    if (jQuery(this).height() > box_height){
        box_height = jQuery(this).height();
          }
      });
      jQuery(this).find('.logBox').css({'height':box_height+'px'})
   })
});


/* tabs listing mode switch */
function initTabs()
{
	var sets = document.getElementsByTagName("ul");
	for (var i = 0; i < sets.length; i++)
	{
		if (sets[i].className.indexOf("tabset") != -1)
		{
			var tabs = [];
			var links = sets[i].getElementsByTagName("a");
			for (var j = 0; j < links.length; j++)
			{
				if (links[j].className.indexOf("tab") != -1)
				{
					tabs.push(links[j]);
					links[j].tabs = tabs;
					var c = document.getElementById(links[j].href.substr(links[j].href.indexOf("#") + 1));
					if (c) if (links[j].className.indexOf("active") != -1) c.style.display = "block";
					else c.style.display = "none";
					links[j].onclick = function ()
					{
						var c = document.getElementById(this.href.substr(this.href.indexOf("#") + 1));
						if (c)
						{
							for (var i = 0; i < this.tabs.length; i++)
							{
								var tab = document.getElementById(this.tabs[i].href.substr(this.tabs[i].href.indexOf("#") + 1));
								if (tab)
								{
									tab.style.display = "none";
								}
								this.tabs[i].className = this.tabs[i].className.replace("active", "");
							}
							this.className += " active";
							c.style.display = "block";
							return false;
						}
					}
				}
			}
		}
	}
}
//if (window.addEventListener)
//	window.addEventListener("load", initTabs, false);
//else if (window.attachEvent && !window.opera)
//	window.attachEvent("onload", initTabs);



(function($){
  $(function(){


    var image_size = function(){
      $('.row-item .img-holder img').each(function(){
        var width_d = $(this).attr('width');
        var height_d = $(this).attr('height');
        var width_max = $(this).parents('.row-item').width();
        var height_max = 227;
        var width_n = 0;
        var height_n = 0;
        if (width_d > width_max && height_d > height_max){
          if (width_d / width_max > height_d / height_max){
            width_n = width_max;
            height_n = width_max * (height_d / width_n);
          }else{
            height_n = height_max;
            width_n = height_n * (width_n / height_d);
          }
          $(this).css({'width':width_n, 'height': height_n})
        }else if(width_d > width_max){
          width_n = width_max;
          height_n = width_n * (height_d / width_d);
          $(this).css({'width':width_n, 'height': height_n})
        }else if(height_d > height_max){
          height_n = height_max;
          width_n = height_n * (width_d / height_d);
          $(this).css({'width':width_n, 'height': height_n})
        }
        console.log(111);
      });
    };

    var resize = true;
    $(window).on('resize', function(){
      if (resize) {
        resize = false;
        setTimeout(function(){
          $(window).trigger('window.resize');
          resize = true
        }, 500)
      }
    });
    $(window).load(function(){
      $(window).trigger('window.resize');
    });

    $(window).on('window.resize', function(){
      $('.products-rows, .new-list').inrow({
        item1:'.product-name',
        item2:'.prices',
        item3: '.img-holder',
        item4: '.row-item'
      })
    });
    $(window).on('window.resize', image_size);


  })
})(jQuery)