<?php

	require_once 'database_connection/database_connection.php';

	 if ($user_username = $_COOKIE["u"]){

 		$user_username = $_COOKIE["u"];  

	}else{

    	header("Location:index.php");
	}








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

		<link rel="stylesheet" href="time_style.css">

		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

   <!-- jQuery -->
    <script src="js/jquery-1.11.1.min.js"></script>



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

<![endif]-->

  
    

	</head>


	<body>
		<div class="site-content">
			
			<main class="main-content">
				<div id="about" class="fullwidth-block">
					<div class="container">
						<div class="row">

							<div class="col-md-12 col-xs-12">

						<div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-clock-o fa-fw"></i> Topic For Discussion
                            </div>
                            <!-- /.panel-heading -->

                            <div class="panel panel-body" style="background-color: #a7a3a3">


                            	<?php


                                $get_topic_query = "SELECT * FROM `tbl_my_forum_main_topic`";

                                $run_get_topic_query = mysqli_query($my_connection_string,$get_topic_query);

                                 $search_topic = mysqli_num_rows($run_get_topic_query);

                                    if($search_topic >= 1){

                                        $get_topic_name = mysqli_fetch_array($run_get_topic_query);
                                        $topic_name = $get_topic_name["main_topic"];
                                        echo $topic_name;

                                    }else{

                                        $topic_name = "<h2>No Topic To Display</h2>";

                                        echo $topic_name;
                                    }

								   ?>                  	

                            </div>

                         </div>

						<div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-clock-o fa-fw"></i> Related Comments
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body" id="my_message_list">
                                <ul class="timeline">

                                	<?php

                                $get_chats_query = "SELECT * FROM `tbl_my_forum` ORDER BY `id` ASC";
								$execute_get_chats = mysqli_query($my_connection_string,$get_chats_query);
								if($execute_get_chats){

									while($get_chat_details = mysqli_fetch_array($execute_get_chats)){

								    $chat_id = $get_chat_details["id"];
									$chat_username = $get_chat_details["username"];
									$chat_message_id = $get_chat_details["given_id"];
									$chat_message = $get_chat_details["message"];

									if($user_username == $chat_username){

										$invert_this = '1';
									}else{
										$invert_this = '2';
									}


									switch ($invert_this) {
										case '1':

											switch ($chat_message_id) {
												case '0':
												echo "<li class='timeline-inverted'>
                                        <div class='timeline-badge danger'><i class='fa fa-check'></i>
                                        </div>
                                        <div class='timeline-panel'>
                                            <div class='timeline-heading'>
                                                <h4 class='timeline-title'>".$chat_username."</h4>
                                            </div>
                                            <div class='timeline-body'>
                                                <p>".$chat_message."</p>
                                            </div>
                                        </div>
                                    </li>
										
									";
												break;
											case '1':
												echo "<li class='timeline-inverted'>
                                        <div class='timeline-badge info'><i class='fa fa-check'></i>
                                        </div>
                                        <div class='timeline-panel'>
                                            <div class='timeline-heading'>
                                                <h4 class='timeline-title'>".$chat_username."</h4>
                                            </div>
                                            <div class='timeline-body'>
                                                <p>".$chat_message."</p>
                                            </div>
                                        </div>
                                    </li>
										
									";
												break;
											case '2':
												echo "<li class='timeline-inverted'>
                                        <div class='timeline-badge success'><i class='fa fa-check'></i>
                                        </div>
                                        <div class='timeline-panel'>
                                            <div class='timeline-heading'>
                                                <h4 class='timeline-title'>".$chat_username."</h4>
                                            </div>
                                            <div class='timeline-body'>
                                                <p>".$chat_message."</p>
                                            </div>
                                        </div>
                                    </li>
										
									";
												break;

											case '3':
												echo "<li class='timeline-inverted'>
                                        <div class='timeline-badge warning'><i class='fa fa-check'></i>
                                        </div>
                                        <div class='timeline-panel'>
                                            <div class='timeline-heading'>
                                                <h4 class='timeline-title'>".$chat_username."</h4>
                                            </div>
                                            <div class='timeline-body'>
                                                <p>".$chat_message."</p>
                                            </div>
                                        </div>
                                    </li>
										
									";
												break;
											
											default:
												# code...
												break;

											} // end of middle switch statement

											break;


										case '2':
											
											switch ($chat_message_id) {

												case '0':


												echo "<li>
                                        <div class='timeline-badge danger'><i class='fa fa-check'></i>
                                        </div>
                                        <div class='timeline-panel'>
                                            <div class='timeline-heading'>
                                                <h4 class='timeline-title'>".$chat_username."</h4>
                                            </div>
                                            <div class='timeline-body'>
                                                <p>".$chat_message."</p>

                                                    
                                            </div>
                                        </div>
                                        
                                    </li>
										
									";

												break;

											case '1':
												echo "<li>
		                                        <div class='timeline-badge info'><i class='fa fa-check'></i>
		                                        </div>
		                                        <div class='timeline-panel'>
		                                            <div class='timeline-heading'>
		                                                <h4 class='timeline-title'>".$chat_username."</h4>
		                                            </div>
		                                            <div class='timeline-body'>
		                                                <p>".$chat_message."</p>
		                                            </div>
		                                        </div>
		                                    </li>
												
											";
												break;
											case '2':
												echo "<li>
                                        <div class='timeline-badge success'><i class='fa fa-check'></i>
                                        </div>
                                        <div class='timeline-panel'>
                                            <div class='timeline-heading'>
                                                <h4 class='timeline-title'>".$chat_username."</h4>
                                            </div>
                                            <div class='timeline-body'>
                                                <p>".$chat_message."</p>
                                            </div>
                                        </div>
                                    </li>
										
									";
												break;

										case '3':
											echo "<li>
                                        <div class='timeline-badge warning'><i class='fa fa-check'></i>
                                        </div>
                                        <div class='timeline-panel'>
                                            <div class='timeline-heading'>
                                                <h4 class='timeline-title'>".$chat_username."</h4>
                                            </div>
                                            <div class='timeline-body'>
                                                <p>".$chat_message."</p>
                                            </div>
                                        </div>
                                    </li>
										
									"; 

											break;

												default:

												break;
												

											}  // end of middle switch statement


											break;
										
										default:
											# code...
											break;

									} // end of first switch statement


								} // end of while loop


							} // end of if statement
				

                                	?>
                                    
                                   
                            </div>
                            <!-- /.panel-body -->

                            <div class="panel-footer">
                            	<form method="post">
                                <div class="input-group">
                                    <input id="btn-input" type="text" class="form-control input-md"
                                           placeholder="Type your message here..." name="txt_new_msg" required="true" />
                                        <span class="input-group-btn">
                                            <button class="btn btn-warning btn-md" id="btn-chat" name="btn_send">
                                                Send
                                            </button>
                                        </span>
                                </div>
                            </form>
                            </div>
								

					</div>

			</div>

		</div>

	</div>

</main>


</div>

		
		<script src="bower/bootstrap/js/bootstrap.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>

		<script type="text/javascript">

			$("#btn-chat").click(function(){
				
			var new_message = $("#btn-input").val();
			
				$(function(){
			    $.ajax({
			      type: "POST",
			      url: 'feed.php',
			      data: ({new_message:new_message,
			              }),
			      success: function(data) {
			      
			      }
			    });
			  });

			});
			
			



		</script>
		
	</body>

</html>