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



    if(isset($_POST["btn_submit"])){

        $your_path = "bower_components/image_plugin/demonstration/";

        $message = '';
        $dir_upload = 'bower_components/image_plugin/demonstration/';
        $max_size = 2000000;

        $file = $_FILES['my_file'];

        if ($file['size'] <= $max_size && $file['size'] > 0) {
            $new_name = time() . '-' . $file['name'];
            $copied = move_uploaded_file($file['tmp_name'], $dir_upload . $new_name);

            if ($copied) {
                
                $file_name = $new_name;
                $file_size = $file['size'];
                $file_type = $file['type'];
                $file_path = $your_path.$file_name;

                $insert_query = "INSERT INTO `tbl_my_pictures` (`id`, `file_name`, `file_type`, `file_size`, `file_path`, `date`) VALUES (NULL, '$file_name', '$file_type', '$file_size', '$file_path', CURRENT_TIMESTAMP)";

                $execute_insert_query = mysqli_query($my_connection_string,$insert_query);

                    if($execute_insert_query){

                        echo "<script>alert('Success')</script>";
                    }else{
                        echo "<script>alert('Failed')</script>";
                    }

            } else {
                $message = 'Erro!';
            }
        } else {
            $message = 'Max file size 2mb!';
        }

        echo json_encode(array("message" => $message));

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
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <link rel="icon" type="image/png" href="icons/favicon.png">

    <link rel="stylesheet" type="text/css" href="bower_components/jgrowl/css/jquery.jgrowl.css">
        
    <link href="bower_components/file_upload/open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">

    <style type="text/css">
        






    </style>

  <!-- #################################################################################################################### -->
  <!-- nanoGALLERY CSS files                                                                                                -->
  <!-- only include the css file corresponding to the selected theme                                                        -->
  <!-- include 'nanogallery.css' if no theme is specified                                                                   -->
  <!--                                                                                                                      -->
    <!-- nanoGALLERY - default theme css file                                                                                 -->
    <link href="bower_components/image_plugin/css/nanogallery.css" rel="stylesheet" type="text/css">
    <!-- nanoGALLERY - css file for the theme 'clean'                                                                         -->
    <link href="bower_components/image_plugin/css/themes/clean/nanogallery_clean.css" rel="stylesheet" type="text/css">
    <!-- nanoGALLERY - css file for the theme 'light'                                                                         -->
    <link href="bower_components/image_plugin/css/themes/light/nanogallery_light.css" rel="stylesheet" type="text/css">
  <!-- #################################################################################################################### -->


   <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

  <!-- #################################################################################################################### -->
    <!-- nanoGALLERY javascript                                                                                               -->
  <!--                                                                                                                      -->
    <script type="text/javascript" src="bower_components/image_plugin/dist/jquery.nanogallery.min.js"></script>
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

   <script src="bower_components/session_out/jquery.userTimeout.min.js"></script>

  
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
                        <li class="active">Add Images</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- row -->

             <div class='row'>                              
                <div class='col-md-12 col-xs-12'>
                    <div class='white-box'>
                        <form class='form-horizontal form-material' enctype='multipart/form-data' method="post">
                             <div class="form-group">
                                <label class="col-md-12">Upload New File</label>
                                <div class="col-md-9">
                                <input type="file" id="input05" name="my_file">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-success" name="btn_submit">Upload Image</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </div>  
                <!-- end of row -->    

             <div class='row'>                              
                <div class='col-md-12 col-xs-12'>
                    <div class='white-box'>

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
                                <a href='".$picture_filepath."' data-ngthumb='".$picture_filepath."' ".$picture_filename."</a>
                                
                                    ";
                                }
                            }

                            ?>

                            </div>

                    </div>
                </div>
        </div>  
                <!-- end of row -->       

                 

        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
        <footer class="footer text-center"> 2018 &copy; This Web App Was Developed By Step Network </footer>
    </div>
    <!-- /#wrapper -->
   
    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script type="text/javascript" src="bower_components/jgrowl/js/jquery.jgrowl.js"></script>

    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <!--Nice scroll JavaScript -->
    <script src="js/jquery.nicescroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/myadmin.js"></script>

    <script type="text/javascript" src="bower_components/file_upload/bootstrap-filestyle.min.js"></script>
        
    <script type="text/javascript">
        $('#input05').filestyle({btnClass : 'btn-outline-primary'});            
    </script>


     <script type="text/javascript">        
    $(document).userTimeout({
        logouturl:'../index.php',
        notify:true,
        timer:true,
        session:640000,
        force: 64000,
        ui:'auto',
        debug:false,
        modalTitle:'You are being timed out due to inactivity',
        modalLogOffBtn:'Log Off',
        modalStayLoggedBtn:'Stay Logged In',  
    })
    </script>

   

    <script type="text/javascript">
        
    $(document).ready(function(){

        function execute_me(){

       $.jGrowl("Hello world!");

   }

    });

    </script>
    


</body>

</html>
