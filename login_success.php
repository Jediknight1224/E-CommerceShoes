<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:catalog.html');
}
?>
<html>
    <body>
        Login Successful
    </body>
</html>