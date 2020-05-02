<?php
$file = fopen("token.txt","w");
fwrite($file,"$_GET['token']\n");
fclose($file);
?>
