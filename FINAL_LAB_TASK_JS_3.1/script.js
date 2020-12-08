function formvalidation()
{
    let name = checkname();
    let email = checkemail();

    if(name == true && email == true)
    {
        alert('Done!');
    }
    else
    {
        alert('Something Went Wrong.');
    }

}

function checkname()
{
    let obj = document.getElementById('name').value;
    if(obj != '')
    {
        return true;
    }
    else
    {
        return false;
    }
}

function checkemail()
{
    let obj = document.getElementById('email').value;
    if(obj != '')
    {
        return true;
    }
    else
    {
        return false;
    }
}