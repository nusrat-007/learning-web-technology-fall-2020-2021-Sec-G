<?php
require_once('../DB/userService.php');

if(isset($_POST['submit']))
{	
    $uname 	= $_POST['username'];
    $pass 	= $_POST['password'];

    if($uname != '' && $pass != '')
    {
        $user = ['username'=> $name, 'password'=>$pass];
        $status = validateUser($user);
        
        if($status){
            setcookie('isValid', 'true', time()+3600, '/');
            header('location: ../view/home.php');
        }else{
            header('location: ../index.html');
        }
    }
    else
    {
        echo 'Please, fill up this form';
    }
    }
else
{
    header('../index.html');
}  

?>