<!DOCTYPE html>
<html lang="en">
<head>

    <?php
        include("commonhead.html");
    ?>

    <link rel="stylesheet" type="text/css" href="./static/css/fakeLoader.css">
	<title>007</title>
</head>

<body>

    <div id="fakeLoader"></div>
    <script src="static/js/fakeLoader.min.js"></script>

    <script type="text/javascript">
      $("#fakeLoader").fakeLoader({
        timeToHide: 4500,
        imagePath:"static/images/loading.gif",
        bgColor:"#000000"
      });
    </script>

<!-- navigation bar -->

<?php
    include("nav.html");
?>

<!-- end of navigation bar -->

   <div class="w-section home-page">
        <div class="home_centralarea" data-ix="home-darkfield" style="opacity: 1; transition: opacity 500ms;">
            <div class="home_parallaxpic_wrapper">
                <div class="home_parallaxpic" data-ix="home-parallaxpic" style="opacity: 0.4; transition: opacity 1000ms;">
                    <div class="tilt">
                        <div class="tilt__back" style="transform: perspective(1200px) translate3d(-1.85958px, -4.84651px, 0px) rotate3d(1, 0, 0, -4.84651deg) rotate3d(0, 1, 0, -1.85958deg) rotate3d(0, 0, 1, 0deg); background-image: url("static/images/bg_007.jpg");"></div>
                        <div class="tilt__front" style="opacity: 0.5; transform: perspective(1200px) translate3d(-0.464895px, -1.21163px, 0px) rotate3d(1, 0, 0, -1.21163deg) rotate3d(0, 1, 0, -0.464895deg) rotate3d(0, 0, 1, 0deg); background-image: url("static/images/bg_007.jpg");"></div>
                        <div class="tilt__front" style="opacity: 0.5; transform: perspective(1200px) translate3d(-0.929791px, -2.42325px, 0px) rotate3d(1, 0, 0, -2.42325deg) rotate3d(0, 1, 0, -0.929791deg) rotate3d(0, 0, 1, 0deg); background-image: url("static/images/bg_007.jpg");"></div>
                        <div class="tilt__front" style="opacity: 0.5; transform: perspective(1200px) translate3d(-1.39469px, -3.63488px, 0px) rotate3d(1, 0, 0, -3.63488deg) rotate3d(0, 1, 0, -1.39469deg) rotate3d(0, 0, 1, 0deg); background-image: url("static/images/bg_007.jpg");"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<footer>
</footer>

</body>
</html>	