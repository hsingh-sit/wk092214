<?php
// NO whitespace/spaces before this line!
// Start session FIRST (before ANY output)
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// All header/cookie logic here - NO echo/print yet
if (!isset($_SESSION['authorized']) || $_SESSION['authorized'] !== true) {
    // Redirect or deny - NO output yet
    http_response_code(403);
    exit('You do not have permission to access this page');
}

// ONLY NOW output HTML/content
?>
<!DOCTYPE html>
<html>
<head><title>Chase Lab - Authorized</title></head>
<body>
<h2>✅ Access Granted</h2>
<p>Session active. Attack this page with Burp Suite!</p>
<!-- Your lab content here -->
</body>
</html>
