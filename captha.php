<?php
session_start();
//$rand_num=rand(11111,99999);
$chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$rand_num=substr(str_shuffle($chars), 0, 6);
$_SESSION['CODE']=$rand_num;
$layer=imagecreatetruecolor(60,30);
$captha_bg=imagecolorallocate($layer,255,190,190);
imagefill($layer,0,0,$captha_bg);
$captha_text_color=imagecolorallocate($layer,0,0,0);
imagestring($layer,5,5,5,$rand_num,$captha_text_color);
header('Content-Type:image/jpeg');
imagejpeg($layer);
?>