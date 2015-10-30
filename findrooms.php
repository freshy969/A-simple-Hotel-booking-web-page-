<?php header("content-type: text/html;charset=utf-8") ?>


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
  opacity:1;
  filter:alpha(opacity=60); 
}
div.transbox p
{
  margin: 20%;
  font-weight: bold;
  color: #000000;
}

table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
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
hello <?php echo $name;
$_SESSION["user"] = $name;?>
<h1><font color="red">results</font></h1>
<center>
<?php
$servername = "localhost";
$username = "anakt73";
$password = "anakt73";
$dbname = "test";




$day1=$_GET['day1'];
$month1=$_GET['month1'];
$day2=$_GET['day2'];
$month2=$_GET['month2'];
$category=$_GET['category'];


if($day1>$day2 or $month1>$month2){
	echo '<h1><font color="red">MISS MATCHING DATES</font></h1>';
	echo'<meta http-equiv="refresh" content="2; url=http://anakt73.os.cs.teiath.gr:10080/web/final/booking.php" />';
}
else{
 echo '<br>';
}



$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


echo'<form action="makethebooking.php" method="get">';


echo'<table style="width:100%">
  <tr>
    <th>ID</th>
    <th>CATEGORY</th>		
    <th>$ PER NIGHT</th>
	<th>HOTEL </th>
	<th>ROOM NUMBER</th>
	<th>AVAILABLE FROM</th>
  </tr>';
//room finding
$sql1 = "SELECT * FROM rooms ";
$result = $conn->query($sql1);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$dbday= substr($row['available'],0,2);
		$dbmonth= substr($row['available'],3,2);
		if($day1 <= $dbday && $month1 <= $dbmonth){
			if($category == $row['category']){
		echo "<br>";
		echo '<tr>
		<td>'.$row['roomid'].'</td>';
		echo '
		<td>'.$row['category'].'</td>';
		echo '
		<td>'.$row['price'].'</td>';
		echo '
		<td>'.$row['name'].'</td>';
		echo '
		<td>'.$row['number'].'</td>';
		echo '
		<td>'.$row['available'].'</td>';
		echo '</tr>';
		echo '
		<td>'.'<input type="checkbox" name="choice" value='.$row['roomid']. '> '.'</td>';
		echo '</tr>';
			}
		}  		
    }
	echo "<br>";

} else {
    echo "0 results";
}

echo'<input type="submit" value="Submit">';
echo '</form>';




$conn->close();

?>
</center>
</body>
</html>