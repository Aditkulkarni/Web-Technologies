$(document).ready(function(){

	/* Assignment 7 */
	/* Code to check for returning user */
	var user=getCookie("username");
	if (user != "") {	
		document.getElementById("user").innerHTML = "Hello, " + user;
	} else {
	   user = prompt("Please enter your name - ","");
	   if (user != "" && user != null) {
		   setCookie("username", user, 30);
		   document.getElementById("user").innerHTML = "Hello, " + user;
	   }
	}
		
	/* Set user name in browser cookies */
	function setCookie(cname,cvalue,exdays) {
		console.log(cname,cvalue,exdays);
		var d = new Date();
		d.setTime(d.getTime() + (exdays*24*60*60*1000));
		var expires = "expires=" + d.toGMTString();
		document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
	}
	
	/* Retrieve user name from browser cookies */
	function getCookie(cname) {
		var name = cname + "=";
		var decodedCookie = decodeURIComponent(document.cookie);
		var ca = decodedCookie.split(';');
		for(var i = 0; i < ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0) == ' ') {
				c = c.substring(1);
			}
			if (c.indexOf(name) == 0) {
				return c.substring(name.length, c.length);
			}
		}
		return "";
	}			
});