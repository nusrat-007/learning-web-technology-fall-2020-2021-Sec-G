<html>
<head>
	<title>Web page</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
		<legend>Degree</legend>
		<input type="checkbox" name="degree">SSC
        <input type="checkbox" name="degree">HSC
        <input type="checkbox" name="degree">BSc
        <br>
		</fieldset>
        <input type="submit" name="submit" value="submit">
	</form>

</body>
</html>

<?php

    if(isset($_POST['submit']))
    {
        if(!empty($_POST['deg']))
        {
            $deg = $_POST['deg'];
            echo $deg;
        }
        else
        {
            echo 'Select your degree';
        }
    }
    
?>