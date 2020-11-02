<html>
<head>
    <title>Web page</title>
</head>
<body>
    <fieldset>
        
        <form method="POST">
             <legend>Blood Group</legend>
             <select name="blood_group">

				<option>A+</option>
                <option>B+</option>
                <option>AB+</option>
                <option>O+</option>
                <option>A-</option>
                <option>B-</option>
                <option>AB-</option>
                <option>O-<option>
                
            </select> <br><hr>
            <input type="submit" name="submit" id="" value="submit">
        </form>
    </fieldset>
</body>
</html>

<?php

    if(isset($_POST['submit']))
    {
        $blood = $_POST['blood_group'];

        if(!empty($blood))
        {
            echo $blood;
        }
        else
        {
            echo 'Enter your blood Group';
        }
        
    }

?>
