
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
  opacity:0.7;
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
hello <?php echo $name;
$_SESSION["user"] = $name;?>
<h1><font color="red">UPCOMING OFFERS</font></h1>
<center>
<br><font color="blue">
Top European Hotels
Europe oozes with things to see and do. Whether you plan a short trip with many stops, or a long trip with few stops, Expedia has accommodations for that and anything in between. It’s easy to find cheap hotel deals for your Europe vacation on Expedia. Choose your European tour with Expedia and save on hotel stays, freeing up cash for Europe activities. The Expedia Best Price Guarantee ensures that you’ll get the cheapest available rates for hotels in Europe.
 </font></br>
<img src="hotel.jpg" >
<br>
Our new associate is coming from FINLAD Stay tuned to learn our new deals and offers 
</br>
<img src="hotel2.jpg" >
<br>
Our new associate is coming from ENGLAND Stay tuned to learn our new deals and offers 
</br>
<img src="hotel3.jpg" >
<br>
Our new associate is coming from GREECE Stay tuned to learn our new deals and offers 
</br>
<img src="hotel4.jpg" >
<br>
Our new associate is coming from ITALY Stay tuned to learn our new deals and offers
</br>

</center>
</body>
</html>
