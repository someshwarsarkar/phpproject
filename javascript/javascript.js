function validation()
{
	if(document.frm.name.value=="") //document.getElementById('name')
	{
		alert('Enter your Name');
		//document.getElementById('name_error').innerHTML='Enter Name';
		return false;
	}
	
	var x=/^[a-zA-Z]{1,20}$/;
	if(!document.frm.name.value.match(x))
	{
		alert('Please enter alphabets only');
		return false;
	}
	
	if(document.frm.email.value=="")
	{
		alert('Enter Email');
		return false;
	}
	
	var y=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(!document.frm.email.value.match(y))
	{
		alert('Enter Valid Email');
		return false;
	}
	
	if(document.frm.pwd.value=="")
	{
		alert('Enter Password');
		return false;
	}
	
	var z=/\w{6,20}/;
	if(!document.frm.pwd.value.match(z))
	{
		alert('Password minimum 6');
		return false;
	}
	
	if(document.frm.phno.value=="")
	{
		alert('Enter Phnone No');
		return false;
	}
	
	var ph=/^\d{10}$/;
	
	if(!document.frm.phno.value.match(ph))
	{
		alert('Enter Valid 10 digit mobile no');
		return false;
	}
	
	if(document.frm.add.value=="")
	{
		alert('Enter Address');
		return false;
	}
	
	if(document.frm.sex[0].checked==false && document.frm.sex[1].checked==false)
	{
		alert('Specify gender');
		return false;
	}
	
	if(document.frm.lan[0].checked==false && document.frm.lan[1].checked==false && document.frm.lan[2].checked==false)
	{
		alert('Select Language');
		return false;
	}
	
	if(document.frm.country.selectedIndex=="")
	{
		alert('Select Country');
		return false;
	}
	
	
	return true;
}