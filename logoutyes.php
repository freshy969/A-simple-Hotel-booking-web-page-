<?php
session_start();
if(is_null($_SESSION["user"])){
	echo '<meta http-equiv="refresh" content="0; url=http://anakt73.os.cs.teiath.gr:10080/web/final/login.html" />';
}
session_destroy();

echo'<meta http-equiv="refresh" content="0; url=http://anakt73.os.cs.teiath.gr:10080/web/final/login.html" />';
?>