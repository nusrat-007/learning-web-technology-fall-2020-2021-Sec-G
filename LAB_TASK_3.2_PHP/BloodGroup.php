<html>
<head>
    <title>Web page</title>
</head>
<body>
   
    <form method="POST" >
        Blood Group <select name="bloodgroup" >
            <option>A+</option>
            <option>B+</option>
            <option>AB+</option>
            <option>O+</option>
            <option>A-</option>
            <option>B-</option>
            <option>AB-</option>
            <option>O-</option>
                
            </select> <br>
            <hr>
        <input type="submit" name="submit" id="" value="submit">
    </form>
    
</body>
</html>

<?php

    if(isset($_POST['submit']))
    {
        $bd = $_POST['blood_group'];

        if(!empty($bd))
        {
            echo $bd;
        }
        else
        {
            echo 'Enter your blood Group';
        }
        
    }

?>