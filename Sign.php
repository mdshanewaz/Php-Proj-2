<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
    <link rel="stylesheet" href="s.css"/>
    <title>Create Account</title>
</head>
<body>
   <!-- <div class="full_width">
	<div class="container"> -->
	<nav class="menu">
		<ul>
			<li><a href="#"><img src="img/menu.png" alt=""/></a></li>
			<li><a href="Home.php"><img src="img/home.png" alt=""/></a></li>
			<li><a href="#"><img src="img/user.png" alt="" /></a></li>
			<li><a href="#"><img src="img/map.png" alt="" /></a></li>	
		</ul>
	<div class="s"> 
	<input type="text" placeholder="Search" id="search"/>
	<button class="logo"><img src="img/search.png" alt="" /></button>
	</div>
	<div class="se">
		<ul>
			<li><a href="#"><img src="img/global.png" alt="" /></a></li>
		</ul>
	</div>
	</nav>
	<!-- </div>
	</div> -->
	<div>
		<?php
		if(isset($_POST['register'])){
			echo 'User submitted';
		}

		?>
	</div>

	<div class="wrap">
	<div class="contain">
	<div class="butn">
		<div id="btn"></div>
		<button type="button" class="toggle-btn" onclick="register()">Register</button>
		<button type="button" class="toggle-btn" onclick="login()">Login</button>
	</div>
	<from action="in.php" method="POST" id="reg" class="input_grup">
	<input type="text" class="input_fld" name="fn" placeholder="First Name" required/>
	<input type="text" class="input_fld" name="ln" placeholder="Last Name" required/>
	<input type="text" class="input_fld" name="un" placeholder="User Name" required/>
	<input type="email" class="input_fld" name="email" placeholder="Enter your email" required/>
	<input type="password" class="input_fld" name="pas" placeholder="Password" required/>
	<input type="submit" class="sub_bttn" name="register" placeholder="Register"/>
	</from>
	<from action="validation.php" method="post" id="log" class="input_grup">
	<input type="text" class="input_fld" placeholder="User Name"/>
	<input type="password" class="input_fld" placeholder="Password"/>
	<input type="submit" class="sub_bttn" name="submit" placeholder="login">
	</from>
	</div>
	</div>
	
	<script type="text/javascript">
		var x = document.getElementById("reg");
		var y = document.getElementById("log");
		var z = document.getElementById("btn");
		
		function login(){
			x.style.left ="-400px";
			y.style.left ="50px";
			z.style.left ="110px";
		}
		function register(){
			x.style.left ="50px";
			y.style.left ="450px";
			z.style.left ="0px";
		}
	</script>
	
	<!--<div class="full_width">
	<div class="container"> -->
	<footer class="foot">
	<p>CopyRight: &copy; All rights preserved to Newaz and Riaz</p>
	</footer>
	<!--</div>
	</div> -->
</body>
</html>






