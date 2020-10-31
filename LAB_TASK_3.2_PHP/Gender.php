<html>
<head>
	<title>web page</title>
</head>
<body>
	<form method="POST" action="">
        <fieldset>
			<legend>Gender</legend>
		    <input type="radio" name="gender" value=""> Male
		    <input type="radio" name="gender" value=""> FeMale
		    <input type="radio" name="gender" value=""> Others
            <br>
            <hr>
</fieldset>
            <input type="submit" name="submit" value="submit">
        
    </form>

</body>
</html>

<?php
    if(isset($_POST['submit']))
    {
        
        if(isset($_POST['gender']))
        {
           $gen =  $_POST['gender'];
            echo $gen;
        }
        else
        {
            echo "please select your gender";
        }
    }
?>




