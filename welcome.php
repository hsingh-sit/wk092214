<?php
if(isset($_COOKIE["SessionID"])){
    $c = base64_decode($_COOKIE["SessionID"]);
    $u = substr($c, 5, strpos($c, ';') - 5);
    $h = substr($c, -41, -1);
    $str = "user=" . $u;
    $r = hash('SHA1', $str);
    if (strcmp($h, $r) != 0) {
        echo "Invalid SessionID.";
    }
    else {
        if (strcmp($u, "root") != 0) {
            echo "Hello user " . $u . ".";
        }
        else {
            echo "flag{he110r007}";
        }
    }
}
else {
    echo "You are not authorized to view this page.";
}
?>
