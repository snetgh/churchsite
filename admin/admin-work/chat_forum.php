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



    if(isset($_POST["p"])){


        // getting additional details

        $new_topic = mysqli_escape_string($my_connection_string,$_POST["txt_new_topic"]);


     $get_topic_query = "SELECT * FROM `tbl_my_forum_main_topic`";

        $run_get_topic_query = mysqli_query($my_connection_string,$get_topic_query);

            $search_topic = mysqli_num_rows($run_get_topic_query);

                if($search_topic >= 1){

                    $get_topic_name = mysqli_fetch_array($run_get_topic_query);
                    $topic_name = $get_topic_name["main_topic"];

                }else{
                    $topic_name = "No Topic To Display";
                    }

                    if($topic_name == "No Topic To Display"){

                        $my_insert_query = "INSERT INTO `tbl_my_forum_main_topic` (`id`, `main_topic`, `timestamp`) VALUES ('1', '$new_topic', CURRENT_TIMESTAMP)";

                        $execute_my_insert_query = mysqli_query($my_connection_string,$my_insert_query);

                        if($execute_my_insert_query){

                            echo "<script>alert('New Topic Saved Successfully')</script>";

                        }

                    }else{

                        echo "<script>alert('Please Delete Old Topic First')</script>";
                    }

                                 
    }



    if(isset($_POST["d"])){


         $my_delete_query = "TRUNCATE `tbl_my_forum_main_topic`";

         $my_delete_query_2 = "TRUNCATE TABLE `tbl_my_forum`";
    

        $execute_delete_query = mysqli_query($my_connection_string,$my_delete_query);
        $execute_delete_query_2 = mysqli_query($my_connection_string,$my_delete_query_2);

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

    <link href="bower_components/time_line/timeline.css" rel="stylesheet">

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
                        <li class="active">Chat Forum</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- row -->
            <div class="row">
            
                <div class="col-md-12 col-xs-12">
                    <div class="white-box">

                        <form class='form-horizontal form-material' method='post'>
                           <div class="form-group">
                                <label class="col-md-12">Post A New Topic For Discussion</label>
                                <div class="col-md-12">
                                    <br>
                                    <textarea rows="5" class="form-control form-control-line" name="txt_new_topic" placeholder="Write something for Discussion"></textarea>
                                </div>
                            </div>
                            
                            <div class='form-group'>
                                <div class='col-sm-12'>
                                    <button class='btn btn-success' name='p'>Post Topic</button>
                                </div>
                            </div>

                        </form>
                       
                    </div>

                    <hr>

                    <div class="white-box">

                        <form class='form-horizontal form-material' method='post'>
                           <div class="form-group">
                                <label class="col-md-12">Last Topic For Discussion</label>
                                <div class="col-md-12">
                                    <br>

                                    <?php


                                $get_topic_query = "SELECT * FROM `tbl_my_forum_main_topic`";

                                $run_get_topic_query = mysqli_query($my_connection_string,$get_topic_query);

                                 $search_topic = mysqli_num_rows($run_get_topic_query);

                                    if($search_topic >= 1){

                                        $get_topic_name = mysqli_fetch_array($run_get_topic_query);
                                        $topic_name = $get_topic_name["main_topic"];

                                    }else{

                                        $topic_name = "No Topic To Display";
                                    }


                                    ?>



                                    <textarea rows="5" class="form-control form-control-line" name="txt_event_message" placeholder="Write something for Discussion"><?php  echo $topic_name;   ?></textarea>
                                </div>
                            </div>
                            
                            <div class='form-group'>
                                <div class='col-sm-12'>
                                    <button class='btn btn-danger' name='d'>Delete Topic</button>
                                </div>
                            </div>

                        </form>
                       
                    </div>
                </div>
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

        $('#input05').filestyle({
                
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
