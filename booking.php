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
<h1><font color="red">YOU CAN ONLY  BOOK FOR 20015</font></h1>
<center>
<form action="findrooms.php" method="GET"  accept-charset="UTF-8"
	enctype="application/x-www-form-urlencoded" autocomplete="off" novalidate>
<br>FROM
<select name="month1" id="month1" onchange="" size="1">
    <option value="01">January</option>
    <option value="02">February</option>
    <option value="03">March</option>
    <option value="04">April</option>
    <option value="05">May</option>
    <option value="06">June</option>
    <option value="07">July</option>
    <option value="08">August</option>
    <option value="09">September</option>
    <option value="10">October</option>
    <option value="11">November</option>
    <option value="12">December</option>
</select>

<!-- Day dropdown -->
<select name="day1" id="day1" onchange="" size="1">
    <option value="01">01</option>
    <option value="02">02</option>
    <option value="03">03</option>
    <option value="04">04</option>
    <option value="05">05</option>
    <option value="06">06</option>
    <option value="07">07</option>
    <option value="08">08</option>
    <option value="09">09</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
</select>
</br>


<br>UNTIL
<select name="month2" id="month2" onchange="" size="1">
    <option value="01">January</option>
    <option value="02">February</option>
    <option value="03">March</option>
    <option value="04">April</option>
    <option value="05">May</option>
    <option value="06">June</option>
    <option value="07">July</option>
    <option value="08">August</option>
    <option value="09">September</option>
    <option value="10">October</option>
    <option value="11">November</option>
    <option value="12">December</option>
</select>

<!-- Day dropdown -->
<select name="day2" id="day2" onchange="" size="1">
    <option value="01">01</option>
    <option value="02">02</option>
    <option value="03">03</option>
    <option value="04">04</option>
    <option value="05">05</option>
    <option value="06">06</option>
    <option value="07">07</option>
    <option value="08">08</option>
    <option value="09">09</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
</select>
</br>

<br>CATEGORY
<select name="category" id="category" onchange="" size="1">
    <option value="single bed">Single Bed</option>
    <option value="double bed">Double Bed</option>
    <option value="triple bed">Triple Bed</option>
 
</select>


</br>

<input type="submit" name="go" class="login login-submit" value="go">
  </form>
</center>
</body>
</html>