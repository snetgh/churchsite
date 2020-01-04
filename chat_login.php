

<?php

    
    if(isset($_POST["btn_enter_chatroom"])){

         $users_username = $_POST["txt_username"];

         setcookie("u", $users_username, time() + (86400 * 30),"/");

         header("Location:forum_page.php");

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

    <title>Bible Believers Fellowship</title>

    <link rel="stylesheet" href="bower/bootstrap/css/bootstrap.min.css" type="text/css">

<style type="text/css">
    
body{
  background-color: #f8f8f8;
    }
    
.login-panel {
  margin-top: 25%;
}
</style>

     

        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="bower/bootstrap/js/bootstrap.min.js"></script>


</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Choose Username for Chat</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" style="text-align: center;" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter username here" name="txt_username"  autofocus required="true">
                                </div>
                                
                                <button class="btn btn-lg btn-success" name="btn_enter_chatroom">Login </button>
                            </fieldset>
                        </form>
                        <br>
                        <div style="text-align: center;">
                        <a href="index.php">Click Here To Go Back To Main Page</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>



</body>

</html>
