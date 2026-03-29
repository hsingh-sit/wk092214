<?php
// Prevent caching
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");


// Start a session
session_unset();
session_start();

//Get the current Unix epoch timestamp 
$timestamp = time();

//Set the PHPSESSID=current Unix epoch timestamp 
header("Set-Cookie: PHPSESSID=$timestamp; path=/");

//Check PHPSESSID
if(!isset($_COOKIE["PHPSESSID"])) {
  echo "You do not have permission to access this page.";
} else {
	if ($_COOKIE["PHPSESSID"] == "1687226690") {
		echo "flag{c9ebe607e5b56ca961fbaeda9c54adb1}";
  	} else {
		echo "You do not have permission to access this page.";
  	}
}
?>

<html>
<body>
</body>
</html>
