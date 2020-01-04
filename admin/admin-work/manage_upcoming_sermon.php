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
        
        $upcoming_sermon_title = mysqli_escape_string($my_connection_string,$_POST["txt_sermon_title"]);
        $upcoming_sermon_pastor = mysqli_escape_string($my_connection_string,$_POST["txt_sermon_pastor"]);
        $upcoming_sermon_location = mysqli_escape_string($my_connection_string,$_POST["txt_sermon_location"]);
        $upcoming_sermon_date = mysqli_escape_string($my_connection_string,$_POST["txt_sermon_date"]);
        $upcoming_sermon_time = mysqli_escape_string($my_connection_string,$_POST["txt_sermon_time"]);
        $upcoming_sermon_description = mysqli_escape_string($my_connection_string,$_POST["txt_sermon_description"]);

        $my_update_query = "UPDATE `tbl_upcoming_sermons` SET `upcoming_sermon_title` = '$upcoming_sermon_title', `upcoming_sermon_date` = '$upcoming_sermon_date', `upcoming_sermon_location` = '$upcoming_sermon_location', `sermon_time` = '$upcoming_sermon_time', `sermon_description` = '$upcoming_sermon_description', `sermon_pastor` = '$upcoming_sermon_pastor' WHERE `id` = '$get_clicked_id'";

        $execute_update_query = mysqli_query($my_connection_string,$my_update_query);

        if($execute_update_query){

            echo "<script>alert('Success')</script>";
        }else{
            echo "<script>alert('Failed')</script>";
        }
    }


        if(isset($_POST['d'])){

        $get_clicked_id = $_POST["txt_event_id"];

        $my_delete_query = "DELETE FROM `tbl_upcoming_sermons` WHERE `id` = '$get_clicked_id'";

        $execute_delete_query = mysqli_query($my_connection_string,$my_delete_query);

        if($execute_delete_query){

            echo "<script>alert('Success')</script>";
        }else{
            echo "<script>alert('Failed')</script>";
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
                        <li class="active">Manage Upcoming Sermon</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- row -->
            <div class="row">

                <?php


                            $get_list_of_upcoming_sermon_query = "SELECT * FROM `tbl_upcoming_sermons` ORDER BY id DESC";
                            $get_list_of_upcoming_sermon = mysqli_query($my_connection_string,$get_list_of_upcoming_sermon_query);
                            if($get_list_of_upcoming_sermon){

                                while($get_upcoming_sermon_details = mysqli_fetch_array($get_list_of_upcoming_sermon)){

                                $event_id = $get_upcoming_sermon_details["id"];
                                $upcoming_sermon_title = $get_upcoming_sermon_details["upcoming_sermon_title"];
                                $upcoming_sermon_location = $get_upcoming_sermon_details["upcoming_sermon_location"];
                                $upcoming_sermon_date = $get_upcoming_sermon_details["upcoming_sermon_date"];
                                $upcoming_sermon_time = $get_upcoming_sermon_details["sermon_time"];
                                $upcoming_sermon_description = $get_upcoming_sermon_details["sermon_description"];
                                $upcoming_sermon_pastor = $get_upcoming_sermon_details["sermon_pastor"];
                               

                                echo "


                <div class='col-md-12 col-xs-12'>
                    <div class='white-box'>
                        <form class='form-horizontal form-material' method='post' action=''>
                            <div class='form-group'>
                                <label class='col-md-12'>Upcoming Sermon Title</label>
                                <div class='col-md-12'>
                                    <input type='text' placeholder='Enter event title' class='form-control form-control-line' value='".$upcoming_sermon_title."' name='txt_sermon_title'> </div>
                            </div>

                            <div class='form-group'>
                                <label class='col-md-12'>Upcoming Sermon Pastor</label>
                                <div class='col-md-12'>
                                    <input type='text' placeholder='Enter event title' class='form-control form-control-line' value='".$upcoming_sermon_pastor."' name='txt_sermon_pastor'> </div>
                                
                            </div>

                            <div class='form-group'>
                                <label for='example-location' class='col-md-12'>Upcoming Sermon Location</label>
                                <div class='col-md-12'>
                                    <input type='text' placeholder='Enter event location' class='form-control form-control-line' name='txt_sermon_location' id='example-location' value='".$upcoming_sermon_location."'> </div>
                            </div>
                            <div class='form-group'>
                                <label class='col-md-12'>Upcoming Sermon Date</label>
                                <div class='col-md-12'>
                                    <input type='date' value='".$upcoming_sermon_date."' class='form-control form-control-line' name='txt_sermon_date'> </div>
                            </div>

                            <div class='form-group'>
                                <label class='col-md-12'>Upcoming Sermon Time</label>
                                <div class='col-md-12'>
                                    <input type='text' value='".$upcoming_sermon_time."' class='form-control form-control-line' name='txt_sermon_time'> </div>
                            </div>
                           
                            <div class='form-group'>
                                <label class='col-md-12'>Message</label>
                                <div class='col-md-12'>
                                    <textarea rows='5' class='form-control form-control-line' value='".$upcoming_sermon_description."' name='txt_sermon_description'>".$upcoming_sermon_description."</textarea>
                                </div>
                            </div>

                            <input type='hidden' value='".$event_id."' class='form-control form-control-line' name='txt_event_id' hidden>



                            
                            <div class='form-group'>
                                <div class='col-sm-12'>
                                    <button class='btn btn-success' name='u'>Save Changes</button>
                                    <button class='btn btn-danger'  name='d'>Delete Upcoming Sermon</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

                <br>
                <br>

                        ";
                        }
                        }

                        ?>

            </div>
            <!-- /.row -->
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
