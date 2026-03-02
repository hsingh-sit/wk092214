<?php
// LINE 1: NO SPACES/TABS ABOVE <?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['authorized']) || $_SESSION['authorized'] !== true) {
    http_response_code(403);
    exit('You are not authorized to view this page.');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Session Management Lab</title>
    <style>body{font-family:Arial;padding:20px;}</style>
</head>
<body>
    <h1>🔐 Session Management Lab - SOURCE CODE BELOW</h1>
    <p><b>Right-click → View Page Source</b> to see vulnerable PHP code!</p>
    
    <h3>Lab Tasks:</h3>
    <ul>
        <li><a href="login.php">Login (sets session)</a></li>
        <li><a href="chase.php">Chase protected page</a></li>
        <li><a href="session-crypto.php">Crypto session forgery</a></li>
    </ul>
    
    <hr>
    <h3>🕵️ SOURCE CODE (Attack this!)</h3>
    <pre style="background:#f4f4f4;padding:20px;font-size:14px;">
<?php
// DELIBERATELY VULNERABLE CODE - Students analyze this
highlight_string('<?php
// BAD: session_start() after output possible
if(isset($_SESSION["user"])){
    echo "Hello " . $_SESSION["user"];
} else {
    echo "You are not authorized to view this page.";
}
?>');
?>
    </pre>
    
    <p><b>Student Task:</b> Identify 3 session fixation vulns above</p>
</body>
</html>
