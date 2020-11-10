<?php
	session_start();

    if(isset($_POST['submit']))
    {
		if(empty( $_POST['UserId']) && empty($_POST['Password']))
		{
            echo "null submission";
			header('location: login.html');
		}
		else
		 {
			setcookie('isValid', 'true', time()+3600, '/');
            //echo "login succesful";
            
			header('location: user_home.html');
		}	

	}		

?>