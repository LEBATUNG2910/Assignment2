<?php  
require_once ('./security.php');
$Jobnumber = isset($_POST["Jobnumber"]) ? sanitize_input($_POST["Jobnumber"]) : '';
$Firstname = isset($_POST["Firstname"]) ? sanitize_input($_POST["Firstname"]) : '';
$Lastname = isset($_POST["Lastname"]) ? sanitize_input($_POST["Lastname"]) : '';
$DOB = isset($_POST["DOB"]) ? sanitize_input($_POST["DOB"]) : ''; 
$Gender = isset($_POST["Gender"]) ? sanitize_input($_POST["Gender"]) : ''; 
$Streetaddress = isset($_POST["Streetaddress"]) ? sanitize_input($_POST["Streetaddress"]) : '';
$Town = isset($_POST["Town"]) ? sanitize_input($_POST["Town"]) : ''; 
$State = isset($_POST["State"]) ? sanitize_input($_POST["State"]) : '';
$Postcode = isset($_POST["Postcode"]) ? sanitize_input($_POST["Postcode"]) : '';
$Emailaddress= isset($_POST["Emailaddress"]) ? sanitize_input($_POST["Emailaddress"]) : '';
$Phonenumber = isset($_POST["Phonenumber"]) ? sanitize_input($_POST["Phonenumber"]) : '';
$Otherskills = isset($_POST["Otherskills"]) ? sanitize_input($_POST["Otherskills"]) : '';
$SkillsHTML = isset($_POST["SkillsHTML"]) ? sanitize_input($_POST["SkillsHTML"]) : ''; 
$SkillsCSS = isset($_POST["SkillsCSS"]) ? sanitize_input($_POST["SkillsCSS"]) : '';
$SkillsJavaScript = isset($_POST["SkillsJavaScript"]) ? sanitize_input($_POST["SkillsJavaScript"]) : '';
$SkillsPHP = isset($_POST["SkillsPHP"]) ? sanitize_input($_POST["SkillsPHP"]) : '';
$EOInumber = isset($_POST["EOInumber"]) ? sanitize_input($_POST["EOInumber"]) : '';


require_once("settings.php");
$conn = mysqli_connect($host, $user, $pwd, $sql_db);

if (!$conn) {
    echo "<p>Database connection failure</p>";
} else {
    // $sql_table = 'Job';    
    // $query = "INSERT INTO $sql_table (Jobnumber, Firstname, Lastname, DOB, Gender, Streetaddress, Town, State, Postcode, Emailaddress, Phonenumber, Otherskills, Skills, EOInumber) VALUES ('$Jobnumber', '$Firstname', '$Lastname', '$DOB', '$Gender', '$Streetaddress', '$Town', '$State', '$Postcode', '$Emailaddress', '$Phonenumber', '$Otherskills', '$Skills', '$EOInumber')";
    // $result = mysqli_query($conn, $query);
 
    @$conn->select_db($sql_db); // 
$table = 'Job';
$stmt = $conn->prepare("INSERT INTO $table (Jobnumber, Firstname, Lastname, DOB, Gender, Streetaddress, Town, State, Postcode, Emailaddress, Phonenumber, Otherskills, SkillsHTML, SkillsCSS, SkillsJavaScript, SkillsPHP, EOInumber) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )");
$stmt->bind_param("sssssssssssssssss", $Jobnumber, $Firstname, $Lastname, $DOB, $Gender, $Streetaddress, $Town, $State, $Postcode, $Emailaddress, $Phonenumber, $Otherskills, $SkillsHTML, $SkillsCSS, $SkillsJavaScript, $SkillsPHP, $EOInumber);
$stmt->execute(); // The bind_param() function is used to bind the variables to the placeholders, and the types of the variables are specified using the appropriate type codes (s for string variables). This helps prevent SQL injection attacks and improves security.//


    if ($stmt) {
        echo "<p class=\"ok\">Successfully added New Information record</p>";
    } else {
        echo "<p class=\"wrong\">Something is wrong with the query: " . mysqli_error($conn) . "</p>";
    }

    mysqli_close($conn);
}
?>  