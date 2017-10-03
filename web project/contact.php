

<!--<html>
<head>
<title>Contact</title>
</head>
<body>
<body background="bg.gif">
<form action="send.php" method="post">
<pre>
<center>
<br>
<br>
E-Mail
<input type="text" name="email" value=""><br>
Name
<input type="text" name="name" value=""><br>
Surname
<input type="text" name="surname" value=""><br>
Subject
<input type="text" name="subject" value=""><br>
Message<br>
<textarea name="message" cols="60" rows="6"></textarea><br><br>
<input type="submit" name="Send" value="Send"><input type="reset" name="Clear" value="Clear">
</form>
</body>
</html>
-->

<!DOCTYPE HTML>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="css/contct.css" rel="stylesheet">
<title>Contact Form</title>
</head>

<body>

    <header class="body">
    </header>

    <section class="body">
	<form method="post" action="index.php">
        
    <label>Name</label>
    <input name="name" placeholder="Type Here">
            
    <label>Email</label>
    <input name="email" type="email" placeholder="Type Here">
            
    <label>Message</label>
    <textarea name="message" placeholder="Type Here"></textarea>
            
    <input id="submit" name="submit" type="submit" value="Submit">
        
   </form>
    </section>

    <footer class="body">
    </footer>

</body>

</html>





