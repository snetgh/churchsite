<?php

	$my_file_path = $_GET["my_file_path"];

	require_once 'database_connection/database_connection.php';
	
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Bible Believers Fellowship</title>

        <link rel="stylesheet" href="bower/bootstrap/css/bootstrap.min.css" type="text/css">

		<link rel="stylesheet" href="for_audio/css/styles.css" type="text/css">

		<script src="js/jquery-1.11.1.min.js"></script>
        <script src="bower/bootstrap/js/bootstrap.min.js"></script>
		<script src="for_audio/js/musicplayer-min.js"></script>
		
	</head>
	<body>


	<div class="example2">

		 

        <ul class='playlist'>

        	<!-- Get clicked track on top  -->

        <?php

        		$get_clicked_track_query = "SELECT * FROM `tbl_sermon_uploads` WHERE `file_path` = '$my_file_path' LIMIT 1";

        	    $run_clicked_track_query = mysqli_query($my_connection_string,$get_clicked_track_query);

    		 $get_clicked_track_details = mysqli_num_rows($run_clicked_track_query);

        if($get_clicked_track_details >= 1){

            $clicked_track_details = mysqli_fetch_array($run_clicked_track_query);
            $clicked_track_title = $clicked_track_details["sermon_title"];
            $clicked_track_pastor = $clicked_track_details["sermon_pastor"];

            echo "

            	<li data-cover='for_audio/images/my_cover.jpg' data-artist='".$clicked_track_pastor."'>
					<a href='".$my_file_path."'>".$clicked_track_title."</a>
				</li>

            ";
        }

       ?>

        	

		<?php

		$get_list_of_sermons_query = "SELECT * FROM `tbl_sermon_uploads` ORDER BY id DESC";
								$get_list_of_sermons = mysqli_query($my_connection_string,$get_list_of_sermons_query);
								if($get_list_of_sermons){

									while($get_sermon_details = mysqli_fetch_array($get_list_of_sermons)){

									$sermon_title = $get_sermon_details["sermon_title"];						
									$sermon_pastor = $get_sermon_details["sermon_pastor"];
									$sermon_path = $get_sermon_details["file_path"];
									

									echo "										
								            <li data-cover='for_audio/images/my_cover.jpg' data-artist='".$sermon_pastor."'>
								                <a href='".$sermon_path."'>".$sermon_title."</a>
								            </li>
								           								        
									";
							
								}
							}					

			?>

		</ul>


	</div>


	</body>


	<script>

    $(".example2").musicPlayer({

	onPlay: function() {
               $('body').css('background', 'black');
            },
            onPause: function() {
                $('body').css('background', 'green');
            },
            onStop: function() {
                $('body').css('background', '#141942');
            },
            onFwd: function() {
                $('body').css('background', 'white');
            },
            onRew: function() {
                $('body').css('background', 'blue');
            },
            volumeChanged: function() {
                $('body').css('background', 'red');
            },
            seeked: function() {
               $('body').css('background', 'orange');
            },
            trackClicked: function() {
               $('body').css('background', 'brown');
            },
            onMute: function() {
               $('body').css('background', 'grey');
            },
         //volume: 10,
        // elements: ['artwork', 'controls', 'progress', 'time', 'volume'],
        //playerAbovePlaylist: false,
        onLoad: function() {
            //Add Audio player
            plElem  = "<div class='pl'></div>";
            $('.example2').find('.player').append(plElem);
            // show playlist
            $('.pl').click(function (e) {
                e.preventDefault();

                $('.example2').find('.playlist').toggleClass("hidden");
            });
        },

   });


    </script>









</html>