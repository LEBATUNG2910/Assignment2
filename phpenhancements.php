<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<?php
session_set_cookie_params(1800);
session_start();
if (!isset($_SESSION['status'])) {
    $_SESSION['status'] = ""; // if the status is not set yet
}
if ($_SESSION['status'] == "logged") {
    $_SESSION['message'] = "<p class=\"remind-message\">You need to logout first</p>";
    header("Location: manage.php");
}   


// 
if (!isset($_SESSION["login_attempts"]) || !is_numeric($_SESSION["login_attempts"])) {
    $_SESSION["login_attempts"] = 0; // Initialize login attempts counter
}

// Check if the "locked" key is set
if (isset($_SESSION["locked"])) {
    $difference = time() - $_SESSION["locked"];
    if ($difference > 10) {
        unset($_SESSION["locked"]);
        unset($_SESSION["login_attempts"]); 
        header("Location: phpenhancements.php");
    }
}
$error = array(); // array of error messages to be printed out

if (isset($_POST['submit'])) {
    require("security.php"); // import the sanitize input function
    $email = sanitize_input($_POST['email']); // remove unnecessary characters
    $password = sanitize_input($_POST['password']); 
    $salt = 'e12e91ue21je12e9u129e';
    $hashed_password = md5($password . $salt);  

    if (empty($email)) { // check if the user left the email field empty
        $error[0] = "<p class=\"error-message\">Please fill in the email</p>"; // error message to be printed out
    }
    if (empty($password)) { // check if the user left the password field empty
        $error[1] = "<p class=\"error-message\">Please fill in the password</p>";
    }
    if (count($error) == 0) { // if there are no errors
        require("settings.php"); // import credentials to connect to the database
        $conn = new mysqli($host, $user, $pwd);
        if ($conn->connect_error) {
            $error[3] = "Connection failed: " . $conn->connect_error;
        }
        @$conn->select_db($sql_db);
        $table = 'friends';
        $stmt = $conn->prepare("SELECT password, profile_name FROM $table WHERE friend_email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $password = $row['password'];  
             $hashed_password ; 
             $password;
            if($hashed_password == $password){ 

            
           
            // if (password_verify($password, $hashed_password)) {
                $_SESSION['email'] = $email;
                $_SESSION['name'] = $row['profile_name'];
                $_SESSION['status'] = "logged";
                $_SESSION['message'] = "<p class=\"success\">Login Successfully</p>";
                header("Location: manage.php");
            } else {  
                // NO MORE THAN 3 times LOGIN //
                $_SESSION["login_attempts"] += 1; 
                $error[5] = "<p class=\"error-message\">Incorrect password</p>";
            }
        } else { 
            $_SESSION["login_attempts"] += 1; 
            $error[4] = "<p class=\"error-message\">Invalid email</p>"; 
            
        }
        $conn->close();
    }
    $_SESSION['email'] = $email; // set the input email to the session email
}


if (!isset($_SESSION['email'])) { //check if the session email has been set
    $_SESSION['email'] = "";        // if not, then assign it
}
$email = $_SESSION['email']; //assign it to the variable for displaying in the form

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Nhat Nam">
    <meta name="description" content="Web Developer">
    <meta name="keywords" content="HTML, CSS, PHP">
    <link rel="stylesheet" href="./style/index.css">
    <script async data-id="five-server" src="http://localhost:5500/fiveserver.js"></script>
    <title>Login</title>
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
        <header>
            <h1 class="register-head"><span style="color:red">Swin</span>-Tech</h1>
        </header>
        <section class="login-section1">
            <div class="form-box">
                <div class="form-value">
                    <form action="phpenhancements.php" autocomplete="off" method="post">
                        <h2 class="signbody-head">Login</h2>
                        <?php
                        // print the error message
                        if (isset($error[3])) echo $error[3];
                        if (isset($error[4])) echo $error[4];
                        if (isset($error[5])) echo $error[5];
                    
                        ?>
                         <?php if (isset($error[0])) echo $error[0]; ?>
                        <div class="input-div"> 
                            <ion-icon name="mail-outline"></ion-icon>
                            <input class="inputN" type="text" name="email" id="email" value="<?php echo $email ?>">
                            <label class="label" for="email">Email</label>
                        
                        </div>
                        <?php if (isset($error[1])) echo $error[1]; ?>
                        <div class="input-div">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                            <input class="inputN" type="password" name="password" id="password">
                            <label class="label" for="password">Password</label>
                        </div>
                    
                        <?php 
                         if ( $_SESSION["login_attempts"] > 3 ){ 
                             $_SESSION["locked"]  = time();   
                             echo "<p style=\"color: red;\">Please wait for 10 seconds</p>";
                         } else {
                        ?>
                          <input class="submit-button" type="submit" value="Login" name="submit">
                            <?php } ?>                      
                        
                        <div class="register">
                            <p>Don't have an account yet ? <a href="phpenhancements2.php">Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <?php include_once 'footer.inc';?>
</body>

</html>