<!-- User for each Email Register-->
 <?php  

session_start();
include("settings.php");
// Create a database connection
$conn = new mysqli($host, $user, $pwd, $sql_db);
// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$table = 'friends';
$stmt = $conn->prepare("SELECT password, profile_name FROM $table WHERE friend_email = ?");
$email = $_SESSION['email'];
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    $user_data = $result->fetch_assoc();
    $profile_name = $user_data['profile_name'];
} else {
    $profile_name = "Unknown"; // Set a default value if the profile name is not found
}
$_SESSION; 
?> 
<!-- HTML Section -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style\manage.css">
    <title>Manage</title>
</head>
<body>
    <h1>Welcome to Manage Page !</h1>
    <br>
    <?php echo "<div class='greet'>Hello, $profile_name !</div>";  ?>
<br> 
<!-- Display Apply Form  -->
<?php 
    require_once ("settings.php");

    $conn = @mysqli_connect($host,
        $user,
        $pwd,
        $sql_db
    );

    if (!$conn){
        echo "<p>Database connection failure</p>";
    } else {
        $sql_table="Job";
        $query = "SELECT EOInumber, Jobnumber, Firstname, Lastname, DOB, Gender, Streetaddress, Town, State, Postcode, Emailaddress, Phonenumber, Otherskills, SkillsHTML, SkillsCSS, SkillsJavaScript, SkillsPHP FROM Job"; 
        $result = mysqli_query($conn, $query);
        if(!$result){
            echo "<p>Something is wrong with ", $query, "</p>";
        } else {
            echo "<table border=\"1\">\n";
            echo "<tr>\n "
                ."<th scope=\"col\">EOInumber</th>\n"
                ."<th scope=\"col\">Jobnumber</th>\n"
                ."<th scope=\"col\">Firstname</th>\n"
                ."<th scope=\"col\">Lastname</th>\n" 
                ."<th scope=\"col\">DOB</th>\n"
                ."<th scope=\"col\">Gender</th>\n"
                ."<th scope=\"col\">Streetaddress</th>\n"
                ."<th scope=\"col\">Town</th>\n" 
                ."<th scope=\"col\">State</th>\n"
                ."<th scope=\"col\">Postcode</th>\n"
                ."<th scope=\"col\">Emailaddress</th>\n"
                ."<th scope=\"col\">Phonenumber</th>\n" 
                ."<th scope=\"col\">Otherskills</th>\n"
                ."<th scope=\"col\">SkillsHTML</th>\n"  
                ."<th scope=\"col\">SkillsCSS</th>\n" 
                ."<th scope=\"col\">SkillsJavaScript</th>\n"
                ."<th scope=\"col\">SkillsPHP</th>\n"
                ."</tr>\n";
            while ($row = mysqli_fetch_assoc($result)){
                echo "<tr>\n";
                echo "<td>",$row["EOInumber"],"</td>\n ";
                echo "<td>",$row["Jobnumber"],"</td>\n ";
                echo "<td>",$row["Firstname"],"</td>\n ";
                echo "<td>",$row["Lastname"],"</td>\n "; 
                echo "<td>",$row["DOB"],"</td>\n ";
                echo "<td>",$row["Gender"],"</td>\n ";
                echo "<td>",$row["Streetaddress"],"</td>\n ";
                echo "<td>",$row["Town"],"</td>\n ";
                echo "<td>",$row["State"],"</td>\n ";
                echo "<td>",$row["Postcode"],"</td>\n ";
                echo "<td>",$row["Emailaddress"],"</td>\n ";
                echo "<td>",$row["Phonenumber"],"</td>\n "; 
                echo "<td>",$row["Otherskills"],"</td>\n ";
                echo "<td>",$row["SkillsHTML"],"</td>\n ";
                echo "<td>",$row["SkillsCSS"],"</td>\n ";
                echo "<td>",$row["SkillsJavaScript"],"</td>\n ";
                echo "<td>",$row["SkillsPHP"],"</td>\n ";
                echo "</tr>\n";
            }
            echo "</table>\n ";
            mysqli_free_result($result);
        }
        mysqli_close($conn);
    }
?>
<br>
<br>
<br>
 
<button>
  <a href="logout.php"class="text">Log Out</a> </div>
</button>



<?php include "./footer.inc" ?>
</body>
</html>