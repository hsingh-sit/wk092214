<?php
if(isset($_COOKIE["SessionID"])){
    $cipher = "aes-128-ofb";
    $key = "This is the key!";
    $ivlen = openssl_cipher_iv_length($cipher);
    $iv = hex2bin(substr($_COOKIE["SessionID"], 0, $ivlen*2));
    $ciphertext = hex2bin(substr($_COOKIE["SessionID"], $ivlen*2));
    $plaintext = openssl_decrypt($ciphertext, $cipher, $key, $options=0, $iv);
    if (substr($plaintext, 0, 8) != "username") {
        echo "Invalid SessionID.";
    }
    else {
        $u = substr($plaintext, 9);
        if (strcmp($u, "user15") != 0) {
            echo "Hello user " . $u . ".";
        }
        else {
            echo "flag{u5er15}";
        }
    }
}
else {
    echo "You are not authorized to view this page.";
}
?>
