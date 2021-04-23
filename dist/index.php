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
						<table id = "table_coutries">
						<tr>
							<th>Country</th>
							<th>Name</th>
							<th>Distance</th>
							<th>Date</th>
							<th>Duration</th>
							<th>Folder</th> <!-- just for testing -->
						</tr>
					
					<?php
                    $folders = array_slice(scandir('./Travels'), 2);
                    rsort($folders);
                    foreach($folders as $folder) {
                        
						echo  '<tr>' ;
						$json = file_get_contents( 'Travels/' . $folder . '/article.json');
						$json_data = json_decode($json,true);

						//  ----------   line data ------------
						echo '<a href="https://www.w3schools.com">' ;
						echo '<th>';								  // country
						foreach($json_data['country'] as $result) {
							echo $result . ' ';
						}
						echo '</th>';

						


						echo '<th>' . $json_data['name'] . '</th>' ;  // name
						
						echo '<th>' . $json_data['distance'] . '</th>' ;  // distance
						
						echo '<th>' . $json_data['date'] . '</th>' ;  // date
						
						echo '<th>' . $json_data['duration'] . '</th>' ;  // duration
						
						echo '<th>' . $folder . '</th>' ; // folder

						
						//  ----------   line data END ------------
						echo '</a>';
						echo  '</tr>' ;
                    }
                	?>
					
					
						</table>
					
					
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