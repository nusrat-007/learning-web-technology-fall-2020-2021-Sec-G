<html>
<head>
	<title>web page</title>
</head>
<body>
    <fieldset>
    <legend>Name</legend>
	<form method="POST" action="">
		<input type="text" name="text" value=""><br>
		<input type="submit" name="submit" value="submit"><hr>
    </form>
    </fieldset>

</body>
</html>
  
<?php 

if(isset($_POST['submit']))
  {
    
    $name=$_POST['name'];
}
    if($name == " " || strlen($name) < 2  )
    { 
      echo"Enter a valid name"; 

    }elseif ($name == " ") {
    echo"Enter must with a letter"; 
    }elseif ($name == " ") 
    {
    	echo"Cannot be empty"
    }

 ?>

