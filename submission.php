<?php
session_start();
require('conn.php');
if(isset($_POST['submit']) && isset($_FILES['img']) && !empty($_POST['animal']) && !empty($_POST['cat'])  && !empty($_POST['captha']) && !empty($_POST['des']) && !empty($_POST['life']))
{
	$name=strip_tags($_POST['animal']);
	$cat=strip_tags($_POST['cat']);
	$img_name=$_FILES['img']['name'];
	$img_size=$_FILES['img']['size'];
	$img_tmp=$_FILES['img']['tmp_name'];
	$img_type=$_FILES['img']['type'];
	$des=strip_tags($_POST['des']);
	$life=strip_tags($_POST['life']);
	$captha=strip_tags($_POST['captha']);
	$date=date('Y-m-d');
	$uploadOk = 1;
if($_SESSION['CODE']==$captha)
{
	if ($img_size > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}
if($img_type != "image/jpg" && $img_type != "image/png" && $img_type != "image/jpeg") {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}
	if($uploadOk == 0)
	{
		echo "not insert";
    }
else{
	move_uploaded_file($img_tmp, "files/".$img_name);
	$rs=mysqli_query($con,"INSERT INTO ani_info (name,cat,image,des,life,insert_date) VALUES ('$name','$cat','$img_name','$des','$life','$date')");
		echo "<script>location.href='animal.php'</script>";
}

}
else{
	echo "invalid captha";
}

}
?>