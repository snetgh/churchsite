<?php

	require_once 'database_connection/database_connection.php';

?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Bible Believers Fellowship</title>

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css" type="text/css">

		<link rel="stylesheet" href="bower/bootstrap/css/bootstrap.min.css" type="text/css">

				<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

  <!-- #################################################################################################################### -->
  <!-- nanoGALLERY CSS files                                                                                                -->
  <!-- only include the css file corresponding to the selected theme                                                        -->
  <!-- include 'nanogallery.css' if no theme is specified                                                                   -->
  <!--                                                                                                                      -->
    <!-- nanoGALLERY - default theme css file                                                                                 -->
    <link href="bower/image_plugin/css/nanogallery.css" rel="stylesheet" type="text/css">
    <!-- nanoGALLERY - css file for the theme 'clean'                                                                         -->
    <link href="bower/image_plugin/css/themes/clean/nanogallery_clean.css" rel="stylesheet" type="text/css">
    <!-- nanoGALLERY - css file for the theme 'light'                                                                         -->
    <link href="bower/image_plugin/css/themes/light/nanogallery_light.css" rel="stylesheet" type="text/css">
  <!-- #################################################################################################################### -->


   <!-- jQuery -->
    <script src="js/jquery-1.11.1.min.js"></script>

  <!-- #################################################################################################################### -->
    <!-- nanoGALLERY javascript                                                                                               -->
  <!--                                                                                                                      -->
    <script type="text/javascript" src="bower/image_plugin/dist/jquery.nanogallery.min.js"></script>

		
		



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

<![endif]-->

<script>
        $(document).ready(function () {

      // ##################################################################################################################
            // ##### Sample2 - inline elements / HREF #####
      // ##################################################################################################################
            jQuery("#nanoGallery2").nanoGallery({thumbnailWidth:160,thumbnailHeight:160,
                thumbnailHoverEffect:[{'name':'scaleLabelOverImage','duration':300},{'name':'borderLighter'}],              
                colorScheme:'clean',
        locationHash: false,
                thumbnailLabel:{display:true,position:'overImageOnTop', align:'center'},
        viewerDisplayLogo:true
            });
    
        });
    </script>

    <script type="text/javascript">
	$(document).ready(function(){
		$('.collapse_me').collapser({
			mode: 'chars',
			truncate: 5
		});

	});
	    
	 </script>

  
    

	</head>


	<body>
		<div class="site-content">
			<div class="site-header header-collapsed">
				<div class="container">
					<div class="header-bar">
						<a href="index.php" class="branding">
							
							<h1 class="site-title">Bible Believers Fellowship</h1>
						</a>

						<div class="mobile-navigation"></div>
						
					</div>
				</div>
			</div> <!-- .site-header -->

			<br><br>
			
			<main class="main-content">
				<div id="about" class="fullwidth-block">
					<div class="container">
						<div class="row">

							<div class="col-md-12 col-xs-12">


								<div id="nanoGallery2">

                         <?php

                         	
                
                             $get_list_of_pictures_query = "SELECT * FROM `tbl_my_pictures` ORDER BY id DESC";
                             $get_list_of_pictures = mysqli_query($my_connection_string,$get_list_of_pictures_query);
                             if($get_list_of_pictures){

                             while($get_picture_details = mysqli_fetch_array($get_list_of_pictures)){

                                $picture_id = $get_picture_details["id"];
                                $picture_filename = $get_picture_details["file_name"];
                                $picture_filepath = $get_picture_details["file_path"];
                                        
                                

                                echo "
                                <a href='admin/admin-work/".$picture_filepath."' data-ngthumb='admin/admin-work/".$picture_filepath."' ".$picture_filename."</a>
                                
                                    ";
                                   
                                  
                                }
                            }

                            ?>

                            </div>

						

				</div>

		</div>

	</div>

</main>

</div>

		
		<script src="bower/bootstrap/js/bootstrap.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>