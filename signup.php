<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="contacts.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Resgister</title>
  </head>
  <body style="background: url('images/bg_image.jpg');background-repeat:no-repeat;background-size: 100% ">
  <div id="navigation">
			<div class="center">
				<a href="index.php">Home</a>
				<a href="#about">DashBoard</a>
				<a href="#service">Sell Books</a>
				<a href="#portfolio">Blogs</a>
				<a href="#contact">Contact Us</a>
			</div>
			<div class="left">
				<h1>Bookie</h1>
			</div>
			<div class="search-container">
				<form action="/action_page.php">
					<input type="text" placeholder="Search.." name="search" style="width: 200px;">
					<button type="submit"><i class="fa fa-search"></i></button>
				</form>
			</div>

		</div>	
  <div style="margin:auto;padding: 40px;">  
    <div class="container row  mx-auto ">
      <div class="col" style="background-color:#4982E4; backface-visibility: 0.5;opacity: 0.76;">
      	<h1>Let's Get</h1><br>
        <h2 class="display-1" style="text-align: right; color: white;opacity: 1;font-weight:bold">Started</h2>
        <br>
        <br>
        <h4>Register your account and get book now!</h4>
      </div>
  	 <div class="col" style="background-color: #ffffff;opacity: 1;font-weight: bolder;padding:40px" >
    <form action="includes/signup.inc.ph" method="POST">
		<h5></b>REGISTER WITH YOUR WORKING EMAIL ADDRESS</b></h5><br>
		<fieldset>
		<div class="row">
		<div class="col col-xs-4">
        		<label>Branch <input class="form-control" type="text" name="Username" placeholder="Last" required></label>
			</div>
			<div class="col col-xs-4">
        		<label>Branch <input class="form-control" type="text" name="Branch" placeholder="Last" required></label>
			</div>
			<div class="col-xs-4">
				<label>Current Semester</label>
				 <select class="form-control" id="exampleFormControlSelect1" name="semester" required>
				      <option>I</option>
				      <option>II</option>
				      <option>III</option>
				      <option>IV</option>
				      <option>V</option>
				      <option>VI</option>
				      <option>VII</option>
				      <option>VIII</option>
                     </select>
			</div>
		</div>
        <div class="input-group" style="padding: 10px;">
			
            <span class="input-group-addon" style="border:solid 1px #ced4da;border-right:none;border-radius: 4px;padding:4px" ><i class="fa fa-envelope"></i></span>
			<input id="email" type="text" class="form-control" name="mail" placeholder="Email" style="border-left: none;">
			
		  </div>
		  <div class="input-group" style="padding: 10px 0;">
			
            <span class="input-group-addon" style="border:solid 1px #ced4da;border-right:none;border-radius: 4px;padding:4px;font-size:18px" ><i class="fa fa-phone"></i></span>
			<input id="number" type="text" class="form-control" name="phoneNumber" placeholder="Phone Number" style="border-left: none;">
			
          </div>
  
	    <div class="row">
	    	<div class="col col-xs-6">
	    		<label>Password<input type="Password" name="pwd" required></label>
	    	</div>
	    	<div class="col col-xs-6">
	    		<label>Confirm Password<input type="" name="pwd-repeat"></label>
	    	</div>
	    </div>
	    
  <div class="col col-xs-4">
    <label>Admission Number <input type="text" name="cid" placeholder="19GCEBCS.." class="form-control" required></label>
</div>
  
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
    <label class="form-check-label" for="exampleCheck1">You agree with the <span style="color:blue">terms and condition</span> of our website</label>
  </div>
<center>		
  <div class="row">
	    	<div class="col col-xs-12">
	    		<button type="submit" class="btn btn-success" style="padding:auto 20px;">Register</button>
	    	</div>
			</div>
			
		
<p>Already have account ?<a href="login.php"> Login</a>
</center>
    </fieldset>
	</form>
	</div>
</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
