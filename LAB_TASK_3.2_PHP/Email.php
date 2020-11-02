<html>
<head>
    <title>Web Page</title>
</head>
    <body>

        <form method="POST">
            <table>

                <tr>
                    <td>Email</td>
                </tr>

                <tr>
                    <td><input type="text" name="email" ></td>
                </tr>
                  <tr>
                    <td> <input type="submit" name="submit" value="Submit"> </td>
               
                  </tr>

            </table>

        </form>

    </body>
</html>

<?php

if(isset($_POST['submit']))
{
    $email = $_POST["email"];
    $ad = strpos($email, "@");
    $dot = strpos($email, ".");


    if(!empty($_POST["email"]))
    {
        if($ad > 0 && $email[$ad+1] != "." && $dot > $ad+1 && !strpos($email, " ") && !strpos($email, "..") && strlen($email) > ($dot+1))
        {
            echo "the email address is $email";
        }
        else
        {
            echo "Invalid email....";
        }
    }
      else
        {
        echo "Please enter your valid email address.";
        }   
}

?>