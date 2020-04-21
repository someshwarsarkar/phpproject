function validation(){
				
				var first_name=document.getElementById('first_name').value;
				if(first_name==""){
					
					
					return false;
				}
				var last_name=document.getElementById('last_name').value;
				if(last_name==""){
					document.getElementById('lname').innerHTML="Enter Your last name";
					return false;
				}
				var password=document.getElementById('password').value;
				if(firstname==""){
					document.getElementById('pass').innerHTML="Enter password";
					return false;
				}
}