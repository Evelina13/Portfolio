<?php 

include 'dbconn.php';


if (isset($_POST['a1'])&&isset($_POST['a2'])&&isset($_POST['a3'])&&isset($_POST['a4'])&&isset($_POST['a5'])) {
	
$e1=$_POST['a1'];
$e2=$_POST['a2'];
$e3=$_POST['a3'];
$e4=$_POST['a4'];
$e5=$_POST['a5'];



// echo $e1. "<hr>" .$e2."<hr>" .$e3."<hr>" .$e4."<hr>" .$e5;
include "dbconn.php";
$sql="UPDATE `coffee` SET `img1`='$e1',`img2`='$e2',`img3`='$e3',`img4`='$e4',`img5`='$e5' WHERE `id`='1'";
$res=mysqli_query($conn,$sql);
header('location:index_admin.php');







}


if (isset($_POST['at'])&&isset($_POST['ra'])&&isset($_POST['por'])) {


$p1=$_POST['at'];
$p2=$_POST['ra'];
$p3=$_POST['por'];
$p4='';

if (empty($_POST['pp'])) {
    $p4="no";
}else{
    $p4=$_POST['pp'];
}

$p5=$_POST['aw'];

 // echo $p1. "<hr>" .$p2. "<hr>".$p3."<hr>".$p4."<hr>" .$p5;
include "dbconn.php";
$sql="INSERT INTO `portfolio` (`text1`,`text2`,`img`,`top`,`type`) VALUES ('$p1','$p2','$p3','$p4','$p5')";
$res=mysqli_query($conn,$sql);
header('location:index_admin.php');




}



if (isset($_POST['aa'])&&isset($_POST['rr'])&&isset($_POST['gal'])&&isset($_POST['id'])&&isset($_POST['aq'])) {


$e1=$_POST['aa'];
$e2=$_POST['rr'];
$e3=$_POST['gal'];
$id=$_POST['id'];
$qq=$_POST['aq'];
$p4='';

if (empty($_POST['ppp'])) {
    $p4="no";
}else{
    $p4=$_POST['ppp'];
}



// echo $e1. "<hr>" .$e2. "<hr>".$e3."<hr>" .$id."<hr>" .$p4;


include "dbconn.php";
$sql="UPDATE  `portfolio` SET `text1`='$e1',`text2`='$e2',`img`='$e3', `top`='$p4', `type`='$qq' WHERE `id`='$id'";
$res=mysqli_query($conn,$sql);
header('location:index_admin.php');



}


if (isset($_POST['aba'])&&isset($_POST['rar'])&&isset($_POST['gal'])){

$e1=$_POST['aba'];
$e2=$_POST['rar'];
$e3=$_POST['gal'];
// echo $e1. "<hr>" .$e2. "<hr>".$e3;

include "dbconn.php";
$sql="INSERT INTO `gallery` (`text1`,`text2`,`img`) VALUES ('$e1','$e2','$e3')";
$res=mysqli_query($conn,$sql);
header('location:index_admin.php');



}


if (isset($_POST['aaa'])&&isset($_POST['rrr'])&&isset($_POST['gaal'])&&isset($_POST['iid'])){



$e1=$_POST['aaa'];
$e2=$_POST['rrr'];
$e3=$_POST['gaal'];
$id=$_POST['iid'];

// echo $e1. "<hr>" .$e2. "<hr>" .$e3. "<hr>" .$id;


include "dbconn.php";
$sql="UPDATE `gallery` SET `text1`='$e1',`text2`='$e2',`img`='$e3' WHERE `id`='$id'";
$res=mysqli_query($conn,$sql);
header('location:index_admin.php');
}




if (isset($_POST['tax1'])) {
	

  $p=$_POST['tax1'];


include "dbconn.php";
$sql="SELECT * FROM `portfolio` WHERE `text1` LIKE '%$p%' ";
$res=mysqli_query($conn,$sql);
while ($print=mysqli_fetch_assoc($res)){
$we=<<<sa

                    <div class="col-lg-4 col-sm-6 col-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1-$print[id]">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/$print[img]" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">$print[text1]</div>
                                <div class="portfolio-caption-subheading text-muted">$print[text2]</div>
                            </div>
                        </div>
                    </div>

 <div class="portfolio-modal modal fade" id="portfolioModal1-$print[id]" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">$print[text1]</h2>
                                    <p class="item-intro text-muted">$print[text2]</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/$print[img]" alt="..." />
                 
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
sa;

echo $we;
}






}



if (isset($_POST['por_id'])){
	$id=$_POST['por_id'];
    $ao=$_POST['ad'];


	include "dbconn.php";
	$sql="DELETE FROM `portfolio` WHERE `id`='$id'";
	$res=mysqli_query($conn,$sql);


    if($res){

        unlink($ao);
    }

}


if (isset($_POST['gall_id'])){

$id=$_POST['gall_id'];
$ap=$_POST['at'];


include "dbconn.php";
$sql="DELETE FROM `gallery` WHERE `id`='$id'";
$res=mysqli_query($conn,$sql);

if ($res) {
    unlink($ap);
}

}



if (isset($_POST['page'])){

$e1=$_POST['page'];

include "dbconn.php";
$sql="SELECT * FROM `portfolio` LIMIT $e1,3";
$res=mysqli_query($conn,$sql);
while ($print=mysqli_fetch_assoc($res)){
$we=<<<sa

                    <div class="col-lg-4 col-sm-6 col-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1-$print[id]">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/$print[img]" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">$print[text1]</div>
                                <div class="portfolio-caption-subheading text-muted">$print[text2]</div>
                            </div>
                        </div>
                    </div>

 <div class="portfolio-modal modal fade" id="portfolioModal1-$print[id]" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">$print[text1]</h2>
                                    <p class="item-intro text-muted">$print[text2]</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/$print[img]" alt="..." />
                 
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
sa;

echo $we;
}


}


if (isset($_FILES['filep'])) {
	$trip=$_POST['trip'];
    $anun=$_FILES['filep']['name'];


$jamtex=$_FILES['filep']['tmp_name'];



$lol=explode('.',$anun);
$name=time().'.'.end($lol);



if(end($lol)=='jpg'||end($lol)=='jpeg'||end($lol)=='png'){

$chanaparh="assets/img/".$trip."/".$name;
move_uploaded_file($jamtex, $chanaparh);

echo $name;
}


}











 ?>