<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->

	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="css/common.css" type="text/css" />

    <link rel="stylesheet" href="css/header.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<!-- <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet"> -->


	<!-- Document Title
	============================================= -->
	<title>Travel Blog</title>
	<link>

		
	</script>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->

		<header >
            <div id="header-block">
                <div id="main-logo">
                   <img id="img-earth"src="images/earth.svg">
                    <p>Long-Travel</p> 
                </div>
                
            </div>

		<header id="header-block">
			
		</header><!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section>
			<img src="images/countries.svg">

		</section>

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">


				<article id="our_services">
					<div class="container clearfix">
					
					
					
					<?php
                    $folders = array_slice(scandir('Travels/'), 2);
                    rsort($folders);
                    foreach($folders as $folder) {
                        if ( file_exists(  './Travels/' . $folder . '/article header.html' ))
                            echo './Travels/' . $folder . '/article header.html' ;
                    }
                	?>
					
					
					
					</div>
                </article>    

				<!-- Copyrights
			============================================= -->
				<footer id="footer">
					
				</footer><!-- #footer end -->



			</div>
		</section><!-- #content end -->




	</div><!-- #wrapper end -->

	

	<!-- JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>


</body>

</html>