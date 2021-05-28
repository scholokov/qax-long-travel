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

    <!-- jQuery 1.8 or later, 33 KB -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Fotorama from CDNJS, 19 KB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>

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

            <!-- Content
		============================================= -->
            <section id="content">
                <div class="content-wrap">

                    <?
                    $folder_name_GET = $_GET["id"] ; 
                    $full_folder_name = 'Travels/' . $folder_name_GET;
                    $json = file_get_contents( 'Travels/' . $folder_name_GET . '/article.json');
                    $json_data = json_decode($json,true); 
                    
                    if ( $json_data["dateend"] ){
                        $dateend = ' - ' . $json_data["dateend"] ;
                    }
                    else{
                        $dateend = '';
                    }
                ?>


                    <div class="container">
                        <div id="top_text">
                            <h3>
                                <?echo $json_data['name']?>
                            </h3>
                            <div>
                                <?foreach($json_data['country'] as $result) { echo $result . ' '; }?>
                            </div>
                            <div>
                                <?echo $json_data['date'] . $dateend?>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl">
                        <!--<img src="images/map.svg" alt="map">-->
                        <iframe src="<?echo . $json_data['map']?>" max-width="1440px" width="100%"
                            max-height="500px" height="500px" style="border:0;" allowfullscreen=""
                            loading="lazy"></iframe>
                    </div>
                    <div class="container">
                        <div id="bottom_text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet, ultricies ullamcorper felis,
                            viverra in maecenas integer.
                            Amet habitant lectus pharetra sem ac quisque nunc ut etiam. Nulla nibh consectetur eget et,
                            laoreet mattis et.
                            Pellentesque sit cras eget vitae cras ut. Purus quis netus vulputate amet lectus bibendum.
                            Vel, congue aliquet ac amet mauris dignissim in. Orci lectus facilisis praesent diam odio
                            libero eu.
                            Lorem integer dolor amet enim adipiscing accumsan, odio. Augue aenean suscipit feugiat ut
                            ornare viverra lorem.
                        </div>
                    </div>


                    <?    
                        // other articles
                        // just legacy code :))))
                        foreach($json_data["articles"] as $json_key) {
                            echo '<div class="container">';
                                echo '<div id="top_text">';
                                    echo '<h3>' . $json_key['name'] . '</h3>';
                                        echo '<div>';
                                            foreach($json_key['country'] as $country) { 
                                                echo $country . ' ';}
                                        echo '</div>';
                                    echo '<div>';
                                        echo $json_key['date'] . $json_key['dateend'];
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';
                    
                    
                            echo '<div class="container-xxl">';
                            // <!--<img src="images/map.svg" alt="map">-->
                                echo '<iframe src="' . $json_key['map'] . '" max-width="1440px" width="100%"
                            max-height="500px" height="500px" style="border:0;" allowfullscreen=""
                            loading="lazy"></iframe>';
                            echo '</div>';
                        
                            echo '<div class="container">';
                                echo '<div id="bottom_text">';
                                    echo 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet, ultricies ullamcorper felis, viverra in maecenas integer. Amet habitant lectus pharetra sem ac quisque nunc ut etiam. Nulla nibh consectetur eget et,
                            laoreet mattis et. Pellentesque sit cras eget vitae cras ut. Purus quis netus vulputate amet lectus bibendum.
                            Vel, congue aliquet ac amet mauris dignissim in. Orci lectus facilisis praesent diam odio libero eu.
                            Lorem integer dolor amet enim adipiscing accumsan, odio. Augue aenean suscipit feugiat ut ornare viverra lorem.';
                                echo '</div>';
                            echo '</div>';
                            
                            
                            if ( $json_key["foto"] ){
                                echo '<div class="container">';
                                    echo    '<div class=photo-galery>' ;
                                        echo    '<div class="fotorama" data-nav="thumbs" data-allowfullscreen="native" data-keyboard="true" data-height="100%" data-width="100%" data-max-height="820">';
                                
                                        $files = scandir( $full_folder_name . '/images/' . $json_key["foto"] . '/' );
                                        echo $full_folder_name . '/images/' . $json_key["foto"] . '/' ;
                                        foreach($files as $file) {
                                            if ( $file != '.' AND $file != '..' )
                                                echo '<a src="' . $full_folder_name . '/images/' . $json_key["foto"] . '/' . $file . '"></a>' ;
                                        }
                                        echo '</div>';
                                    echo '</div>';
                                echo '</div>';
                            }
                            
                        };
                    ?>




                    <?
                        echo '<br>--------------------------------------------------------------';
                        echo '<br>------------------- Just for testing back side ---------------';
                        echo '<br>--------------------------------------------------------------';
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