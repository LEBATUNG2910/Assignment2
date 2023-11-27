<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Assignment 2">
    <meta name="keywords" content="Assignment 1, cos10026, html, css">
    <meta name="author" content="Nguyen Do Nhat Nam">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swin Tech/Enhancements</title>
    <link rel="stylesheet" href="style/style.css" >
  </head>
  <body class="background-image">
  <?php include_once 'menu.inc';?>
    <div class="body-containerN">
    <img src="images/x.png" class="x-img" id="x1" alt="X shape" >
      <img src="images/x.png" class="x-img" id="x2" alt="X shape" >
      <img src="images/x.png" class="x-img" id="x3" alt="X shape" >
      <img src="images/x.png" class="x-img" id="x4" alt="X shape" >
      <img src="images/x.png" class="x-img" id="x5" alt="X shape" >

      <img src="images/stop.png" class="stop-img" id="stop1" alt="Square shape">
      <img src="images/stop.png" class="stop-img" id="stop2" alt="Square shape">
      <img src="images/stop.png" class="stop-img" id="stop3" alt="Square shape">
      <img src="images/stop.png" class="stop-img" id="stop4" alt="Square shape">
      <img src="images/stop.png" class="stop-img" id="stop5" alt="Square shape">
      <img src="images/triangle.png" class="triangle-img" id="triangle1" alt="Triangle shape">
      <img src="images/triangle.png" class="triangle-img" id="triangle2" alt="Triangle shape">
      <img src="images/triangle.png" class="triangle-img" id="triangle3" alt="Triangle shape">
      <img src="images/triangle.png" class="triangle-img" id="triangle4" alt="Triangle shape">
      <img src="images/sparkle.png" class="sparkle-img" id="sparkle1" alt="Sparkle">
      <img src="images/sparkle.png" class="sparkle-img" id="sparkle2" alt="Sparkle">
      <img src="images/sparkle.png" class="sparkle-img" id="sparkle3" alt="Sparkle">
      <img src="images/sparkle.png" class="sparkle-img" id="sparkle4" alt="Sparkle">
      <img src="images/sparkle.png" class="sparkle-img" id="sparkle5" alt="Sparkle">
      <img src="images/sparkle.png" class="sparkle-img" id="sparkle6" alt="Sparkle">
      <img src="images/sparkle.png" class="sparkle-img" id="sparkle7" alt="Sparkle">
      <img src="images/record.png" class="record-img" id="record1" alt="Circle shape">
      <img src="images/record.png" class="record-img" id="record2" alt="Circle shape">
      <div class="itemN">
        <a href="manage.php" class="enhancement-nameN">Enhancement 1: Management Page</a>
        <div class="enhancement-textN">
          <p>
          We used an PHP file name Management to demonstrate the details and description in the database table directly. We also make a manager registration page that requires a unique username and a password rule for server-side validation, every special profile name of every account will be printed out with the greeting after loged in via registered . Store the necessary data in a table. Regulate access to manage.html by verifying the password and login. Moreover, the website will be disabled for a while after the user makes, say, three or more unsuccessful attempts to log in. By creating Log out button, we ensure that the manage's web site can not be entered directly by using URL after logging out. Last but not lease, The Hash Password function take the user's password input and combines it with a salt value before appllying the MD5 hasing algorithm, the purpose of using this is to add an extra layout of security to the hash password. In this case, the salt value is set to 'e12e91ue21je12e9u129e' to avoid PHP injection and other kind of attack to the database.  
          </p>
        </div>
        <img id="robo" src="images/robo.png" alt="robot">
      </div>
      <div class="itemN">
        <a href="apply.html" class="enhancement-nameN">Enhancement 2: Animation Background</a>
        <div class="enhancement-textN">
          <p>
          We also make the background look so much interested by adding 
            picture of many shapes. For example "triangle", "circle", "square", and "X". All the shapes will be edited by 
            CSS using falling effect. So when you click in the page, first thing you see will be many shapes appear
            and fall down.
          </p>
        </div>
      </div>  
      <img id="robo1" src="images/robo.png" alt="robot">
    </div> 
    <a href="enhancements.php" class="linkback" id="change">View Enhancements Assign 1</a>
    <?php include_once 'footer.inc';?>
  </body>
</html>