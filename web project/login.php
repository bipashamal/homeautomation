  <form class="login">
		  <h2>login to your account</h2>
		  <hr />
		  <label for="username" >username<span>*</span></label>
		  <input type="text" placeholder="username"  id="username" >
		  <label for="password" >password<span>*</span></label>
		  <input type="password" placeholder="password"  id="password" >
		  <input type="checkbox" id="remember">
		  <div class="box-remember">
			  <label for="remember" class="remember"></label>
			  <span>remember account</span>
		  </div>
		  <button class="submit-logo" >login</button>
		  <p>forgot your password? <a href="#">click here!</a></p>
		  
	  </form>
	  <!-- end form login -->

<style>	  
@import url(http://fonts.googleapis.com/css?family=Roboto);
@import url(http://fonts.googleapis.com/css?family=Exo);

* {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	margin: 0;
	padding: 0;
	outline: none;
}
body {
	background: #f3f3f3;
	color: #444;
	font-family: 'Roboto', sans-serif;
	font-size: 14px;
	-webkit-text-transform: uppercase;
	-moz-text-transform: uppercase;
	-ms-text-transform: uppercase;
	-o-text-transform: uppercase;
	text-transform: uppercase;
}
.login {
	width: 450px;
	background: #fff;
	border: 1px;
	-webkit-box-shadow: 0px 0px 1px #ccc;
	-moz-box-shadow: 0px 0px 1px #ccc;
	box-shadow: 0px 0px 1px #ccc;
	padding: 20px 25px;
	margin: 10px auto;
	position: relative;
}
.login h2 {
	font-family: 'Exo', sans-serif;
	font-weight: bold;
	padding: 10px 0 20px 0;
	text-align: center;
	
}
hr{
	border: 0;
	border-top: 1px solid #eee;
	margin: 0;
	margin-bottom: 15px;
}
.login label {
	font-family: 'Exo',sans-serif;
	font-size: 17px;
	display: block;
	margin: 7px 0;
}
.login label span {
  color: #f00;
  margin-left: 3px;
}
.login #username,
.login #password {
	width: 100%;
	padding: 12px;
	background: #fff;
	border: 1px solid rgba(85, 85, 85, 0.20);
	-webkit-border-radius: 1px;
	-moz-border-radius: 1px;
	border-radius: 1px;
	margin-bottom: 15px;
	font-family: 'Roboto',sans-serif;
	font-size: 15px;
}
.login #username:focus,
.login #password:focus {
	border: 1px solid rgba(237, 8, 77, 0.25);
}
.box-remember {
	position: relative;
}
#remember {
	display: none;
}

.remember {
	width: 12px;
	height: 12px;
	background: #fff;
	-webkit-box-shadow: 0 0 1px rgba(85, 85, 85, 1);
	-moz-box-shadow: 0 0 1px rgba(85, 85, 85, 1);
	box-shadow: 0 0 1px rgba(85, 85, 85, 1);
	display: inline-block;
	margin: 0;
	position: absolute;
	top: -5px;
}
.active-remember {
	background: #ed084d;
	border: 2px solid #fff;
}
.box-remember span {
	margin-left: 17px;
	font-family: 'Exo',sans-serif;
	font-size: 12px;
}
.submit-logo {
	padding: 12px 10px;
  cursor: pointer;
	color: #fff;
	background: #ed084d;
	width: 100%;
	margin: 10px 0;
	border: 0 none;
	font-family: 'Roboto',sans-serif;
	-webkit-text-transform: uppercase;
	-moz-text-transform: uppercase;
	-ms-text-transform: uppercase;
	-o-text-transform: uppercase;
	text-transform: uppercase;
	font-size: 17px;
	-webkit-border-radius: 1px;
	-moz-border-radius: 1px;
	border-radius: 1px;
	-webkit-transition: all 0.4s ease-in-out;
	-moz-transition: all 0.4s ease-in-out;
	-o-transition: all 0.4s ease-in-out;
	transition: all 0.4s ease-in-out;
}
.submit-logo:hover {
	background: #333;
	color: #fff;
}
span {
	font-family: 'Exo',sans-serif;
	font-size: 12px;
	margin-top: 7px;
	margin-bottom: 7px;
}
.login a{
	color: #f00;
	text-decoration: none;
}
.login a:hover{
	color: #333;
	text-decoration: none;
}
.or {
	text-align: center;
	font-family: 'Roboto',sans-serif;
	display: block;
	font-size: 20px;
	margin-top: 10px;
	margin-bottom: 10px;
}
.login-facebook,
.login-google-plus {
	width: 100%;
	padding: 15px 17px;
	color: #eee;
	margin: 7px 0;
	-webkit-border-radius: 1px;
	-moz-border-radius: 1px;
	border-radius: 1px;
	cursor: pointer;
}
.login-facebook:hover,
.login-google-plus:hover {
	color: #fff;
}
.login-facebook{
	background: #3b5998;
}
.login-google-plus {
	background: red;
}
.login-facebook span,
.login-google-plus span {
	font-family: 'Roboto',sans-serif;
	font-weight: normal;
	font-size: 17px;
	-webkit-text-transform: capitalize;
	-moz-text-transform: capitalize;
	-ms-text-transform: capitalize;
	-o-text-transform: capitalize;
	text-transform: capitalize;
}
.login-facebook i,
.login-google-plus i {
	margin-right: 10px;
	font-size: 17px;
}

</style>


<script>
$(document).ready(function () {
	
	$('.remember').click(function () {
		
		$(this).toggleClass ('active-remember');
		
	});
});
<script>