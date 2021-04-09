<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CharlieBlog</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.4.1.css" rel="stylesheet">
	   <link rel="stylesheet" href="fa/css/font-awesome.css">
	
  </head>
  <body class="" style="background: black;">
  	<!-- body code goes here -->
	<nav id="tp" class="navbar navbar-expand-lg navbar-dark bg-dark"> <a class="navbar-brand" href="#" style=" font-family: viner hand itc; font-size: xx-large"><span style="font-size: xx-large; font-family: viner hand itc; color: lightcoral">C</span><span style="color: yellowgreen">harlie</span><span style="color:yellow;"><span style="color: lightgreen">B</span>log</span></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active"> <a class="nav-link" href="index.php">Blog <span class="sr-only">(current)</span></a> </li>
		      <li class="nav-item"> <a class="nav-link text-light" href="#abt">About</a> </li>
<!--
		      <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown1"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a>
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="#">Something else here</a> </div>
	          </li>
-->
		      <li class="nav-item"> <a class="nav-link text-light" href="portfolio.php">Portfolio</a> </li>
	        </ul>
		   
		      <button class="btn btn-primary my-2 my-sm-0" type="submit"><a href="#bk" class="text-decoration-none text-light">Bookings</a></button>&nbsp;
			   <button class="btn btn-warning my-2 my-sm-0" type="submit"><a href="#con" class="text-decoration-none text-light">contact</a></button>
	       
      </div>
  </nav>
	 
  <div class="container-fluid text-center bg-warning border rounded " >
		<div class="border rounded border-info mt-3">  <b>Today's quote</b>
	  	<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate cumque nesciunt, 
	tenetur ea, dicta aliquam eos sint nemo architecto atque iure sit, nam laudantium eum deserunt quas odio delectus! Unde.""</p></div>
  <br> </div>
    <div id="carouselExampleIndicators1" class="carousel slide pt-3 pb-3" data-ride="carousel" style="background-color: rgba(49,41,41,1.00)">
	    <ol class="carousel-indicators">
	      <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
	      <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
	      <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
      </ol>
	    <div class="carousel-inner" role="listbox">
	      <div class="carousel-item active"> <img class="d-block mx-auto" src="images/baret1.jpg" alt="First slide"  height="500vh">
	        <div class="carousel-caption">
	          <h5></h5>
	          <p></p>
            </div>
          </div>
	      <div class="carousel-item"> <img class="d-block mx-auto" src="images/brt.jpg" alt="Second slide"  height="500vh" width="%">
	        <div class="carousel-caption">
	          <h5></h5>
	          <p></p>
            </div>
          </div>
	      <div class="carousel-item"> <img class="d-block mx-auto" src="images/brt2.jpg" alt="Third slide" width="" height="500vh">
	        <div class="carousel-caption">
	          <h5></h5>
	          <p></p>
            </div>
          </div>
      </div>
	    <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
		<br>
	  	<div class="container border rounded border-dark pb-3" id="bk">
		  <p class=""><h2 class="text-center text-light" style="font-family: serif">BOOKINGS</h2></p>
		<hr>
		  
	  <div class="row">
	  
	  <div class="col-6 text-light ">
		  <form action="">
		  <div class="form-group ">
	      <label for="exampleInputEmail1">Email address:</label>
	      <input type="email" class="form-control" id="email1" placeholder="Enter email" required>
	      <small id="emailHelp1" class="form-text text-muted">We'll never share your email with anyone else.</small>
	    </div>
		   
		  <div class="form-group ">
	      <label for="exampleInputPassword1">Phone Number:</label>
	      <input type="text" class="form-control" id="Password" placeholder="Password" required>
		<small id="emailHelp1" class="form-text text-muted">We'll never share your phone nmuber with anyone else.</small>
        </div>
	    <div class="form-group">
	      <label for="exampleInputPassword1">Date:</label>
	      <input type="date" class="form-control" id="Password" placeholder="Password" required>
        </div>
	    </div>
	  <div class="col-6 text-light">
		  <div class="form-group">
	      <label for="exampleInputPassword1">Time:</label>
	      <input type="time" class="form-control" id="Password" placeholder="Password" required>
        </div>
		   
	    <select id="tpy" name="type" class="form-control" required>
                        <option value="-1">choose Type</option>
                        <option value="std">Design</option>
                        <option value="out">Design/Development</option>
        </select>
	    <div class="form-group">
	      <label for="exampleInputPassword1">Location:</label>
	      <input type="text" class="form-control" id="Password" placeholder="meeting location"  required>
        </div>
	    </div>
	  </div>
	  <button type="submit" class="btn btn-primary ">Book</button>
		  </form>
			 
</div></div> <br>
<img src="images/tst2.jpg" class="img-fluid" alt="Placeholder image" height="30">
<hr>
   <div class="container" id="abt">
	   <hr class="bg-success">
<div class="row  mt-3 ">
	<div class="col-lg-4 offset-lg-1 ">
		
  <img src="images/tst.jpg" class="rounded border border-primary img-fluid" alt="Placeholder image"> </div>

  <div class="col-lg-6 ml-1">
    <h2 class="featurette-heading border border-primary rounded text-light" style="font-family: serif;"><b>ABOUT <span class="fa fa-book text-info"></span><span class="text-danger fa fa-pencil"></span></b></h2>
    <p class="lead text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, quidem autem commodi velit ipsam ratione explicabo
                reprehenderit dicta impedit sequi sit amet asperiores culpa neque laudantium perspiciatis. Numquam, nisi. Illo?</p>
            <span style="color:red;" class=" fa fa-heart-o"></span>
	   <span style="color:red;" class="fa fa-heart-o"></span>
	   <span  style="color:red;" class="fa fa-heart-o"></span>
  </div>
	
  </div>
		   </div>
	
	  	<div class="container" >
			  <hr class="bg-dark">
	  
		  <p class=""><h2 class="text-center border border-primary rounded text-light" style="font-family: serif">MORE ABOUT CharlieBlog <span class="text-warning fa fa-info-circle"></span></h2></p>
		
	  <div class="row">
	  
	  <div class="col-lg-6">
		 
		  <div class=" ">
	      <h4 class="border  rounded text-center border-primary text-light">AUTO BIOGRPAHY <span   class="fa fa-user-circle-o text-primary"></span></h4>
			  <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore fugiat est possimus excepturi minima asperiores ipsum impedit vel voluptatum expedita, officia, sequi soluta, odio, architecto quisquam tempore atque nam culpa.</p>
	    </div>
		   
		  <div class="">
	     <h4 class="border  rounded border-primary text-light text-center">GOALS <span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-warning fa fa-star"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></h4>
			  <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore fugiat est possimus excepturi minima asperiores ipsum impedit vel voluptatum expedita, officia, sequi soluta, odio, architecto quisquam tempore atque nam culpa.</p>
	    </div>
        </div>
	   
	  <div class="col-lg-6">
		  <div class="">
	     <h4 class="border  rounded border-primary text-light text-center">HOBBIES <span class="fa fa-camera text-info"></span> <span class="fa fa-microphone text-success"></span></h4>
			  <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore fugiat est possimus excepturi minima asperiores ipsum impedit vel voluptatum expedita, officia, sequi soluta, odio, architecto quisquam tempore atque nam culpa.</p>
	    
        </div>
		   
	    <div class=" ">
	     <h4 class="border rounded border-primary text-light text-center">ACHIEVEMENTS <span class="fa fa-trophy text-warning"></span></h4>
			  <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore fugiat est possimus excepturi minima asperiores ipsum impedit vel voluptatum expedita, officia, sequi soluta, odio, architecto quisquam tempore atque nam culpa.</p>
	   
        </div>
	   
	   
	    </div>
	  </div>
	
		  </form>
			  <hr class="bg-success">
</div></div>
<div class="text-center">
<a href="#tp" class="text-decoration-none text-light btn btn-danger">Top</a>
</div>
<br>
 <div class=" container-fluid border border-dark  bg-dark">
             
	 <div class="row ">
		
              <div class="ml-1 col-sm-6 col-lg-3 ">
                <!-- <div class="bottom-links col-xl-5"> -->
				 <a class="navbar-brand" href="#" style=" font-family: viner hand itc; font-size: xx-large"><span style="font-size: xx-large; font-family: viner hand itc; color: lightcoral">C</span><span style="color: yellowgreen">harlie</span><span style="color:blue;"><span style="color: red">B</span>log</span></a>
				  <hr>
				  <p class="text-light" id="con" style="font-family: serif; font-size: x-large;"> <b> Contact </b></p>
                <form action="">
				  <div class="form-group text-light ">
	      <label for="exampleInputEmail1">Email address:</label>
	      <input type="email" class="form-control border border-dark" id="email1" placeholder="Enter email" required>
	    </div>
		  <div class="form-group text-light ">
	      <label for="exampleInputPassword1">Phone Number:</label>
	      <input type="text" class="form-control border border-dark" id="Password" placeholder="Password" required>
        </div>
	    <div class="form-group">
			<textarea name="com" id="comment" cols="27" rows="1" placeholder="comment here " class="btn btn-light border border-dark" required></textarea>
        </div>
					<button class="btn btn-warning">Submit</button>
					</form>
				  <hr>
              </div>

                    
                <!-- </div> -->
                <div class="bottom-links col-lg-4 ml-lg-5 mt-5  ">
                <p  style="font-family: serif;"></p>
                    <ul class="bottom-links__list text-light ">
                        
                            <li class="bottom-links__item  ">
                                <a title="about" class="bottom-links__link   text-decoration-none text-light " href="">
                                    About
                                </a>
                            </li>
                        
                            <li class="bottom-links__item ">
                                <a title="Terms Of Use" class="bottom-links__link text-decoration-none text-light" href="">
                                    Terms And Conditions
                                </a>
                            </li>
                        
                            <li class="bottom-links__item">
                                <a title="Privacy Statement" class="bottom-links__link text-decoration-none text-light" href="">
                                    Privacy Policy
                                </a>
                            </li>
                        
                            <li class="bottom-links__item ">
                                <a title="Cookies" class="bottom-links__link text-decoration-none text-light" href="">
                                    Cookies
                                </a>
                            </li>
                        
                            <li class="bottom-links__item ">
                                <a title="advertise" class="bottom-links__link text-decoration-none text-light" href="">
                                    Advertise With Us
                                </a>
                            </li>
                        
                            </li>
                    </ul>
		 <hr>
		 			<h4 class="text-light" style="font-family: serif">Services</h4>
		 		<p class="text-light">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, 
					quod ipsum, earum eius nihil quaerat sed voluptates explicabo amet? Doloribus inventore 
					autem sapiente. Quisquam voluptatum, laudantium reiciendis quibusdam sit necessitatibus".</p>
                </div>
                <div class="col-lg-4 ml-lg-5 mt-5  text-light">
                <p  style="font-family: serif;"><b></b></p>
                    
                     <p><span class="fa fa-map-marker"></span> No.59 uran street, Uyo, Nigeria.</p>
                     <p><span class="fa fa-phone"></span> +234 555 555 555</p>
                     <p><span class="fa fa-envelope"></span> blogsite@gmail.com</p>
					
					  <hr>
      <div class=""> 
		  <p><b>Follow us <span class="fa fa-hand-o-down"></span></b>	</p>
		  <a href="" class="fa fa-whatsapp fa-2x "></a>
	    <a href="" class="fa fa-instagram  fa-2x text-secondary"></a> 
	    <a href="" class="fa fa-facebook-square fa-2x text-warning"></a>
  		<a href="" class="fa fa-youtube-play fa-2x text-success"></a>
	    <a href="" class="fa fa-twitter-square fa-2x text-dark"></a>
					</div>
					<hr>
					<b>Author</b>
					<p>" Lorem ipsum dolor sit amet, consectetur consectetur expedita aliquid sapiente nostrum itaque. "</p>
            </div>
	   
    </div>
</div>
	  
 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-3.4.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
  <script src="js/bootstrap-4.4.1.js"></script>
  </body>
</html>