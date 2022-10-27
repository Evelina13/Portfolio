<?php 
session_start();
$k1=$_POST['ad'];
$k2=$_POST['ad2'];

 include '../dbconn.php';
 $sql="SELECT * FROM `admin` WHERE `login`='$k1' AND `password`='$k2'";
$res=mysqli_query($conn,$sql);
$tox=mysqli_num_rows($res);


if($tox>0){

    $_SESSION['log']=true;

	 echo "<script>window.location.href='../index_admin.php'</script>";

}else{
	echo"cka";
}


 ?>