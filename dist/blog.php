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
    <link rel="stylesheet" href="css/blog.css" type="text/css" />
    
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

        <header>
            <div id="header-block">
                <div id="main-logo">
                    <img id="img-earth" src="images/earth.svg">
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

                <?
                    $folder_name_GET = $_GET["id"] ; 
                    echo $cource_tab_GET ;
                    
                    $json = file_get_contents( 'Travels/' . $folder_name_GET . '/article.json');
                    $json_data = json_decode($json,true); 
                    
                    echo '<br>distance = ' . $json_data['distance']  ;  // distance
                    
                    echo '<br>duration = ' . $json_data['duration']  ;  // duration                 
                    echo '<br>map = ' . $json_data['map']  ;  // distance
                    echo '<br>name = ' . $json_data['name']  ;  // date                 
                    
                    echo '<br>country = ';								  // country
                    foreach($json_data['country'] as $result) {
                        echo $result . ' ';
                    }                   
                    
                    echo '<br>date = ' . $json_data['date']  ;  // date
                    if ( $json_data["dateend"] ){
                        $dateend = ' - ' . $json_data["dateend"] ;
                    }
                    else{
                        $dateend = '';
                    }
                    echo '<br>dateend = ' . $json_data['dateend']  ;  // date end
                    
                    
                    echo '<br><br><br>Article<br>' ;
                    foreach($json_data["articles"] as $result) {
                        echo '<br>date = ' . $json_data['date']  ; 
                        echo '<br>name = ' . $json_data['name']  ;  
                        echo '<br>foto = ' . $json_data['foto']  ; 

                        echo '<br>country = ';								  // country
                        foreach($json_data['country'] as $result) {
                            echo $result . ' ';
                        }               
                        
                    }
                    
                ?>



                </div>

            </section>

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