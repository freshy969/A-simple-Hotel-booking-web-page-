<?php header("content-type: text/html;charset=utf-8") ?>

<?php
$servername = "localhost";
$username = "anakt73";
$password = "anakt73";
$dbname = "test";
$user=$_POST['user'];
$pass=$_POST['pass'];
$found=0;
session_start();
$_SESSION["user"] = $user;
echo $user;
echo $pass;

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




$sql = "SELECT * FROM users ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<br>";
		$dbusername=$row['username'];
		$dbpass=$row['password'];
		if($dbusername==$user && $dbpass==$pass){
			$found=1;
			echo "DONE";
			
		}
		
       // echo    $row['uid']." ". $row['name']." ". $row['surname']." ". $row['email']." ". $row['sex']." ". $row['telefone']." ". $row['username']." ". $row['password']." ";
		
    }
	echo "<br>";
} else {
    echo "0 results";
}
if($found==1){
	
	echo '<meta http-equiv="refresh" content="0; url=http://anakt73.os.cs.teiath.gr:10080/web/final/mainpage.php" />';
}
if($found==0){
	echo "Wrong USER NAME /PASSWORD";
	echo '<meta http-equiv="refresh" content="1; url=http://anakt73.os.cs.teiath.gr:10080/web/final/login.html" />';
}
$conn->close();

?>


