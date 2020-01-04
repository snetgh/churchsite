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
		<link rel="stylesheet" href="style.css">

		<link rel="stylesheet" href="bower/bootstrap/css/bootstrap.min.css">

		<link rel="stylesheet" href="bower/loader/css/fakeLoader.css">

		<link rel="stylesheet" href="fonts/font-awesome.min.css"  type="text/css">
		
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

  <!--                                                                                                                      -->
  <!-- #################################################################################################################### -->


  <!-- #################################################################################################################### -->
  <!-- transit.js animation engine - Optionnal                                                                              -->
  <!-- This plugin is used alternatively for all animations (hover effects et image display animations)                     -->
  <!-- warning: not compatible with IE9-                                                                                    -->
  <!--                                                                                                                      -->
  <!--
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.transit/0.9.9/jquery.transit.min.js">
  </script>                                 
  -->
  <!-- #################################################################################################################### -->

  
  <!-- #################################################################################################################### -->
  <!-- fancyBox - Optionnal                                                                                                 -->
  <!--                                                                                                                      -->
  <!-- <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" /> -->
  <!-- <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js?v=2.1.5"></script>  -->
  <!-- #################################################################################################################### -->


  <!-- #################################################################################################################### -->
  <!-- velocity animation engine - optionnal - JUST FOR TEST PURPOSES / PLEASE DO NOT USE!!!                                -->
  <!--                                                                                                                      -->
  <!-- <script type="text/javascript" src="third.party/velocity/jquery.velocity.min.js"></script>                           -->
    <!-- <script type="text/javascript" src="http://julian.com/research/velocity/build/jquery.velocity.min.js"></script>      -->
  <!-- #################################################################################################################### -->

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

	</head>


	<body>

		<div class="fakeloader"></div>

		<div class="site-content">
			<div class="site-header header-collapsed">
				<div class="container">
					<div class="header-bar">
						<a href="index.php" class="branding">
							<img src="images/logo.png" alt="" class="logo">
							<h1 class="site-title">Bible Believers Fellowship</h1>
						</a>

						<!-- Default snippet for navigation -->
						<div class="main-navigation">
							<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
							<ul class="menu">
								<li class="menu-item current-menu-item"><a href="#about">About Us</a></li>
								<li class="menu-item"><a href="#pastors">Pastor</a></li>
								<li class="menu-item"><a href="#events">Events</a></li>
								<li class="menu-item"><a href="#seremons">Sermons</a></li>
								<li class="menu-item"><a href="#families">Gallery</a></li>
								<li class="menu-item"><a href="#contact">Contact</a></li>
								<li class="menu-item"><a href="chat_login.php">Forum</a></li>
							</ul> <!-- .menu -->
						</div> <!-- .main-navigation -->

						<div class="mobile-navigation"></div>
						
					</div>
				</div>
			</div> <!-- .site-header -->

			<div class="hero">
				<ul class="slides">
					<li data-bg-image="special_images/21.jpg">
						<div class="container">
							<div class="slide-content">
								<h1 class="slide-title">Welcome To Bible Believers Fellowship</h1>
								<small class="date">Nungua</small>
								<p>Where the Gospel is preached and the word is taught, A place where children and youth get nurtured to grow in the faith and come to maturity in Christ.</p>
								
							</div>
						</div>
					</li>

					<li data-bg-image="special_images/55.jpg">
						<div class="container">
							<div class="slide-content">
								<h1 class="slide-title">Bible Believers Fellowship</h1>
								<small class="date">Nungua</small>
								<p>Where the Gospel is preached and the word is taught, A place where love is presented, hurt are healed and joys shared.</p>
								<br><br>
								
							</div>
						</div>
					</li>
				</ul>
			</div>

			<main class="main-content">
				<div id="about" class="fullwidth-block">
					<div class="container">
						<div class="row">

							<div class="col-md-12 col-xs-12 text-justify">

								

								<h2 class="section-title">Our History</h2>

								<h3>

								The Bible Believers Fellowship, Nungua is a local fellowship planted by Tema Ministry.
								The move to have this fellowship located at Nungua, a suburb of Accra (about 15 km Tema BBF), became necessary as the number of brethren commuting from Osu, La, Teshie, Nungua and Lashibi to Tema increased and there was the need to ease the stress some brethren go through when going for fellowship. <br><br>
								This situation sometimes prevented some brethren from attending evening prayer meetings. There was therefore a decision to have a local fellowship at Nungua which will absorb these brethren.<br><br>
								The first point of start was in a Sister’s House where brethren met to have evening prayers. Later, a more spacious venue was found at Royal Height Academy behind Teilot Coldstore where the church officially began her operations in the afternoon of 13th August, 1995. <br><br>
								During the first few years in Nungua, the membership rose to about 80. This period also saw aggressive soul winning activities (witnessing, distribution of tracts, dawn broadcasting etc.) The Spitex church (God’s Elect Church) and a number of fellowships came up as a result.<br><br>
								On the 1st of May 2011, the church moved to their permanent place at Nungua barrier near JW watch tower on the Nungua-Tema beach road. <br><br>
								The BBF-Nungua has remained resolute to the visions of the ministry at Tema BBF; thus making the BIBLE our ABSOLUTE; practicing practical Christianity and preparing ourselves for the soon coming of our LORD JESUS CHRIST.<br><br>
								To God be the Glory.

							</h3>

							</div>
							
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- #about -->

				<div id="pastors" class="fullwidth-block" data-bg-color="#4a3173">
					<div class="container">
						<h2 class="section-title">Meet our pastor</h2>
						<p class="section-intro">In this section, we provide you with information about our Pastor. </p>

						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="pastor panel">
									<img src="special_images/27.jpg" class="img-responsive">
									<br><br>
								</div>
							</div>

							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="pastor panel">
									<h3><p style="color: #aea1c3;" class="text-left text-justify"><span style="padding-bottom: 10px"><strong style="color: #ecb540">Pastor ....... </strong>is a man who had a divine call into the Ministry
									in 1957 as a teacher, how this end-time message must be rightfully 
									divided according to the scriptures.<br> And has since been obedient to that 
									call, as a teacher in the Five - Fold Ministry both Locally and Internationally.
									<br>
									Out of his ministry came other ministries and local churches.
									<br>
									Currently, he oversees other assemblies with his office at Tema BBF.


									<br><br>

									<span>Contact <img src="images/icon-phone.png" alt="" class="icon"> (+233) 24000000000</span>


								</span>
								</p>


								</h3>


									<br><br>
								</div>
							</div>
							
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- #pastors -->

				<div id="events" class="fullwidth-block">
					<div class="container">
						<h2 class="section-title">Upcoming events</h2>

						<div class="row">

							<?php

							$counter = 1;

							$get_list_of_events_query = "SELECT * FROM `tbl_upcoming_events` ORDER BY id DESC";
							$get_list_of_events = mysqli_query($my_connection_string,$get_list_of_events_query);
							if($get_list_of_events){

								while($get_event_details = mysqli_fetch_array($get_list_of_events)){

								$event_title = $get_event_details["event_title"];
								$event_image_path = $get_event_details["image_location"];
								$event_date = $get_event_details["event_date"];
								$event_location = $get_event_details["event_location"];
								$event_description = $get_event_details["event_description"];

								if($counter <= 4){


								echo "  

								<div class='col-md-3 col-sm-6'>

								<div class='event' >
									<img src='$event_image_path' alt='' class='event-image'>

									<h3 class='event-title'><a href='#''>".$event_title."</a></h3>
									<div class='event-meta'><span class='date'><i class='fa fa-calendar'></i>".$event_date."</span><span class='location'><i class='fa fa-map-marker'></i>".$event_location."</span></div>
									<div class='show_more_text_div".$counter."'><p>".$event_description."</p></div>
									<button class='button' id='readmore".$counter."'>Get more information</button>
								</div>
							</div>

							    ";
							$counter++;
							}
						}
						}

						?>
							
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- #events -->

				<div id="seremons" class="fullwidth-block" data-bg-color="#4a3173">
					<div class="container">
						<div class="row">
							<div class="col-md-5">
								<h3 class="section-title">Upcoming sermons</h3>
								<ul class="seremon-list">

								<?php

								$counter = 1;

								$get_list_of_sermons_query = "SELECT * FROM `tbl_upcoming_sermons` ORDER BY id DESC";
								$get_list_of_sermons = mysqli_query($my_connection_string,$get_list_of_sermons_query);
								if($get_list_of_sermons){

									while($get_sermon_details = mysqli_fetch_array($get_list_of_sermons)){

									$sermon_title = $get_sermon_details["upcoming_sermon_title"];
									$sermon_time = $get_sermon_details["sermon_time"];
									$sermon_date = $get_sermon_details["upcoming_sermon_date"];
									$sermon_location = $get_sermon_details["upcoming_sermon_location"];
									$sermon_description = $get_sermon_details["sermon_description"];
									$sermon_pastor = $get_sermon_details["sermon_pastor"];

									if($counter <= 3){
									

									echo "
										<li>
										<h3 class='seremon-title'><a href='#'>".$sermon_title."</a></h3>
										<p>".$sermon_description."</p>
										<div class='seremon-meta'>
											<span><i class='fa fa-calendar'></i> <strong>Date:</strong>".$sermon_date."</span>
											<span><i class='fa fa-user'></i> <strong>Pastor:</strong>".$sermon_pastor."</span>
											<span><i class='fa fa-clock-o'></i> <strong>Time:</strong>".$sermon_time."</span>
										</div>
									</li>
									";
								$counter++;
								}
							}
							}

							?>
									

								</ul>

							
							</div>
							<div class="col-md-5 col-md-offset-2">
								<h3 class="section-title">Latest sermons</h3>
								<ul class="seremon-list">

									<?php

										$counter = 1;

										$get_list_of_sermons_query = "SELECT * FROM `tbl_sermon_uploads` ORDER BY id DESC";
										$get_list_of_sermons = mysqli_query($my_connection_string,$get_list_of_sermons_query);
										if($get_list_of_sermons){

											while($get_sermons_details = mysqli_fetch_array($get_list_of_sermons)){

											$sermon_title = $get_sermons_details["sermon_title"];
											$sermon_date = $get_sermons_details["sermon_date"];
											$sermon_pastor = $get_sermons_details["sermon_pastor"];
											$sermon_file_path = $get_sermons_details["file_path"];

											if($counter <= 3){
											

											echo "<li>
										<h3 class='seremon-title'><a href='#'>".$sermon_title."</a></h3>
										<div class='seremon-meta'>
											<span><i class='fa fa-calendar'></i> <strong>Date:</strong> ".$sermon_date."</span>
											<span><i class='fa fa-user'></i> <strong>Pastor:</strong> ".$sermon_pastor."</span>
										</div>
										<a href='lets_sing.php?my_file_path=".$sermon_file_path."' target='_blank' class='button secondary'><img src='images/icon-headset.png' alt='' class='icon'> Listen Online</a>
										<a href='download.php?my_file_path=".$sermon_file_path."' class='button secondary'><img src='images/icon-film.png' alt=''> Download Audio</a>
									</li> ";
										$counter++;
										}
									}
									}

								?>

									
									
								</ul>

							</div>
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- #seremons -->

				<div id="families" class="fullwidth-block">
					<div class="container">
						<h2 class="section-title">GALLERY</h2>
						<p class="section-intro">Get the list of all uploaded pictures of the church.</p>

						<div class="family-list">
							

							<div id="nanoGallery2">

                         <?php

                         	$counter = 1;
                
                             $get_list_of_pictures_query = "SELECT * FROM `tbl_my_pictures` ORDER BY id DESC";
                             $get_list_of_pictures = mysqli_query($my_connection_string,$get_list_of_pictures_query);
                             if($get_list_of_pictures){

                             while($get_picture_details = mysqli_fetch_array($get_list_of_pictures)){

                                $picture_id = $get_picture_details["id"];
                                $picture_filename = $get_picture_details["file_name"];
                                $picture_filepath = $get_picture_details["file_path"];
                                        
                                if($counter <= 12){

                                echo "
                                <a href='admin/admin-work/".$picture_filepath."' data-ngthumb='admin/admin-work/".$picture_filepath."' ".$picture_filename."</a>
                                
                                    ";
                                    $counter++;
                                  }
                                }
                            }

                            ?>

                            </div>

						</div>

						<!-- Ending of the div  -->

						<hr class="space">
						<div class="text-center">
							<a href="all_pictures.php" class="button">View all pictures</a>
						</div>
					</div> <!-- .container -->
				</div> <!-- #families -->

				<div id="contact" class="fullwidth-block" data-bg-color="#4a3173">
					<div class="container">
						<h2 class="section-title">Contact us</h2>
						<p class="section-intro">Do you need to request for a prayer, share a testimony or even visit us, just contact us via the following means.</p>

						<div class="contact-detail">
							<span><img src="images/icon-marker.png" alt="" class="icon">&nbsp; P.O.Box NG 597, Nungua-Accra, Ghana</span><br>
							<span>Pastor ........<img src="images/icon-phone.png" alt="" class="icon"> (+233) 2400000000 </span>
							<span>Elder ........<img src="images/icon-phone.png" alt="" class="icon"> (+233) 2700000000 </span>
							<span>Bro. .........<img src="images/icon-phone.png" alt="" class="icon"> (+233) 2000000000 </span><br>
							<span><img src="images/icon-envelope.png" alt="" class="icon">&nbsp; info@me.org,b@gmail.com</span>
						</div>

						<form class="contact-form">
							<div class="row">
								<div class="col-md-6">
									<div class="control"><input type="text" placeholder="Your name..."><img src="images/icon-user.png" alt="" class="icon"></div>
									<div class="control"><input type="text" placeholder="Email..."><img src="images/icon-email.png" alt="" class="icon"></div>
									<div class="control"><input type="text" placeholder="Website..."><img src="images/icon-globe.png" alt="" class="icon"></div>
								</div>
								<div class="col-md-6">
									<div class="control">
										<textarea name="" placeholder="Your message..."></textarea>
										<img src="images/icon-pen.png" alt="" class="icon">
									</div>
									<p class="text-right">
										<input type="submit" value="Send message">
									</p>
								</div>
							</div>
						</form>
					</div>
				</div>
			</main>
		</div>

		<br>

		<footer class="footer text-center">
			
			2018 &copy; This Web App Was Developed By Step Network

		</footer>

		<br>

		

		
		<script src="bower/bootstrap/js/bootstrap.min.js"></script>
		<script src="bower/loader/js/fakeLoader.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>

		<script>
           $(document).ready(function(){

           		$(".show_more_text_div1,.show_more_text_div2,.show_more_text_div3,.show_more_text_div4").hide();

                $(".fakeloader").fakeLoader({
                    timeToHide:3200,
                    bgColor:"#34495e",
                    spinner:"spinner3"
                });


           $(".button").click(function(){

           var my_id = $(this).attr("id");

           	switch(my_id){


           		case 'readmore1' :

           			$(".show_more_text_div1").fadeToggle("slow","linear");

           		break;

           		case 'readmore2' :

           			$(".show_more_text_div2").fadeToggle("slow","linear");

           		break;

           		case 'readmore3' :

           			$(".show_more_text_div3").fadeToggle("slow","linear");

           		break;

           		case 'readmore4' :

           			$(".show_more_text_div4").fadeToggle("slow","linear");

           		break;

           		default :

           		break;



           	}

           })

            });
        </script>


		
	</body>

</html>