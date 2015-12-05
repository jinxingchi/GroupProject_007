jQuery(document).ready(function(){
    //about_menuitem
    function processAjaxData(response, urlPath, filename){
         //document.getElementById("content").innerHTML = response.html;
         document.title = response;
         window.history.pushState(filename,response, urlPath);
     }
    
    jQuery( ".projects_overview_icon" ).on( "click", function(e) {
        e.preventDefault();
        
     });
     //close...
     jQuery( ".projects_overview_close_icon" ).on( "click", function(e) {
        e.preventDefault();
        
     });
    jQuery( ".about_menuitem" ).on( "click", function(e) {
        e.preventDefault();
        processAjaxData('About','/home/about', 'about');
        $(".about_centralarea").animate({
              scrollTop:  0
         });
     });
     jQuery( ".projects_menuitem" ).on( "click", function(e) {
        e.preventDefault();
        processAjaxData('Projects','/home/projects', 'projects');
     });
     jQuery( ".newsblog_menuitem" ).on( "click", function(e) {
        e.preventDefault();
        processAjaxData('Newsblog','/home/newsblog', 'newsblog');
        $(".newsblog_content_wrapper").animate({
              scrollTop:  0
         });
        //newsblog_content_wrapper
     });
     jQuery( ".contact_menuitem" ).on( "click", function(e) {
        e.preventDefault();
        processAjaxData('Contact','/home/contact', 'contact');
     });
     
     jQuery( ".newsblog_homeitem" ).on( "click", function(e) {
        e.preventDefault();
        processAjaxData('Home','/home', 'home');
     });
     jQuery( ".contact_homeitem" ).on( "click", function(e) {
        e.preventDefault();
        processAjaxData('Home','/home', 'home');
     });
     jQuery( ".projects_homeitem" ).on( "click", function(e) {
        e.preventDefault();
        processAjaxData('Home','/home', 'home');
     });
     jQuery( ".about_homeitem" ).on( "click", function(e) {
        e.preventDefault();
        processAjaxData('Home','/home', 'home');
     });
     
     
     jQuery("#email-form").submit(function(event) {

        var url = "http://mailsend.danielspatzek.com.dedi3670.your-server.de/ajaxSaveData.php"; // the script where you handle the form input.

        $.ajax({
               type: "POST",
               url: url,
               crossDomain: true,
               data: jQuery("#email-form").serialize() // serializes the form's elements.
             }).done(function(data) {

                // log data to the console so we can see
                jQuery("#email-form").hide();
                   jQuery('.w-form-done.success_container').show();

                // here we will handle errors and validation messages
            });
            event.preventDefault();
        return false; // avoid to execute the actual submit of the form.
    });
     
});

        var currentElementNews = 0;
        function isCheckLeft(){
            if(currentElementNews == 0){
                return false;
            }
                    var heightRight = jQuery('.newsblog_content_right').outerHeight( true );
                    var heightLeft = jQuery('.newsblog_content_left').outerHeight( true );
                    if(heightRight > heightLeft){
                        return true;
                    }else{
                        return false;
                    }
            //return false;
            //var heightRight = jQuery('.newsblog_content_right').height();
            //var heightLeft = jQuery('.newsblog_content_left').height();
            
        }
        function buildNewsItem(ID,CategoryName, ArticleDate, Title, Text, link, Image,isLeft){
            var RightLeft = '';
            var RightLeft2 = '';
            var RightLeft3 = '';
            if(isLeft == 0){
                RightLeft = 'right';
                RightLeft2 = '';
                RightLeft3 = ' right';
            }else{
                RightLeft = 'left';
                RightLeft2 = ' left';
                RightLeft3 = '';
            }
            var returnString = "";
            if(currentElementNews == 1){
                returnString += "<a class='w-clearfix w-inline-block newsblog_"+RightLeft+"_item first_entry' ";
            }else{
                returnString += "<a class='w-clearfix w-inline-block newsblog_"+RightLeft+"_item' ";
            }
            returnString += " id='newsblogITEM"+ID+"' ";
            returnString += " href='"+link+"' ";
            returnString += " data-ix='newsblog-outline-"+RightLeft+"'> ";
            returnString += " <div class='outline_top_newsblog_"+RightLeft+"'> </div>";
            if(isLeft == 0){
                returnString += " <div class='outline_right_newsblog_"+RightLeft+"'> </div>";
            }else{
                returnString += " <div class='outline_left_newsblog_"+RightLeft+"'> </div>";
            
            }
            returnString += " <div class='outline_bottom_newsblog_"+RightLeft+"'> </div>";
            returnString += " <div class='miniline_newsblog"+RightLeft2+"'> </div>";

            if(isLeft == 0){
                returnString += " <div class='newsblog_ball "+RightLeft+"'> </div>";
            }

            returnString += " <div class='newsblog_sort_date_wrapper "+RightLeft+"'> ";
            returnString += " <div class='item_sort_date news_text'>"+CategoryName+"</div>";
            returnString += " <div class='item_sort_date spacer'>|</div>";
            returnString += " <div class='item_sort_date date_text left'>"+ArticleDate+"</div>";
            returnString += "</div>";
            if(isLeft == 1){
                returnString += " <div class='newsblog_ball "+RightLeft+"'> </div>";
            }
            if(Image != ""){
                returnString += " <img class='newsblog_item_image "+RightLeft3+"' src='"+Image+"' width='1000' alt='"+Title+"'>";
            }
            returnString += "<h2 class='newsblog_item_headline "+RightLeft3+"'>"+Title+"</h2>";
            returnString += "<p class='newsblog_item_text "+RightLeft+"'>"+Text+"</p>";
            returnString += "</a>";

            return returnString;
        }
        function newsAdd(ID,CategoryName, ArticleDate, Title, Text,link, Image){
            var tempString = "";
            var allLeft = false;
            var mq = window.matchMedia( "(max-width: 991px)" );
            if (mq.matches) {
                    allLeft = true;
            }
            
            if(allLeft || isCheckLeft()){
                tempString = buildNewsItem(ID,CategoryName, ArticleDate, Title, Text,link, Image,1);
                jQuery(tempString).appendTo('.newsblog_content_left');
                //jQuery('.newsblog_content_left').append(tempString);
            }else{
                tempString = buildNewsItem(ID,CategoryName, ArticleDate, Title, Text, link, Image,0);
                jQuery(tempString).appendTo('.newsblog_content_right');
                //jQuery('.newsblog_content_right').append(tempString);
            }

            /**var text = jQuery('#newsblogITEM'+ID+' .item_sort_date news_text').html();
            jQuery('#newsblogITEM'+ID+' .item_sort_date news_text').html(text.text());
            var headline = jQuery('#newsblogITEM'+ID+' .newsblog_item_headline').html();
            jQuery('#newsblogITEM'+ID+' .newsblog_item_headline').html(headline.text());*/
            currentElementNews++;
        }
function addResizeEvent(func) {
    var oldResize = window.onresize;
    window.onresize = function () {
        func();
        if (typeof oldResize === 'function') {
            oldResize();
        }
    };
}
