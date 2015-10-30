
<?php
session_start();
$name=$_SESSION["user"];
if(is_null($_SESSION["user"])){
	echo '<meta http-equiv="refresh" content="0; url=http://anakt73.os.cs.teiath.gr:10080/web/final/login.html" />';
}
?>
<html>

<style>
 #nav {
      width: 100%;
      float: left;
      margin: 0 0 3em 0;
      padding: 0;
      list-style: none;
      background-color: #f2f2f2;
      border-bottom: 1px solid #ccc; 
      border-top: 1px solid #ccc; }
   #nav li {
      float: left; }
   #nav li a {
      display: block;
      padding: 8px 15px;
      text-decoration: none;
      font-weight: bold;
      color: #069;
      border-right: 1px solid #ccc; }
   #nav li a:hover {
      color: #c00;
      background-color: #fff; }
body {
    background-image: url("backgroundimage.jpg");
     no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
#wrap {
      width: 750px;
      margin: 0 auto;
      background-color: #fff; }
   h1 {
      font-size: 1.5em;
      padding: 1em 8px;
      color: #333;
      background-color: #069;
      margin: 0; }
   #content {
      padding: 0 50px 50px; }
	  
div.transbox
{
  margin: 40px;
  background-color: #ffffff;
  border: 1px solid black;
  opacity:0.5;
  filter:alpha(opacity=60); 
}
div.transbox p
{
  margin: 20%;
  font-weight: bold;
  color: #000000;
}
</style>
<body>
<ul id="nav">
<li><a href="http://anakt73.os.cs.teiath.gr:10080/web/final/mainpage.php">Main Page</a></li>
	<li><a href="http://anakt73.os.cs.teiath.gr:10080/web/final/aboutus.php">About Us</a></li>
	<li><a href="http://anakt73.os.cs.teiath.gr:10080/web/final/offers.php">OFFERS</a></li>
	<li><a href="http://anakt73.os.cs.teiath.gr:10080/web/final/booking.php">BOOK A ROOM</a></li>
	<li><a href="http://anakt73.os.cs.teiath.gr:10080/web/final/mybookings.php">MY BOOKINGS</a></li>
	<li><a href="http://anakt73.os.cs.teiath.gr:10080/web/final/hotels.php">OUR HOTELS</a></li>
	<li><a href="http://anakt73.os.cs.teiath.gr:10080/web/final/logout.php">Logout</a></li>
</ul>
<img src="banner.jpg" alt="Mountain View" style="width:1080px;height:110px;">
<div class="transbox">
hello <?php echo $_SESSION["user"];?>
<?php
$servername = "localhost";
$username = "anakt73";
$password = "anakt73";
$dbname = "test";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

$sql3="SELECT * FROM hotel ";

$result3 = $conn->query($sql3);
echo '<center>';
echo '<font color="red">HOTEL INFO</font>';
if ($result3->num_rows > 0) {
    // output data of each row
    while($row = $result3->fetch_assoc()) {
		
		echo "<br>";
		$hotelid=$row['hotelid'];
		echo '<tr>
		<td>'."HOTEL: ".$row['name'].'</td>'."<br>";
		echo '
		<td>'."CITY: ".$row['city'].'</td>'."<br>";
		echo '
		<td>'."Telephone: ".$row['telephone'].'</td>'."<br>";
		echo '
		<td>'."WEB SITE: ".$row['website'].'</td>'."<br>";
		echo '
		<td>'."STARS: ".$row['stars']."/5".'</td>'."<br>";
		echo '
		<td>'."INFO: ".'<font color="blue" size="5">'.$row['extras'].'</font>'.'</td>'."<br>";

		
		
		 		
    }
	echo "<br>";

} else {
    echo "0 results";
}
?>
</body>
</html>
