<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script async data-id="five-server" src="http://localhost:5500/fiveserver.js"></script>
    <meta charset="utf-8">
    <meta name="Description" content="Lab3">
    <meta name="keywords" content="Assigment2">
    <meta name="author" content="Thuan Khang">
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Job Application Form</title>
</head>
<body class="background-image"> 
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
    <a href="jobs.php"></a>
    <?php include_once 'menu.inc'; ?>
    <div class="container">
        <h1 class="h1">Job Application Form</h1><br>
        <h2 class="h2">Please Fill Out the Form Below to Submit Your Job Application!</h2><br>
        <form id="survey" method="post" action="processEOI.php">
            <div class="row">
                <div class="column">
                    <label for="Jobnumber" class="form-label">Job reference number:</label>
                    <input class="input" type="text" name="Jobnumber" id="Jobnumber" maxlength="5" placeholder="Enter job reference number"><br><br>
                </div>
                <div class="column">
                    <label for="Firstname" class="form-label">First name:</label>
                    <input class="input" type="text" name="Firstname" id="Firstname" required pattern="^[a-zA-Z]+$" maxlength="20" placeholder="Levine"><br><br>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label for="Lastname" class="form-label">Last name:</label>
                    <input class="input" type="text" name="Lastname" id="Lastname" pattern="^[a-zA-Z]+$" required maxlength="20" placeholder="Adam"><br><br>
                </div>
                <div class="column">
                    <label for="DOB" class="form-label">Date of birth:</label>
                    <input class="input" type="text" name="DOB" id="DOB" pattern="\d{4}-\d{2}-\d{2}" placeholder="yyyy-mm-dd"><br><br>
                </div>
            </div>
            <fieldset>
    <legend class="skill">Gender:</legend>
    <label class="skill" for="gen-male">Male</label>
    <input type="radio" name="Gender" value="Male" id="gen-male"><br><br>
    <label class="skill" for="gen-female">Female</label>
    <input type="radio" name="Gender" value="Female" id="gen-female"><br><br>
</fieldset>
            <div class="row">
                <div class="column">
                    <label for="Streetaddress" class="form-label">Street Address:</label>
                    <input class="input" type="text" name="Streetaddress" id="Streetaddress" maxlength="40" placeholder="Enter your address"><br><br>
                </div>
                <div class="column">
                    <label for="Town" class="form-label">Suburb/town:</label>
                    <input class="input" type="text" name="Town" id="Town" maxlength="40" placeholder="Enter your suburb/town"><br><br>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label for="State" class="form-label">State:</label>
                    <select name="State" id="State" required class="select">
                        <option value="" disabled selected>Select a state</option>
                        <option value="VIC">VIC</option>
                        <option value="NSW">NSW</option>
                        <option value="QLD">QLD</option>
                        <option value="NT">NT</option>
                        <option value="WA">WA</option>
                        <option value="SA">SA</option>
                        <option value="TAS">TAS</option>
                        <option value="ACT">ACT</option>
                    </select>
                </div>
                <div class="column">
                    <label for="Postcode" class="form-label">Postcode:</label>
                    <input class="input" type="text" name="Postcode" title="Fill 4-digit postcode" id="Postcode" required placeholder="Enter postcode"><br><br>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label for="Emailaddress" class="form-label">Email Address:</label>
                    <input class="input" type="email" name="Emailaddress" id="Emailaddress" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" placeholder="Enter email" required><br><br>
                </div>
                <div class="column">
                    <label for="Phonenumber" class="form-label">Phone number:</label>
                    <input class="input" type="tel" id="Phonenumber" name="Phonenumber" placeholder="0911658302" required pattern="[0-9]{8,12}" maxlength="12"><br><br>
                </div>
            </div>
            <label class="skill">Skills:</label><br>
            <br>
            <label class="label" for="SkillsHTML">HTML</label>
            <input type="checkbox" name="SkillsHTML" value="HTML" id="SkillsHTML">

            <label class="label" for="SkillsCSS">CSS</label>
            <input type="checkbox" name="SkillsCSS" value="CSS" id="SkillsCSS">
            <label class="label" for="SkillsJavaScript">JavaScript</label>
            <input type="checkbox" name="SkillsJavaScript" value="JavaScript" id="SkillsJavaScript">
            <label class="label" for="SkillsPHP">PHP</label>
            <input type="checkbox" name="SkillsPHP" value="PHP" id="SkillsPHP"><br><br>
            <br>
            <label class="label" for="OtherSkills">Other skills:</label>
            <input type="checkbox" name="OtherSkills" value="Other skills" id="OtherSkills">
            <br><br>
            <textarea name="Otherskills" placeholder="Write your other skills here..." rows="5" cols="50"></textarea>
            <br>
            <input class="btn3" type="submit" value="Apply">
            <input class="btn3" type="reset" value="Reset">
        </form>
    </div>
    <?php include_once 'footer.inc';?>
</body>
</html>
