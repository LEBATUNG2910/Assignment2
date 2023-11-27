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
        <a href="manage.php" class="enhancement-nameN">Enhancement 1: Index Page</a>
        <div class="enhancement-textN">
          <p>
            We used enhancements to <strong>highlight the buttons</strong>, creating beautiful effects for users. The two buttons of the Home page, <strong>"APPLY"</strong> and <strong>"WATCH VIDEO"</strong>, have <strong>a slight motion effect</strong> added. As for the <strong>"APPLY"</strong> button, in addition to a slight motion effect, it also changes color from <strong>red to transparent</strong> to create interaction with the user. I've also added a link to the "Enhancement 1: Home page buttons" section so everyone can see how enhancements work on the home page more clearly.
          </p>
        </div>
        <img id="robo" src="images/robo.png" alt="robot">
      </div>
      <div class="itemN">
        <a href="apply.php" class="enhancement-nameN">Enhancement 2: Apply page form fields</a>
        <div class="enhancement-textN">
          <p>
            On the apply page, we have added the effect of <strong>enlarging the information field</strong> so that when people fill in the information, it will be easier to fill in, the space to fill in the information will also be larger and easier to manipulate. We make this effect to give users a pleasant feeling when manipulating, avoiding not being able to clearly see the information they enter. Below the 2 buttons <strong>"Apply"</strong> and <strong>"Reset"</strong> also have <strong>a slight zoom effect</strong> and change color from <strong>transparent to white</strong> when clicked.
          </p>
        </div>
      </div>
      <img id="robo1" src="images/robo.png" alt="robot">
    </div>
    <a href="enhancements2.php" class="linkback" id="change">View Enhancements Assign 2</a>
    <?php include_once 'footer.inc';?>
  </body>
</html>