<?php
define('DB_SERVER','sql201.epizy.com');
define('DB_USER','epiz_34192411');
define('DB_PASS' ,'VCPY6vWuHw');
define('DB_NAME', 'epiz_34192411_shopping');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($con, 'UTF8');
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>