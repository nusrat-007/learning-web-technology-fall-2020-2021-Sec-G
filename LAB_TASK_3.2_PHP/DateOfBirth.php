<html>
<head>
	<title>Web page</title>
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

    if(isset($_POST['submit']))
    {
        $date = $_POST['dob'];

        if(!empty($date))
        {
            echo $date;
        }
        else
        {
            echo 'Please enter your date of birth.';
        }
        
    }

?>