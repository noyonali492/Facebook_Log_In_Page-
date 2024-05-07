<?php
include_once ("../../../vendor/autoload.php");
use App\users\users;
 $ne = new users();
global $msg,$username,$useremail,$userpassword,$name,$email,$pass,$checkname,$checkemail,$checkpass,$userid,$checkid,$id;
if (isset($_POST["add"])){
    $userid=$_POST["userid"];
    $username=$_POST["username"];
    $useremail=$_POST["useremail"];
    $userpassword=$_POST["userpassword"];
    if(empty($userid)){
        $id = "<div class='alert alert-danger'>Pleace Your Id</div>";
    }elseif (empty($username)){
        $name = "<div class='alert alert-danger'>Pleace Your Name</div>";
    }elseif(empty($useremail)){
        $email = "<div class='alert alert-danger'>Pleace Your Email</div>";
    }elseif (empty($userpassword)){
        $pass = "<div class='alert alert-danger'>Pleace Your Password</div>";
    }elseif(preg_match("/^[a-zA-Z ]*$/",$username)){
        $checkname = "<div class='alert alert-danger'>Only letters and white space allowed</div>";
    }elseif(!preg_match("/^[0-9]*$/",$userid)){
        $checkid = "<div class='alert alert-danger'>Only Integer Number</div>";
    }elseif (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/',$useremail)){
        $checkemail =  "<div class='alert alert-danger'>Pleace Cheack Your Email</div>";
    }elseif (strlen($userpassword) < 6){
        $checkpass =  "<div class='alert alert-danger'>Userpasword is too short</div>";
    }
}

?>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>create loging</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>

<div class="container">
    <nav class="navbar navbar-default">
        <div class="containe-fluid">
            <div class="navbar-hader">
                <h4 style="text-align:center;">Users Loging System <span><?php
                        date_default_timezone_set('Asia/Dhaka');
                        echo $time = date('h:i:sa'); ?></span>
                    <span><?php echo $date = date("d/m/Y") ; ?></span>
                </h4>

            </div>
        </div>
    </nav>

    <div class="panel panel-defult" style="margin-left:320px;">
        <div class="panel-body">
            <div style="max-width:350px; margin:o auto;">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="garding">User Id</label>
                        <input type="text" name="userid" value="<?php echo $userid ; ?>"  class="form-control" >
                        <h4><?php echo $id; ?></h4>
                        <h4><?php echo $checkid; ?></h4>
                    </div>
                    <div class="form-group">
                        <label for="garding">User Name</label>
                        <input type="text" name="username" value="<?php echo $username ; ?>"  class="form-control" >
                        <h4><?php echo $name; ?></h4>
                        <h4><?php echo $checkname; ?></h4>
                    </div>
                    <div class="form-group">
                        <label for="email">User E-mail</label>
                        <input type="tel" name="useremail" value="<?php echo $useremail ; ?>" class="form-control" >
                        <h4><?php echo $email; ?></h4>
                        <h4><?php echo $checkemail; ?></h4>
                    </div>
                    <div class="form-group">
                        <label for="garding">User Password</label>
                        <input type="password" name="userpassword" value="<?php echo $userpassword ; ?>" class="form-control" >
                        <h4><?php echo $pass; ?></h4>
                        <h4><?php echo $checkpass; ?></h4>
                    </div>
                    <button type="submit" name="add"  class="btn btn-success">ADD</button>

                </form>
            </div>
        </div>
    </div>
    <div class="well">
        <h3>www.noyonliveproject.com
            <span class="pull-right">Like Us www.facebook/noyon.com</span>

        </h3>
    </div>
</div>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
    ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>
</html>
