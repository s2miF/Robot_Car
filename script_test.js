//JavaScript, use pictures as buttons, sends and receives values to/from the Rpi
//These are all the buttons
var btn_open = document.getElementById("btn_open");
var btn_close = document.getElementById("btn_close");

//this function sends and receives the pin's status
function change_pin (pin, status) {
	//this is the http request
	var request = new XMLHttpRequest();
	request.open( "GET" , "gpio.php?pin=" + pin + "&status=" + status );
	request.send(null);
	//receiving information
	request.onreadystatechange = function () {
		if (request.readyState == 4 && request.status == 200) {
			return (parseInt(request.responseText));
		}
	//test if fail
		else if (request.readyState == 4 && request.status == 500) {
			alert ("server error");
			return ("fail");
		}
	//else 
		else { return ("fail"); }
	}
}


btn_open.addEventListener("click", function () { 
	console.log("open");
	//use the function
	change_pin ( 29, 1);
	change_pin ( 28, 1);	
} );

btn_close.addEventListener("click", function () { 
	console.log("Close");
	//use the function
	change_pin ( 29, 0);
	change_pin ( 28, 0);
	
} );
