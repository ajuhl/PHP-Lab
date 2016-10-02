function validate(){
var username = document.getElementsByName("Username")[0].value;
var password = document.getElementsByName("Password")[0].value;
var left = document.getElementsByName("Left")[0].value;
var right = document.getElementsByName("Right")[0].value;
var pkg = document.getElementsByName("pkg")[0].value;
var free = document.getElementById("free").checked;
var night = document.getElementById("night").checked;
var three = document.getElementById("three").checked;

var atpos = username.indexOf("@");
var dotpos = username.lastIndexOf(".");
//w3school.com email verification
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=username.length) {
        alert("Not a valid e-mail address")
		return false;
		}
if(password == "")
{
	alert("Enter a password");
	return false;
}
if(left < 0 || left == null)
{
	alert("Invalid quantity for Left Shoe");
		return false;
}
if(right < 0 || right == null)
{
	alert("Invalid quantity for Right Sock");
		return false;

}
if(pkg < 0 || pkg == null)
{
	alert("Invalid quantity for Left Shoe, Right Sock");
		return false;

}

if(!(free || night || three))
{
	alert("Select a shipping option");
		return false;

}
}