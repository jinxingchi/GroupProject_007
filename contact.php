<!DOCTYPE html>
<html lang="en">
<head>

    <?php
        include("commonhead.html");
    ?>

    <link rel="stylesheet" type="text/css" href="./static/css/contactstyle.css">
	<title>007-Contact Us</title>

    <script> 
        $(document).ready(function(){
            //hide onload
            $("#info1").hide();
            $("#info2").hide();
            $("#info3").hide();
            $("#info4").hide();
            $("#info5").hide();
            //mouseover--show
            $("#photo1").mouseover(function(){
                $("#info1").slideToggle("slow");
            });
            $("#photo2").mouseover(function(){
                $("#info2").slideToggle("slow");
            });
            $("#photo3").mouseover(function(){
                $("#info3").slideToggle("slow");
            });
            $("#photo4").mouseover(function(){
                $("#info4").slideToggle("slow");
            });
            $("#photo5").mouseover(function(){
                $("#info5").slideToggle("slow");
            });
            //mouseout--hide
            $("#photo1").mouseout(function(){
                $("#info1").slideToggle("slow");
            });
            $("#photo2").mouseout(function(){
                $("#info2").slideToggle("slow");
            });
            $("#photo3").mouseout(function(){
                $("#info3").slideToggle("slow");
            });
            $("#photo4").mouseout(function(){
                $("#info4").slideToggle("slow");
            });
            $("#photo5").mouseout(function(){
                $("#info5").slideToggle("slow");
            });
        });
    </script>
</head>

<body>

<!-- navigation bar -->

<?php
    include("nav.html");
?>

<!-- end of navigation bar -->

        <div class="center">
            <div class="people">
                <div class="member1">
                    <div class="photo" id="photo1">
                        <img src="./static/images/contact_ceo.jpg" alt="1">
                    </div>
                    <div class="info" id="info1">
                    James Bond<br>
                    CEO<br>
                    jamesbond@007.com
                    </div>
                </div>
                <div class="member2">
                    <div class="photo" id="photo2">
                        <img src="./static/images/contact_cto.jpg" alt="2">
                    </div>
                    <div class="info" id="info2">
                    Sean Connery<br>
                    CTO<br>
                    seanconnery@007.com
                    </div>
                </div>
                <div class="member3">
                    <div class="photo" id="photo3">
                        <img src="./static/images/contact_cfo.jpg" alt="3">
                    </div>
                    <div class="info" id="info3">
                    George Lazenby<br>
                    CFO<br>
                    georgelazenby@007.com
                    </div>
                </div>
                <div class="member4">
                    <div class="photo" id="photo4">
                        <img src="./static/images/contact_pm1.jpg" alt="4">
                    </div>
                    <div class="info" id="info4">
                    Roger Moore<br>
                    PM<br>
                    rogermoore@007.com
                    </div>
                </div>
                <div class="member5">
                    <div class="photo" id="photo5">
                        <img src="./static/images/contact_pm2.jpg" alt="5">
                    </div>
                    <div class="info" id="info5">
                    Timothy Dalton<br>
                    PM<br>
                    timothydalton@007.com
                    </div>
                </div>
            </div>
        </div>

<footer>
</footer>

</body>
</html>	