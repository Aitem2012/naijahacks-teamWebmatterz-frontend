<!DOCTYPE html>
<html>


<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Tutor Search, Team Webmatterz" />
<meta name="keywords" content="Tutor Search, Team Webmatterz" />
<title> Tutor Search </title>

<link href="styles/fonts.css" rel="stylesheet" type="text/css" />
<link href="styles/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="styles/jquery-ui-1.8.18.custom.css" rel="stylesheet" type="text/css"/>
<link href="styles/site.css" class="type/text" rel="stylesheet" />
<link href="styles/innerStyles.css" class="type/text" rel="stylesheet" />

<!-- #EndEditable -->

<script type="text/javascript" src="scripts/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="scripts/jquery-ui-1.8.18.custom.min.js"></script>
    <script type="text/javascript" src="scripts/bootstrap.min.js"></script>

<script type="text/javascript" src="scripts/site.js"></script> 

<!-- #EndEditable scripts -->


</head>


<body>

	<div id="padder">
		<div class="container-fluid">
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
				<p>  <span class="glyphicon glyphicon-phone-alt"> Call Us: </span> +2347033716203 &nbsp; &nbsp;
				 <span class="glyphicon glyphicon-envelope"> Mail Us: </span> info@teamwebmatterz.com.ng </p> 
			</div>
			
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<p class="text-right">Connect with us: 
					<a href="#" id="fb" target="_blank" title="Like Our Page on facebook"></a>
					<a href="#" id="tw" target="_blank" title="Follow us on twitter"></a>
					<a href="#" id="lin" target="_blank" title="Follow us on linkedin"></a>
	
	
				</p>
			</div>
	
		</div>
	</div>
	
	<header>
		<div class="container-fluid">
				 <div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									 <h1 title="tutor"><a href="/Home"><img class="img-responsive" src="images/index2.jpg" /></a></h1>
									 <p>...connecting you to your nearby tutor</p>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-right">
									 <nav>
												<a class="btn btn-success" href="/Schools/"><span class="glyphicon glyphicon-home"></span> Find Tutors!</a>
									 </nav>
							</div>
				 </div>
		</div>
</header>

<div id="innerBanner">
    <div class="container-fluid">
        <h2> Register <br> <span>Become A Tutor </span></h2>
    </div>
</div>

<div id="innerCon">
     <div class="container">
          <div class="row">
               <form method="post" action="fullmemberresponse.php">
                    <h2 class="text-center"> Registration Form</h2>
                    <div class="text-danger text-center validation-summary-valid" data-valmsg-summary="true"><ul><li style="display:none"></li>
</ul></div>

                    <div class="row">
                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                              <div class="form-group">
                                   <label>
                                        Full name  
                                   </label>
                                  
								 <input class="form-control" placeholder=" " type="text" required data-val="true" data-val-required="Company's name field is required." name="nameCon" value="" />
                              </div>
                             
                              <div class="form-group">
                                   <label>
                                        Email Address                                     
                                   </label>
                                   <input class="form-control" placeholder=" " type="email" required data-val="true" data-val-email="The Email field is not a valid e-mail address." data-val-required="The Email field is required." name="email" value="" />
                              </div>

                              <div class="form-group">
                                   <label>
                                        Telephone
                                   </label>
                                   <input class="form-control" placeholder=" " type="tel" required data-val="true" data-val-required="The Telephone No field is required." name="phoneNum" value="" />
                              </div>
                              
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="form-group" style="margin-left:-15px;">
                                   <label>
                                        State                               
                                   </label>
                                   <input class="form-control" placeholder=" " type="text" required data-val="true" data-val-required="City field is required." name="city" value="" />
                              </div>
                              </div>
                              
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="form-group">
                                   <label>
                                        City                                
                                   </label>
                                   <input class="form-control" placeholder=" " type="text" required data-val="true" data-val-required="State No field is required." name="state" value="" />
                              </div>
                              </div>
                             
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

						 <div class="form-group">
                                   <label>
                                        L.g.a                                  
                                   </label>
                                   <input class="form-control" placeholder=" " type="text" required data-val="true" data-val-required="Country field is required." name="country" value="" style="width:115%;" />
                              </div>
									</div>
							
</div>

                               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                         
                  
                              <div class="form-group">
                                   <label for="yearBusiness2"> Major </label>
                                   <input class="form-control" placeholder="Membership Number " type="number" required data-val="true" data-val-required="The Lastname field is required." name="memberNum" value="" />
                                                            
</div>
                                <div class="form-group">
                                   <label for="yearBusiness2"> Teaching Experience </label>

                                   <select class="form-control" data-val="true" data-val-required="The vear(s) in business field is required." name="yearBus" required="required"><option> Select </option>
<option> Just Starting </option>
<option> Less than 3years </option>
<option> 4-10years </option>
<option> More than 10years </option>
</select>
                              </div>

                              <div class="form-group">
                                   <label for="yearBusiness2"> What class do you teach? </label>

                                   <select class="form-control" data-val="true" data-val-required="The vear(s) in business field is required." name="yearBus" required="required"><option> Select </option>
<option> Nursery </option>
<option> Primary </option>
<option> Jss Level </option>
<option> Sss Level </option>
<option> Undergraduates </option>
<option> Others </option>
</select>
                              </div>
                              <div class="form-group">
                              <label>
                           Passport Photo           
                                   </label>
                                   <input class="form-control" type="file" required data-val="true" data-val-required="The Lastname field is required." name="memProof" value="" />
                              </div>
                          

</div>
                                                              
                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
           
                              <div class="form-group">
                                   <label> Brief Details about you </label>

                                   <textarea class="form-control" data-val="true" data-val-required="Destination field is required." id="descriptionTb3" name="destination" placeholder=" " required="required" rows="5" type="text">
							</textarea>
</div>
                              </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style='text-align:center;'>
                            <button class="btn btn-danger formmethod=post" type="submit" style="margin-left:0em;"> <span class="glyphicon glyphicon-send"></span> Submit </button>
                            </div>

</form>
          </div>
     </div>
</div>

</div>

<section style="min-height:200px;">
<div id="indexContact">
	<div class="container-fluid">
			
		<div  class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<h3> Follow Us On </h3>
			<hr>
		<p>
				<a href="https://web.facebook.com/groups/753967454676863/about/" id="fb" target="_blank" title="Like Our Page on facebook"></a> 
				<a href="#" id="tw" target="_blank" title="Follow us on twitter"> </a> 
				<a href="#" id="gg" target="_blank" title="Follow us on google++"></a>
			</p>
			<p>&copy; 2018. Tutor Search Project, <br> All right reserved</p>
			<p>Developed by: <a href="http://www.webmatterz.com.ng" target="_blank" title="Web Matterz Nigeria" style="margin-left: -20px;">Team WebMatterz </a></p>

		</div>
		
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="margin-left: 0px;">
			<h3> Contact Us </h3>
			<hr>
		<p><span class="glyphicon glyphicon-home"></span> NaijaHack, Lagos state, Nigeria. </p>
		<p><span class="glyphicon glyphicon-envelope"></span> info@teamwebmatterz.com </p> 
		<p><span class="glyphicon glyphicon-earphone"></span>   +2347033716203</p>

		</div>
		
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 pull-right">
		<h3> Quick Links </h3>
			<hr>
		<li> <a href="about.html"> About Us </a> </li>
		<li> <a href="news.html"> Tutor Search </a></li>
		<li> <a href="nspc.html"> Contact Us </a></li>
		<li> <a href="resources.html"> Our Policy </a></li>
		</div>		
	</div>
</div>
</section>
<!-- End of IndexContact-->

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b76eb2cf31d0f771d83e6b5/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>


</html>
