<!-- https://getbootstrap.com/docs/4.0/components/dropdowns/ -->
<?php 
session_start();
@$sess=$_SESSION['log'];

if ($sess==true) {
    


 ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Agency - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="dist/css/lightgallery.css">
        <link rel="stylesheet" type="text/css" href="dist/assets/owl.carousel.min.css">

    <link rel="stylesheet" href="fontello/css/fontello.css">
    <link rel="stylesheet" href="css/style.css">
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->







  <section class="section-intro p-0">
    <div class="container-fluid p-0">
  
<?php 
include "dbconn.php";
$sql="SELECT * FROM `coffee`";
$res=mysqli_query($conn,$sql);
while ($print=mysqli_fetch_assoc($res)){
$we=<<<sa


        <div class="photo-slider-wrap">
            <div class="photo-slider">
                <div class="back-img active" style="background-image: url('assets/img/carousel/$print[img1]')">
                   
                </div>
                <div class="back-img" style="background-image: url('assets/img/carousel/$print[img2]')">
                   
                </div>
                <div class="back-img" style="background-image: url('assets/img/carousel/$print[img3]')">
                   
                </div>
                <div class="back-img" style="background-image: url('assets/img/carousel/$print[img4]')">
                   
                </div>
                <div class="back-img" style="background-image: url('assets/img/carousel/$print[img5]')">
                   
                </div>
            </div>

            <div class="slider-arrow slide-next" id="slide-next">
                <i class="icon icon-right-open-big"></i>
            </div>
            <div class="slider-arrow slide-prev" id="slide-prev">
                <i class="icon icon-left-open-big"></i>
            </div>
        </div>

        <div class="photo-slider-thumb">
            <div>
                <div class="back-img" style="background-image: url('assets/img/carousel/$print[img1]')">
                   
                </div>
            </div>
            <div>
                <div class="back-img" style="background-image: url('assets/img/carousel/$print[img2]')">
                   
                </div>
            </div>
            <div>
                <div class="back-img" style="background-image: url('assets/img/carousel/$print[img3]')">
                   
                </div>
            </div>
            <div>
                <div class="back-img" style="background-image: url('assets/img/carousel/$print[img4]')">
                   
                </div>
            </div>
            <div>
                <div class="back-img" style="background-image: url('assets/img/carousel/$print[img5]')">
                   
                </div>
            </div>
        </div>
sa;

}
echo $we;

?>

    </div>
</section>


<div class="eee">
    
<div class="tti"><img src="assets/38.png" width="100%"></div>
<div class="tti2">
    
    <img src="assets/38.png" width="100%">
</div>

</div>




    <div class="text-center pt-5">
                <button data-bs-toggle="collapse" data-bs-target="#demoo" class="btn btn-dark">Collapsible</button>

<div id="demoo" class="collapse col-lg-10 mx-auto">
    <div class="row">
        
    <div class="das q col-lg-2 mx-auto"></div>
    <div class="das w col-lg-2 mx-auto"></div>
    <div class="das e col-lg-2 mx-auto"></div>
    <div class="das r col-lg-2 mx-auto"></div>
    <div class="das t col-lg-2 mx-auto"></div>
    </div>


<form action="action.php" method="post">
    <input type="text" class="vl" name="a1" id="qq">
    <input type="text" class="vl" name="a2" id="ww">
    <input type="text" class="vl" name="a3" id="ee">
    <input type="text" class="vl" name="a4"id="rr">
    <input type="text" class="vl" name="a5" id="tt">

    <button class="da">hello</button>
 </form>
     <input type="file" class="pp form-control" data-trip='carousel'>
    </div>
   
    <br>


</div>

        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                      <i class="fas fa-hotel fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">E-Commerce</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-suitcase fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Responsive Design</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Web Security</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                </div>
            </div>


<div class="carousel-wrap">
  <div class="owl-carousel">


<?php 
include "dbconn.php";
$sql="SELECT * FROM `portfolio` WHERE `top`='yes'";
$res=mysqli_query($conn,$sql);
while ($print=mysqli_fetch_assoc($res)){
$ee=<<<gg




    <div class="item"><img src="assets/img/portfolio/$print[img]"></div>






gg;

echo $ee;
}

?>

  </div>
</div>










        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">




 <div class="text-center">
 <button data-bs-toggle="collapse" data-bs-target="#demon" class="btn btn-dark">Collapsible</button>

    <div id="demon" class="collapse col-lg-6 mx-auto">

<form action="action.php" method="post">
        text1
        <input type="text" name="at" class=' form-control'> 
          text2
          <input type="text" name="ra" class=' form-control'>
          <hr>
          top
          <br>
          <input type="checkbox" name="pp" value="yes" id="">
          <hr>
       
          <select name="aw">
             <option value="inbound">inbound</option>
            <option value="outbound">outbound</option>  

         </select>
         <hr>
          image
        <input type="file" class="pp form-control" data-trip='portfolio'>

        <div class="sa col-lg-5 mx-auto ins"></div>
        <input type="text" name="por" id="" class="por-val">

        <button class="btn btn-success">save</button>

</form>


    </div>
   
    <br>

          <label>
         
                        
                <input type="text" class="kk" placeholder="search...">
                <i class="fas fa-search"></i>
                    </label>

                    <h2 class="section-heading text-uppercase">Portfolio</h2>
                    <button class="sni btn btn-info type"  data-name='inbound'>Inbound tours</button>
                    <button class="sni2 btn btn-info type" data-name="outbound">Outbound tours</button>
                    <button class="sni3 btn btn-info type" data-name='all'>All</button>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row tpich">


<?php 
include "dbconn.php";
$sql="SELECT * FROM `portfolio` ";
$res=mysqli_query($conn,$sql);
while ($print=mysqli_fetch_assoc($res)){
$we=<<<sa

                    <div class="col-lg-4 col-sm-6 mb-4 portfolio $print[type]">
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

?>



</div>


<!-- <div class="hello text-center"> -->
    
<?php 
/*include "dbconn.php";
$sql="SELECT * FROM `portfolio`";
$res=mysqli_query($conn,$sql);
$tox=mysqli_num_rows($res);
// echo $tox;
for ($i=1; $i <=ceil($tox/3); $i++) { 
    
    echo "<button class='hi'>$i</button>";
}
*/

 ?>






<!-- </div> -->







<table class="table">
    <tr>
        <td>Text1</td>
        <td>Text2</td>
        <td>image</td>
        <td>Action</td>
    </tr>


<?php 
include "dbconn.php";
$sql="SELECT * FROM `portfolio`";
$res=mysqli_query($conn,$sql);
while ($print=mysqli_fetch_assoc($res)){
$we=<<<sa
    <tr>
        <td>$print[text1]</td>
        <td>$print[text2]</td>
        <td> <img src="assets/img/portfolio/$print[img]" width='200' />
     </td>
        <td
        ><button class="btn-outline-danger btn del-port" id='$print[id]'>Delete</button>



<button data-bs-toggle="collapse" data-bs-target="#lolo$print[id]" class="btn-outline-info btn">EDIT</button>

    <div id="lolo$print[id]" class="collapse col-lg-6 mx-auto">
       




<form action="action.php" method="post">
        text1
        <input type="text"  name="aa" class='form-control' value='$print[text1]'> 
          text2
          <input type="text" name="rr" class= 'form-control' value='$print[text2]'>
          
            <hr>
          top
          <br>
          <input type="checkbox" name="ppp" class='$print[top]' value="yes" id="">
          <hr>
     <select name="aq">
             <option value="inbound">inbound</option>
            <option value="outbound">outbound</option>  

         </select>
         <hr>

          image


        <input type="file" class=" pp form-control" data-trip='portfolio'>
        <div class="sa sdaa col-lg-5 mx-auto">

     

        </div>

       <input type="hidden" name="gal" id="" class="por-val"  value='$print[img]'>
       <input type="hidden" name="id" value='$print[id]'>
  


  <button class="btn btn-success">save</button>


       


</form> 


        </td>
    </tr>

                                   
sa;

echo $we;
}

?>




</table>
</div>




        </section>
         <div class="text-center">
 <button data-bs-toggle="collapse" data-bs-target="#demo" class="btn btn-dark">Collapsible</button>

    <div id="demo" class="collapse col-lg-6 mx-auto">
       




<form action="action.php" method="post">
        text1
        <input type="text"  name="aaa" class='form-control'> 
          text2
          <input type="text" name="rar" class= 'form-control'>
          image
        <input type="file" class="pp form-control" data-trip='gallery'>
        <div class="sda sa col-lg-5 mx-auto"></div>
       <input type="text" name="gal" id="" class="por-val">
  <button class="btn btn-success">save</button>

</form> 

    </div>
   
    <br>

 </div>
 </div>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
               





    <div class="demo-gallery">
            <ul id="lightgallery" class="list-unstyled row">

<?php 
include "dbconn.php";
$sql="SELECT * FROM `gallery`";
$res=mysqli_query($conn,$sql);
while ($print=mysqli_fetch_assoc($res)){
$to=<<<wo





                <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="assets/img/gallery/$print[img]" data-src="assets/img/gallery/$print[img]"  data-sub-html="<h4>$print[text1]</h4><p>$print[text2]</p>">
                    <a href="">
                        <img class="img-fluid" src="assets/img/gallery/$print[img]" alt="Thumb-1">
                    </a>

                </li>


wo;
echo $to;
}

 ?>


               
            </ul>
        </div>



<table class="table">
    <tr>
        <td>Text1</td>
        <td>Text2</td>
        <td>image</td>
        <td>Action</td>
    </tr>


<?php 
include "dbconn.php";
$sql="SELECT * FROM `gallery`";
$res=mysqli_query($conn,$sql);
while ($print=mysqli_fetch_assoc($res)){
$to=<<<wo
    <tr>
        <td>$print[text1]</td>
        <td>$print[text2]</td>
        <td> <img src="assets/img/gallery/$print[img]" width='200' />
     </td>
      
              <td><button class="btn-outline-danger btn del-t" id='$print[id]'>Delete</button></td>
              <td>



<button data-bs-toggle="collapse" data-bs-target="#lolo$print[id]" class="btn-outline-info btn">EDIT</button>

    <div id="lolo$print[id]" class="collapse col-lg-6 mx-auto">



<form action="action.php" method="post">
        text1
        <input type="text"  name="aaa" class='form-control'  value='$print[text1]'> 
          text2
          <input type="text" name="rrr" class= 'form-control' value='$print[text2]'>
          image
        <input type="file" class="pp form-control" data-trip='gallery'>
        <div class="sa spa col-lg-5 mx-auto"> </div>
       <input type="hidden" name="gaal" id="" class="por-val" value='$print[img]'>

       <input type="hidden" name="iid" value='$print[id]'>
  <button class="btn btn-success">save</button>

</form> 

</td>
    </tr>








                                   
wo;

echo $to;
}

?>




</table>

















            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle ff" src="assets/img/team/1.jpg" alt="..." />
                            <h4>Parveen Anand</h4>
                            <p class="text-muted">Lead Designer</p>
                            <a class="btn btn-dark btn-social mx-2 nn" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2 nn" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2 nn" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle ff" src="assets/img/team/2.jpg" alt="..." />
                            <h4>Diana Petersen</h4>
                            <p class="text-muted">Lead Marketer</p>
                            <a class="btn btn-dark btn-social mx-2 nn" href="#!" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2 nn" href="#!" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2 nn" href="#!" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle ff" src="assets/img/team/3.jpg" alt="..." />
                            <h4>Larry Parker</h4>
                            <p class="text-muted">Lead Developer</p>
                            <a class="btn btn-dark btn-social mx-2 nn" href="#!" aria-label="Larry Parker Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2 nn" href="#!" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2 nn" href="#!" aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div>
            </div>
        </section>
        <!-- Clients-->

        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2022</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
       
     
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/jquery.js"></script>
        <script src="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/js/lightgallery.js"></script>
 <script src="https://cdn.rawgit.com/sachinchoolur/lg-fullscreen.js/master/dist/lg-fullscreen.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
         <script>
            lightGallery(document.getElementById('lightgallery'));
</script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
<script src="js/jquery-3.2.0.min.js"></script>
<script src="build/clip_carousel.js"></script>

<script src="dist/owl.carousel.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
<?php 
}else{
  echo "<script>window.location.href='admin/index.html'</script>";

}


 ?>