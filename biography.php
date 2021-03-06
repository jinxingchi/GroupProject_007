<!DOCTYPE html>
<html lang="en">
<head>

    <?php
        include("commonhead.html");
    ?>

    <link rel="stylesheet" type="text/css" href="./static/css/biostyle.css">
    <script src="./static/js/jquery.hovercard.js" type="text/javascript"></script> 
    <title>007-Biography</title>

<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}

.image {
   position: relative;
}


h2{
   position: absolute;
   top: 500px;
   left: 0px;
   /*width: 50%;*/
   margin: 0 auto;
   /*width: 30px;*/
   height: 50px;
   text-align: left;
   font-family: 'Hvd fonts brandongrotesque', sans-serif;
   color: #3c3c3e;
   font-size: 16px;
   line-height: 24px;
   font-weight: 200;
}

label {
	width:100px;
	margin-bottom: 0px;
	margin-top: 50px;
}
.hc-details{
	height:500px;
}

</style>

</head>


	

	<!-- start of body -->

	<body id = "bio" class="single single-character_bio postid-3689 the-bonds" data-parent="the-bonds">
	<!-- copy from the home page for the nav bar -->
	<div class="w-section intro" data-ix="intro-bg" style="opacity: 0; display: none; transition: opacity 500ms;">
                <div class="w-clearfix intro_wrapper" data-ix="intro-slideup" style="opacity: 1; transform: translateX(-50%) translateY(-50%); transition: opacity 500ms, transform 500ms;">
                    <div class="intro_logo" data-ix="new-interaction"></div>
                    <div class="intro_mask" data-ix="intro-unmask" style="width: 0px;"></div>
                </div>
    </div>

<!-- navigation bar -->

<?php
    include("nav.html");
?>

<!-- end of navigation bar -->

	<div id="bg-cover"></div>
		<div id="container">	
			<div id="content">	
				<div id="inner-content" class="wrap clearfix">
					<div id="main" class="first clearfix" role="main">
						
						<article id="post-3689" class="clearfix post-3689 character_bio type-character_bio status-publish hentry" role="article" itemscope="" itemtype="http://schema.org/BlogPosting">

						
								<section class="entry-content full-width character-bios small-carousel" itemprop="articleBody">

										
								<div id="character-bios-container" style="perspective: 700px; transition: none;">
											<!-- <div class="bg"></div>  -->


<!-- start hover effect -->
								
										<div id="timeline" style="opacity: 1; transition: none;">
											<ul id="characters">
											<li class="timeline_item item_0" style="left: -80px; visibility: visible;" data-id="0"><img src="./static/images/bio_craig.png" alt="Daniel Craig" draggable="false"><div class="image_text"><h2><label id="demo-basic">Daniel Craig</label></h2></div></li>

											<li class="timeline_item item_1" style="left: 50px; visibility: visible;" data-id="1"><img src="./static/images/bio_brosnan.png" alt="Pierce Brosnan" draggable="false"><div class="image_text"><h2><label id="demo-basic2">Pierce Brosnan</label></h2></div>
															
											</li>
											 <li class="timeline_item item_2" style="left: 100px; visibility: visible;" data-id="2"><img src="./static/images/bio_dalton.png" alt="Timothy Dalton" draggable="false"><div class="image_text"><h2 style = 'font-size:20px;'><label id="demo-basic3">Timothy Dalton</label></h2></div>
															
											</li>
											<li class="timeline_item item_3" style="left: -50px; visibility: visible;" data-id="3"><img src="./static/images/bio_moore.png" alt="Roger Moore" draggable="false"><div class="image_text"><h2><label id="demo-basic4">Roger Moore</label></h2></div>
															
											</li>
											<li class="timeline_item item_4" style="left: 300px; visibility: visible;" data-id="4"><img src="./static/images/bio_lazenby.png" alt="George Lazenby" draggable="false"><div class="image_text"><h2><label id="demo-basic5">George Lazenby</label></h2></div>
															
											</li>
											<li class="timeline_item item_5" style="left: -125px; visibility: visible;" data-id="5"><img  src="./static/images/bio_conner.png" alt="Sean Connery" draggable="false"><div class="image_text"><h2><label id="demo-basic6">Sean Connery</label></h2></div>
															
											</li>
											</ul>											
										</div>							
									</div>	
									<!-- <div class="nameOverlay" style="left: 193px; top: 80.5156px;">
										<div class="name">
											<h1 style="width: 247.2px;">Timothy Dalton</h1>
										</div>
									</div> -->
											<!-- <div id="bioImg_container"></div>
											<div id="character_content">
												  	<div class="bio-content">
													  	<div class="col-1"></div>
													  	<div class="col-2"></div>
													  	<div class="col-3"></div>
												  	</div>
											    	
											      <div id="close_btn" class="close"><img src=".static/images/btn_close.png" alt="close content"></div>
											    </div> -->
											  
											</section></article></div>						
										
					</div> 					
				</div> 
			</div> 
<!-- start of card content -->
<!-- daniel craig -->

<script type="text/javascript">
$(document).ready(
    function () {
    var hoverHTMLDemoBasic = "<p style='text-align:left;clear:top right;'>Daniel Craig, one of British theatre's most famous faces, who waited tables as a struggling teenage actor with the NYT, went on to star as 'James Bond' in Casino Royale (2006), Quantum of Solace (2008), Skyfall (2012) and Spectre (2015). More About <a href = 'https://en.wikipedia.org/wiki/Daniel_Craig'>him.</a></p>";


    $("#demo-basic").hovercard({
        detailsHTML: hoverHTMLDemoBasic,
        // detailsHTML: 'haha',
        width: 400,
        cardImgSrc: 'static/images/craig_hovercard.jpg'
    });
}
);
// end of daniel craig

// start of Pierce Brosnan
$(document).ready(
    function () {
    var hoverHTMLDemoBasic2 = "<p style='text-align:left;clear:top;'>In 1994, he became the fifth actor to portray secret agent James Bond in the Eon Productions film series, starring in four films from 1995 to 2002 (GoldenEye, Tomorrow Never Dies, The World Is Not Enough and Die Another Day). He lent his likeness for Bond in the video games James Bond 007: Nightfire and James Bond 007: Everything or Nothing, providing his voice too for the latter. More about <a href = 'https://en.wikipedia.org/wiki/Pierce_Brosnan'>him.</a></p>";

    $("#demo-basic2").hovercard({
        detailsHTML: hoverHTMLDemoBasic2,
        width: 400,
        cardImgSrc: 'static/images/brosnan_hovercard.jpg'
    });
}
);

// end of Pierce Brosnan

// start of Timothy Dalton
$(document).ready(
    function () {
    var hoverHTMLDemoBasic3 = "<p style='text-align:left;clear:top; font-size:23px;font family:font-family:Sans-serif !important;line-height:1.5em;'>Welsh actor Timothy Dalton took over the role from Roger Moore in 1987. He appeared in The Living Daylights (1987) and Licence to Kill (1989). Legal issues between the Bond producers and the studio over distribution rights resulted in the cancellation of a proposed third Dalton film scheduled for release in 1991[1] and put the series on a hiatus for several years. More about <a href = 'https://en.wikipedia.org/wiki/Timothy_Dalton'>him.</a></p>";
    	var DemoFactor3 = 3;

    $("#demo-basic3").hovercard({
        detailsHTML: hoverHTMLDemoBasic3,
        factor: DemoFactor3,
        width: 400,
        cardImgSrc: 'static/images/dalton_hovercard.jpg'
    });
}
);

// end of Timothy Dalton
// start of Roger Moore
$(document).ready(
    function () {
    var hoverHTMLDemoBasic4 = "<p style='text-align:left; clear:top;font-size:23px;font family:font-family:Sans-serif !important;line-height:1.5em;'>English actor Roger Moore took over the role from 1973 to 1985. To date he is the longest-serving James Bond actor, spanning twelve years in the role. He is also the oldest actor to play Bond; having begun the role at 45 and retiring from it at the age of 58. He appeared in Live and Let Die (1973), The Man with the Golden Gun (1974), The Spy Who Loved Me (1977), Moonraker (1979), For Your Eyes Only (1981), Octopussy (1983) and A View To A Kill (1985)</p>";
    	var DemoFactor4 = 4;

    $("#demo-basic4").hovercard({
        detailsHTML: hoverHTMLDemoBasic4,
        factor: DemoFactor4,
        // detailsHTML: 'haha',
        width: 400,
        cardImgSrc: 'static/images/moore_hovercard.jpg'
    });
}
);

// end of Roger Moore
// start of George Lazenby
$(document).ready(
    function () {
    var hoverHTMLDemoBasic5 = "<p style ='text-align:left;clear:top;font-size:30px;font family:font-family:Sans-serif !important;line-height:1.5em;'>George Lazenby's first serious acting role was as James Bond in the film On Her Majesty's Secret Service (1969). Lazenby is the second official actor to portray the British secret agent. It was rumoured that Lazenby had been 'difficult to work with' in this project. More about <a href = 'https://en.wikipedia.org/wiki/George_Lazenby'>him.</a></p>";
    	var DemoFactor5 = 5;

    $("#demo-basic5").hovercard({
        detailsHTML: hoverHTMLDemoBasic5,
        factor: DemoFactor5,
        // detailsHTML: 'haha',
        width: 400,
        cardImgSrc: 'static/images/lazenby_hovercard.jpg',
        openOnTop:false,
        autoAdjust:false
    });
}
);

// end of George Lazenby
// start of Sean Connery
$(document).ready(
    function () {
    var hoverHTMLDemoBasic6 = "<p style ='text-align:left;clear:top left;font-size:30px;font family:font-family:Sans-serif !important;line-height:1.5em;'>He was the first actor to perform the role on the big screen. He appeared in Dr. No (1962), From Russia with Love (1963), Goldfinger (1964), Thunderball (1965), You Only Live Twice (1967) and Diamonds Are Forever (1971).In 1983 he returned to the role for the last time in the unofficial James Bond film, Never Say Never Again. More about <a href = 'https://en.wikipedia.org/wiki/Sean_Connery'>him.</a></p>";
    var DemoFactor6 = 6;


    $("#demo-basic6").hovercard({
        detailsHTML: hoverHTMLDemoBasic6,
        factor: DemoFactor6,
        // detailsHTML: 'haha',
        width: 450,
        height: 550,
        cardImgSrc: 'static/images/connery_hovercard.jpg',
    });
}
);

// end of Sean Connery

</script>




</div>	
		


    <!--end of hovercard  -->


    
	

</body>


</html>