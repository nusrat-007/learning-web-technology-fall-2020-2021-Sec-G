<html>
<head>
	  <title>web page</title>
</head>
<body>
  <fieldset>
   <legend>Email</legend>
  <form method="POST" action="">
		<input type="email" name="email" value=""><br>
		<input type="submit" name="submit" value="submit">
  </form>
  </fieldset>

</body>
</html>

<?php
 $email=$_POST['email'];

    if($email==" ")
    {
      echo "Enter your email address";
    }

?>