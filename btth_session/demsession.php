<?php
session_start( );
if (isset($_SESSION["count"]))
$_SESSION["count"] = $_SESSION["count"] + 1;
else
$_SESSION["count"] = 1;

print "Bạn đã truy cập trang này " .
$_SESSION['count']
. "lần.";
?>