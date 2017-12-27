<?php
session_start();
$code = $_GET["a"];
if($code == $_SESSION["CAPTCHACODE"]) {
  header('HTTP/1.0 200 OK');
} else {
  header('HTTP/1.0 512 Not Found');
}
