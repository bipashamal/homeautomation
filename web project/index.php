<html>
    <head>
        <title>Home automation Controls</title>
        <meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <script type="text/javascript">var switchTo5x=true;</script>
	    <script>
            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
        <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
        <script type="text/javascript">
	    stLight.options({publisher: "91f3c450-dca0-4bf2-bed9-6af1d2e4bb86", doNotHash: false, doNotCopy: false, hashAddressBar: false});
	    </script>
		</head>
        <body style="background-image:url('dark-blue-background.jpg')">
          <header class="header">
		   <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="height:140px;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"></a>
            </div>
            <div class="collapse navbar-collapse" id="example-navbar-collapse" style="background:khaki;"><p><center><h2><b>Automated Lighting Services <BR>(HOME AUTOMATION) </b></h2></center></p>
        
                <ul class="nav navbar-nav pull-right">
				<li><a data-toggle="modal" data-target="#myModal" data-title="login/signup">Login / Signup</a></li>
				<li><a href="about.php"><b>About</b></a></li>
				<li><a href="contact.php"><b>Contact Us</b></a></li>
				</ul>
            </div>
            </nav>
			</header>
			<br><br><br><br><br><br><br><br><br>
<div class="row-fluid">


<div class="container">
 <nav class="navbar navbar-inverse" style="width:1200px" >
<div class="menu-wrap">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Setting</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Lights<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="lightroom1.php">Room 1</a></li>
          <li><a href="lightroom2.php">Room 2</a></li>
          <li><a href="lightroom3.php">Room 3</a></li>
        </ul>
      </li>
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">MOOD lighting <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="lightroom1.php">EVENING</a></li>
          <li><a href="lightroom2.php">MORNING</a></li>
          <li><a href="lightroom3.php">NIGHT</a></li>
        </ul>
      </li>
      <li><a href="#">Water</a></li>
      <li><a href="#">Others</a></li>
    </ul>
  </div>
</nav>
</div>

</div>

</div>




<div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style=" background-color:khaki;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h1 class="modal-title" style="margin-left:80px;">login/signup</h1>
                </div>
                <div class="modal-body" >
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
		         </div>

            </div>
              <!--  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Send</button>
                </div> -->
        </div>
    </div>
</body>

</html>


<script type="text/javascript">
$(document).ready(function(){
	$("#myModal").on('show.bs.modal', function(event){
        var button = $(event.relatedTarget);  // Button that triggered the modal
        var titleData = button.data('title'); // Extract value from data-* attributes
        $(this).find('.modal-title').text(titleData + '  form');
    });
});
</script>
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
