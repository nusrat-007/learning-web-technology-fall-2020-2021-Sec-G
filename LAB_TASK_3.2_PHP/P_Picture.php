<html>
<head>
	<title>Web page</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend>Profile Picture</legend>
            UserId <input type="number" name="number" value="">
            <br>
		    Picture <input type="file" name="picture"><br>
            <hr>
		    <input type="submit" name="submit" value="submit" >
		</fieldset>
	</form>

</body>
</html>

<?php 


	$photo= $_POST['Picture'];
	$userid= $_POST['UserId'];

    if(empty($photo) || (empty($userid)))
    {
    	echo "Enter a valid number";
        echo "please upload your profile picture";
    }

?>