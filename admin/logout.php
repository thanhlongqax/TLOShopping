<?php
session_start();
$_SESSION['alogin']=="";
session_unset();
//session_destroy();
$_SESSION['errmsg']="Bạn Đăng Xuất Thành Công";
?>
<script language="javascript">
document.location="index.php";
</script>
