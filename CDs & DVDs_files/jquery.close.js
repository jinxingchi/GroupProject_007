jQuery.fn.close = function(options){
  var options = jQuery.extend({
    expiresTime: 1000 * 86400 * 1
  },options);
  return this.each(function(j) {
    
    thisBox = $(this);
    
    if (getCookie('cid_'+j) == 1){
      $(this).css('display','none');
    }else{
      $(this).append('<div class="closeBox"></div>');
      $('.closeBox', this).click(function(){
        thisBox.slideUp(300);
        expires = new Date(); // получаем текущую дату
        expires.setTime(expires.getTime() + options.expiresTime);
        setCookie('cid_'+j, '1', expires);
      })
    }
    
  });
};

function setCookie (name, value, expires, path, domain, secure) {
  document.cookie = name + "=" + escape(value) +
    ((expires) ? "; expires=" + expires : "") +
    ((path) ? "; path=" + path : "") +
    ((domain) ? "; domain=" + domain : "") +
    ((secure) ? "; secure" : "");
}

function getCookie(name) {
  var cookie = " " + document.cookie;
  var search = " " + name + "=";
  var setStr = null;
  var offset = 0;
  var end = 0;
  if (cookie.length > 0) {
    offset = cookie.indexOf(search);
    if (offset != -1) {
      offset += search.length;
      end = cookie.indexOf(";", offset)
      if (end == -1) {
        end = cookie.length;
      }
      setStr = unescape(cookie.substring(offset, end));
    }
  }
  return(setStr);
}