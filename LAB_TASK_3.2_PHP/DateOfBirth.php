<html>
<head>
	<title>web page</title>
</head>
<body>
        <fieldset>
    <legend>Date of Birth</legend>
        dd/mm/yyyy <br>
	<form method="POST" action="">
    <input type="date" name="dob" id=""> <br>
            <hr>
            <input type="submit" name="submit" id="" value="Submit">
		</fieldset>
	</form>

</body>
</html>

<?php 

	$date = $_POST['dateOfBirth'];

    if($date= "")
    {
      echo "Please enter your valid date of birth";
      echo "No text input";
    }
?>