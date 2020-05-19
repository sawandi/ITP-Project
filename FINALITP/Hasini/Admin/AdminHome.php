<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!--<form method = "post">
<input type = 'submit' name = 'logout' value = "Logout"/>
</form>-->
<?php

	session_start();
	$_SESSION["username"];

	
	//if(isset($_POST['logout']))
	//{
		//session_destroy();
		//header("Location:userLogin.php");
	//}

?>


<!DOCTYPE HTML>
<html>
    <head>
        <title>PetBook</title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <script src="js/jquery.min.js"></script>
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    </head>
    <body>
        
        <div id="fb-root"></div>
<!--<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2"></script>-->
        
        <!-- header -->
        <div class="header">
            <div class="container">
                <div class="header-top">
                    <div class="header-left">
                     
                      
					
			
<div class="sidenav" id="hh1">


</div>
<div class="sidenav1" id="hh2">
<button class="button7" name="updateprofile" style ="float:center"><a href="AdminProfile.php"><font size="5em",font color="black">Profile</font></a></button><br>
 <button class="button1" style ="float:center"><a href="Delete1.php"><font size="5em",font color="black">Search Pet</font></a></button>
<button class="button2" style ="float:center"><a href="Delete1.php"><font size="5em",font color="black">Search PetOwner</font></a></button>
<button class="button3" style ="float:center"><a href="Delete1.php"><font size="5em",font color="black">Appointments</font></a></button>
<button class="button4" style ="float:center"><a href="Delete1.php"><font size="5em",font color="black">Vaccine Details</font></a></button>
<button class="button5" style ="float:center"><a href="Delete1.php"><font size="5em",font color="black">Payments</font></a></button>
<button class="button8" style ="float:center"><a href="StaffRegSelect.php"><font size="5em",font color="black">All Staff Details</font></a></button>
<!--<button class="button9" style ="float:center"><a href="ProductStockSelect.php"><font size="5em",font color="black">ProductStock </font></a></button>-->
<button class="button10" style ="float:center"><a href="StaffRegB.php"><font size="5em",font color="black">StaffRegister </font></a></button>

</div>
                    </div>
                    <div class="header-right">

                    </div>
                    <div class="clearfix"> </div>
                </div>

            </div> 		
        </div>	
        <div class="banner">
            <div class="container">
			<br>
			<!--<input type="text" name="firstname" id ="fnameid" value="<?php echo $fn; ?>" placeholder = "First Name" required>-->
			<br>
                <div class="logo">
                    <a href="MainHome.php"><img src="ProjectImages/icons/dogcat2.jpg" class="img-responsive" alt="" width="200" height="200"/></a>
                </div>
				
            </div>
        </div>
        <!-- header -->
        <!-- nav -->
        <div class="container">
            <div class="navigation">
                <div class="navigation-bar">
                    <div class="head-nav">
                        <span class="menu"> </span>
                        <ul class="cl-effect-1">
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <div class="clearfix"></div>
                        </ul>
                    </div>
                    <!-- script-for-nav -->
                    <script>
                        $("span.menu").click(function () {
                            $(".head-nav ul").slideToggle(300, function () {
                                // Animation complete.
                            });
                        });
                    </script>
                    <!-- script-for-nav -->
                    <div class="search2">
                        <form>
                            <input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {
                                        this.value = 'Search..';
                                    }">
                            <input type="submit" value="">
                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- nav -->
        <!-- welcome -->
        <div class="welcome">
            <div class="container">
                <div class="col-md-8 welcome-top">
                    <h2>Welcome to Our Site !</h2>
                  
                    <!--<center>

                    
 <div class="snow" />
<style>

</style>
<p>
                    </center>-->
<div class="clearfix"> </div>
                </div>
                <div class="col-md-4 services">
                    <h2>Adopt A Pet</h2>
                    <div class="sevice-top">
                        <justify><b>At any given moment, there are thousands of lovable pets in animal shelters waiting for a new home. We believe all pets deserve the chance to have a happy and healthy life with a loving family.</justify>  
                        <ul>
                            <li><a href="#"><h5>OUR MISSION & ADOPTION PARTNERS</h5></a></li>
                            <li><a href="#"><h5>OUR STORIES</h5></a></li>
                            <li><a href="#"><h5>THE ADOPTION PROCESS</h5></a></li>
                            <li><a href="#"><h5>INFORMATION & ADVICE</h5></a></li>
                            <div class="clearfix"> </div>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- welcome -->
        <!-- fresh -->
        <div class="fresh">
            <div class="container">
                <h3>Food Info.</h3>
                <div class="col-md-4 fresh-top">
                    <img src="images/img211.jpg" class="img-responsive" alt="">
                    <p>Complete, balanced and nutritious, this adult dog food is designed to support the needs of large to giant breed dogs. With no artificial colours, flavours, preservatives, hormones or GMO, this is a healthy and affordable, super premium food choice for your dog.</p>	
                    <a href="#" class="btn  btn-1c btn1 btn-1d">Read More</a>	
                </div>
                <div class="col-md-4 fresh-top">
                    <img src="images/img311.jpg" class="img-responsive" alt="">
                    <p>With a taste you cat will love, it is a complete and balanced nutrition for adult cats 1 year or over. It helps strengthens the immune system. With no artificial flavours or preservatives added. </p>		
                    <a href="#" class="btn  btn-1c btn1 btn-1d">Read More</a>	
                </div>
                <div class="col-md-4 fresh-top">
                    <img src="images/img411.jpg" class="img-responsive" alt="">
                    <p>Completely balanced diet designed by vets for rabbits. High in fibre and extrusion cooked for optimum digestive and dental health. Promotes long-term health and general vitality. High fibre levels stimulate the digestive system and ensure normal gut function.</p>	
                    <a href="#" class="btn  btn-1c btn1 btn-1d">Read More</a>	
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- fresh -->
        <!-- mid-bann -->
        <div class="mid-banner">
            <!-- <div class="container">
               <h3>Our Team</h3>-->
                <!--<div class="wmuSlider example1 section" id="section-1">
                    <article style="position: absolute; width: 100%; opacity: 0;"> 
                        <div class="midbanner-top">
                            <div class="midbanner-left">
                                <img src="images/man.png" class="img-responsive" alt="">
                            </div>
                            <div class="midbanner-right">
                                <p>Mauris vulputate odio nulla, et rhoncus felis pulvinar ut. Praesent ornare 
                                    sem ac vulputate porttitor. Quisque elementum, magna eu sollicitudin </p>
                                <span>Steve Jhon</span>
                            </div>
                            <div class="clearfix"> </div>
                        </div>

                    </article>
                    <article style="position: absolute; width: 100%; opacity: 0;"> 
                        <div class="midbanner-top">
                            <div class="midbanner-left">
                                <img src="images/13.png" class="img-responsive" alt="">
                            </div>
                            <div class="midbanner-right">
                                <p>Mauris vulputate odio nulla, et rhoncus felis pulvinar ut. Praesent ornare 
                                    sem ac vulputate porttitor. Quisque elementum, magna eu sollicitudin </p>
                                <span>Steve Jhon</span>
                            </div>
                            <div class="clearfix"> </div>
                        </div>

                    </article>
                    <article style="position: absolute; width: 100%; opacity: 0;"> 
                        <div class="midbanner-top">
                            <div class="midbanner-left">
                                <img src="images/man.png" class="img-responsive" alt="">
                            </div>
                            <div class="midbanner-right">
                                <p>Mauris vulputate odio nulla, et rhoncus felis pulvinar ut. Praesent ornare 
                                    sem ac vulputate porttitor. Quisque elementum, magna eu sollicitudin </p>
                                <span>Steve Jhon</span>
                            </div>
                            <div class="clearfix"> </div>
                        </div>

                    </article>
                    <ul class="wmuSliderPagination">
                        <li><a href="#" class="">0</a></li>
                        <li><a href="#" class="">1</a></li>
                        <li><a href="#" class="">2</a></li>
                    </ul>
                </div>
                
                <script src="js/jquery.wmuSlider.js"></script> 
                <script>
                                $('.example1').wmuSlider();
                </script>	
            </div>-->
        </div>
        <!-- mid-bann -->
        <!-- news -->
        <div class="news">
            <div class="container">
                <div class="col-md-8 news-top">
                    <h3>Latest Products</h3>
                    <div class="news-left">
                        <img src="ProjectImages/Product images/" class="img-responsive" alt="">
                    </div>
                 
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-4 latest">
                   
                    <div class="latest-left">
                        <img src="images/img6.jpg" class="img-responsive" alt="">
                        <img src="images/img7.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="latest-right">
                        <img src="images/img7.jpg" class="img-responsive" alt="">
                        <img src="images/img6.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- news -->
           <!-- footer -->
        <?php include './_footer.php'; ?>
        <!-- footer -->
    </body>
</html>