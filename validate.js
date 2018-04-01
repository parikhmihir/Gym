function validate()
{
	var fname=document.getElementById("fname");
	var lname=document.getElementById("lname");
	var age=document.getElementById("age");
	var contact=document.getElementById("contact");
	var email=document.getElementById("email");
	var password=document.getElementById("password");
	var c_password=document.getElementById("c_password");
	var alphaExp = /^[a-zA-Z]+$/;
	var atpos = email.value.indexOf("@");
    var dotpos = email.value.lastIndexOf(".");
    if(fname.value==null || fname.value=="")
	{
		fname.focus();
		alert("Enter valid first name");
		return false;
	}
	if(fname.value.match(alphaExp)){}
	else{
		alert("First name can have only letters");
		fname.focus();
		return false;
	}
	if(lname.value==null || lname.value=="")
	{
		lname.focus();
		alert("Enter valid last name");
		return false;
	}
	if(lname.value.match(alphaExp)){}
	else{
		alert("Last name can have only letters");
		lname.focus();
		return false;
	}
	if(age.value==null || age.value=="")
	{
		alert("Please Enter Age");
		age.focus();
		return false;
	}
	if (isNaN(age.value))
	{
		alert(" Your Age must be Integer");
		age.focus();
		return false;
	}
	if(contact.value==null || contact.value==" ")
	{
		alert("Please Enter Mobile Number");
		contact.focus();
		return false;
	}
	if (isNaN(contact.value))
	{
		alert(" Your Mobile Number must be Integers");
		contact.focus();
		return false;
	}
	if((contact.value.length!= 10))
	{
		alert("Enter the valid Mobile Number(Like : 9669666999)");
		contact.focus();
		return false;
	}
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.value.length) 
	{
        alert("Enter valid email-ID");
		email.focus();
        return false;
   	}
 	if(password.value.length< 8 || c_password.value.length< 8)
	{
		alert("Please enter a password of atleast 8 characters");
		password.focus();
		return false;
	}
	else if (password.value != c_password.value) 
	{
		alert("Passwords do not match.");
		password.focus();
        return false;
    }
	return true;
}