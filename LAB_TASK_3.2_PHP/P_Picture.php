<html>
<head>
	<title>Web page</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend>Profile Picture</legend>
            UserId <input type="number" name="userid">
            <br>
			Picture <input type="file" name="picture">
			<br>
            <hr>
		    <input type="submit" name="submit" Value="submit">
		</fieldset>
	</form>

</body>
</html>

<?php 

if(isset($_POST['submit']))
{
	$userid= $_POST['userid'];
	$picture= $_POST['picture'];

    if(empty($userid) || (empty($picture)))
    {
    	echo "Enter a valid number";
        echo "please upload your profile picture";
	}
}

?>