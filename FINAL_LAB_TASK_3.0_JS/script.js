function bgroup()
{
    let obj = document.getElementById('blood').value;
	let val;
	if(obj != "")
	{
		val = 'Ok!';
	}else
	{
		val = 'Something Wrong!';
	}
	alert(val);
}