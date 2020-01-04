<?php

    include_once '../../database_connection/database_connection.php';

   if ($user_id = $_COOKIE["i"]){

    $get_name_query = "SELECT * FROM tbl_login_details WHERE id ='$user_id'";

    $run_query = mysqli_query($my_connection_string,$get_name_query);

     $search_user = mysqli_num_rows($run_query);

        if($search_user >= 1){

            $get_user_details = mysqli_fetch_array($run_query);
            $user_username = $get_user_details["user_username"];

            $display_username = strtoupper($user_username);
    }

}else{

    header("Location:../index.php");
}



    if(isset($_POST['u'])){

        $get_clicked_id = $_POST["txt_event_id"];

        $empty_input_type_checker = $_FILES["my_file"]["size"];
        if($empty_input_type_checker <= 0){
            
}else{

             $your_path = "special_images/";

            $message = '';
            $dir_upload = '../../special_images/';

            $file = $_FILES['my_file'];

           $new_name = time().'-' .$file['name'];
           $copied = move_uploaded_file($file['tmp_name'], $dir_upload.$new_name);

            if ($copied) {
                
                $file_name = $new_name;
                $file_path = $your_path.$file_name;

            // Getting the image path of the previous image

            $my_select_query = "SELECT * FROM `tbl_upcoming_events` WHERE `id` = '$get_clicked_id'";

            $execute_my_select_query = mysqli_query($my_connection_string,$my_select_query);

            if($get_path_name = mysqli_fetch_assoc($execute_my_select_query)){

            $my_file_path = "../../".$get_path_name["image_location"];
        }

            // inserting new image path into the database

           $change_picture_query = "UPDATE `tbl_upcoming_events` SET `image_location` = '$file_path' WHERE `id` = '$get_clicked_id'";

           $execute_change_picture_query = mysqli_query($my_connection_string,$change_picture_query);

           // if the update is successfull, the old image path is deleted

           if($execute_change_picture_query){

            if(unlink($my_file_path)){
               // echo "<script>alert('Deleted')</script>";
        }
           }else{
            echo "<script>alert('Failed To Save')</script>";
        }
    }
}
        
        $upcoming_event_title = mysqli_escape_string($my_connection_string,$_POST["txt_event_title"]);
        $upcoming_event_location = mysqli_escape_string($my_connection_string,$_POST["txt_event_location"]);
        $upcoming_event_date = mysqli_escape_string($my_connection_string,$_POST["txt_event_date"]);
        $upcoming_event_time = mysqli_escape_string($my_connection_string,$_POST["txt_event_time"]);
        $upcoming_event_description = mysqli_escape_string($my_connection_string,$_POST["txt_event_description"]);

        $my_update_query = "UPDATE `tbl_upcoming_events` SET `event_title` = '$upcoming_event_title', `event_date` = '$upcoming_event_date', `event_location` = '$upcoming_event_location', `event_time` = '$upcoming_event_time', `event_description` = '$upcoming_event_description' WHERE `id` = '$get_clicked_id'";

        $execute_update_query = mysqli_query($my_connection_string,$my_update_query);

        if($execute_update_query){

            echo "<script>alert('Event Deleted Successfully')</script>";
        }else{
            echo "<script>alert('Failed')</script>";
        }
    }


        if(isset($_POST['d'])){

        $get_clicked_id = $_POST["txt_event_id"];

        $my_select_query = "SELECT * FROM `tbl_upcoming_events` WHERE `id` = '$get_clicked_id'";

        $execute_my_select_query = mysqli_query($my_connection_string,$my_select_query);

        if($get_path_name = mysqli_fetch_assoc($execute_my_select_query)){

            $my_file_path = "../../".$get_path_name["image_location"];

            if(unlink($my_file_path)){

               // echo "<script>alert('Deleted')</script>";

            }
        }

        $my_delete_query = "DELETE FROM `tbl_upcoming_events` WHERE `id` = '$get_clicked_id'";

        $execute_delete_query = mysqli_query($my_connection_string,$my_delete_query);

        if($execute_delete_query){

            echo "<script>alert('Successfully Deleted')</script>";
        }else{
            echo "<script>alert('Failed to Delete')</script>";
        }
    }

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Bible Believers Fellowship - Nungua</title>
    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <link rel="icon" type="image/png" href="icons/favicon.png">
        
    <link href="bower_components/file_upload/open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part"><a class="logo" href="index.html"><i class="glyphicon glyphicon-fire"></i>&nbsp;<span class="hidden-xs">BBF-Nungua</span></a></div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs hidden-lg
 waves-effect waves-light"><i class="ti-arrow-circle-left ti-menu"></i>
</a></li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="profile-pic" href="#"> <img src="images/users/default.png" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?php  echo $display_username; ?></b> </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <div class="navbar-default sidebar nicescroll" role="navigation">
            <div class="sidebar-nav navbar-collapse ">
                <ul class="nav" id="side-menu">
                    
                    <li>
                        <a href="index.php" class="waves-effect"><i class="glyphicon glyphicon-fire fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="upcoming_event.php" class="waves-effect"><i class="ti-plus fa-fw"></i>Add coming Event</a>
                    </li>
                    <li>
                        <a href="manage_upcoming_events.php" class="waves-effect"><i class="ti-pencil-alt fa-fw"></i>Manage coming Event</a>
                    </li>
                    <li>
                        <a href="upcoming_sermon.php" class="waves-effect"><i class="ti-plus fa-fw"></i>Add coming Sermons</a>
                    </li>
                    <li>
                        <a href="manage_upcoming_sermon" class="waves-effect"><i class="ti-pencil-alt fa-fw"></i>Manage coming Sermons</a>
                    </li>
                    <li>
                        <a href="upload_sermon.php" class="waves-effect"><i class="ti-plus fa-fw"></i> Upload Sermon</a>
                    </li>
                    <li>
                        <a href="manage_sermon.php" class="waves-effect"><i class="ti-pencil-alt fa-fw"></i> Manage Sermons</a>
                    </li>
                    <li>
                        <a href="add_images.php" class="waves-effect"><i class="ti-plus fa-fw"></i> Upload Picture</a>
                    </li>
                    <li>
                        <a href="manage_gallery.php" class="waves-effect"><i class="ti-pencil-alt fa-fw"></i> Manage Pictures</a>
                    </li>
                    <li>
                        <a href="chat_forum.php" class="waves-effect"><i class="ti-files fa-fw"></i> Chat Forum</a>
                    </li>
                    <li>
                        <a href="change_password.php" class="waves-effect"><i class="ti-files fa-fw"></i> Change Password</a>
                    </li>
                    <li>
                        <a href="../index.php" class="waves-effect"><i class="ti-lock fa-fw"></i> Lock</a>
                    </li>
                </ul>
               
            </div>
            <!-- /.sidebar-collapse -->
    </div>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-12">
                    <h4 class="page-title">Profile</h4>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Dashboard</a></li>
                        <li class="active">Manage Upcoming Event</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- row -->
            

                <?php


                            $get_list_of_events_query = "SELECT * FROM `tbl_upcoming_events` ORDER BY id DESC";
                            $get_list_of_events = mysqli_query($my_connection_string,$get_list_of_events_query);
                            if($get_list_of_events){

                                while($get_event_details = mysqli_fetch_array($get_list_of_events)){

                                $event_id = $get_event_details["id"];
                                $event_title = $get_event_details["event_title"];
                                $event_image_path = $get_event_details["image_location"];
                                $event_date = $get_event_details["event_date"];
                                $event_location = $get_event_details["event_location"];
                                $event_description = $get_event_details["event_description"];
                                $event_time = $get_event_details["event_time"];
                                $event_date_recorded = $get_event_details["date_recorded"];
                               

                                echo " 

                                <div class='row'>

                    <div class='col-md-4 col-xs-12'>
                        <div class='white-box'>
                            <div class='user-bg'>
                            <div>
                                <div class='user-content'>
                                    <img src='../../".$event_image_path."' alt='img' width='100%' height='100%' class='img-responsive'>
                                </div>
                            </div>
                        </div>
                        <div class='user-btm-box'>
                           <p> <strong>Uploaded on</strong>&nbsp;&nbsp;".$event_date_recorded."</p>
                        </div>
                    </div>
                </div>


                <div class='col-md-8 col-xs-12'>
                    <div class='white-box'>
                        <form class='form-horizontal form-material' enctype='multipart/form-data' method='post' action=''>
                            <div class='form-group'>
                                <label class='col-md-12'>Event Title</label>
                                <div class='col-md-12'>
                                    <input type='text' placeholder='Enter event title' class='form-control form-control-line' value='".$event_title."' name='txt_event_title'> </div>
                            </div>
                            <div class='form-group'>
                                <label for='example-location' class='col-md-12'>Event Location</label>
                                <div class='col-md-12'>
                                    <input type='text' placeholder='Enter event location' class='form-control form-control-line' id='example-location' value='".$event_location."' name='txt_event_location'> </div>
                            </div>
                            <div class='form-group'>
                                <label class='col-md-12'>Event Date</label>
                                <div class='col-md-12'>
                                    <input type='date' value='".$event_date."' class='form-control form-control-line' name='txt_event_date'> </div>
                            </div>

                            <div class='form-group'>
                                <label class='col-md-12'>Event Time</label>
                                <div class='col-md-12'>
                                    <input type='text' value='".$event_time."' class='form-control form-control-line' name='txt_event_time'> </div>
                            </div>
                           
                            <div class='form-group'>
                                <label class='col-md-12'>Message</label>
                                <div class='col-md-12'>
                                    <textarea rows='5' class='form-control form-control-line' name='txt_event_description'>".$event_description."</textarea>
                                </div>
                            </div>

                            <div class='form-group'>
                                <label class='col-md-12'>Upload New Event Image</label>
                                <div class='col-md-8'>
                                <input type='file' class='input05' name='my_file'>
                                </div>
                            </div>

                             <input type='hidden' value='".$event_id."' class='form-control form-control-line' name='txt_event_id' hidden>
                            
                            <div class='form-group'>
                                <div class='col-sm-12'>
                                    <button class='btn btn-success' name='u'>Save Changes</button>
                                    <button class='btn btn-danger'  name='d'>Delete Upcoming Event</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

               </div>
            <!-- /.row --> 

                <!-- end of row -->   <hr>
                        ";
                        }
                        }

                        ?>

            
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
    <footer class="footer text-center"> 2018 &copy; This Web App Was Developed By Step Network </footer>
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <!--Nice scroll JavaScript -->
    <script src="js/jquery.nicescroll.js"></script>

    <script src="bower_components/session_out/jquery.userTimeout.min.js"></script>

    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/myadmin.js"></script>

    <script type="text/javascript" src="bower_components/file_upload/bootstrap-filestyle.min.js"></script>
        
    <script type="text/javascript">

        $('.input05').filestyle({
                
                btnClass : 'btn-outline-primary'
        });
            
    </script>

    <script type="text/javascript">   
        
    $(document).userTimeout({
        logouturl:'../index.php',
        notify:true,
        timer:true,
        session:64000,
        force: 64000,
        ui:'auto',
        debug:false,
        modalTitle:'You are being timed out due to inactivity',
        modalLogOffBtn:'Log Off',
        modalStayLoggedBtn:'Stay Logged In',  

    })

    </script>

</body>

</html>
