//JavaScript, use pictures as buttons, sends and receives values to/from the Rpi
//These are all the buttons
var btn_forward = document.getElementById("btn_forward"),
	btn_backward = document.getElementById("btn_backward"),
	btn_left = document.getElementById("btn_left"),
	btn_right = document.getElementById("btn_right"),
	btn_stop = document.getElementById("btn_stop");

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

//these are all the button's events, it just calls the change_pin function and updates the page in function of the return of it.
btn_forward.addEventListener("click", function () { 
	console.log("Forward");

	//use the function
	change_pin ( 28, 0);
	change_pin ( 24, 0);
	change_pin ( 29, 1);
	change_pin ( 27, 1);

	btn_backward.alt = "off"
	btn_backward.src = "data/img/backward_blue.jpg"; 				
	
	btn_left.alt = "off"
	btn_left.src = "data/img/left_blue.jpg";


	btn_forward.alt = "on"
	btn_forward.src = "data/img/forward_green.jpg"; 

	btn_right.alt = "off"
	btn_right.src = "data/img/right_blue.jpg";

} );

btn_backward.addEventListener("click", function () { 
	console.log("Backward");
	change_pin ( 29, 0);
	change_pin ( 27, 0);
	change_pin ( 28, 1);
	change_pin ( 24, 1);

	btn_backward.alt = "on"
	btn_backward.src = "data/img/backward_green.jpg"; 				
	
	btn_left.alt = "off"
	btn_left.src = "data/img/left_blue.jpg";


	btn_forward.alt = "off"
	btn_forward.src = "data/img/forward_blue.jpg"; 

	btn_right.alt = "off"
	btn_right.src = "data/img/right_blue.jpg";

} );

btn_left.addEventListener("click", function () { 
	console.log("Left");
	change_pin ( 27, 0);
	change_pin ( 24, 0);
	change_pin ( 28, 0);
	change_pin ( 29, 1);

	btn_backward.alt = "off"
	btn_backward.src = "data/img/backward_blue.jpg"; 				
	
	btn_left.alt = "on"
	btn_left.src = "data/img/left_green.jpg";


	btn_forward.alt = "off"
	btn_forward.src = "data/img/forward_blue.jpg"; 

	btn_right.alt = "off"
	btn_right.src = "data/img/right_blue.jpg";
} );

btn_right.addEventListener("click", function () { 
	console.log("Right");
	change_pin ( 29, 0);
	change_pin ( 24, 0);
	change_pin ( 28, 0);
	change_pin ( 27, 1);

	btn_backward.alt = "off"
	btn_backward.src = "data/img/backward_blue.jpg"; 				
	
	btn_left.alt = "off"
	btn_left.src = "data/img/left_blue.jpg";


	btn_forward.alt = "off"
	btn_forward.src = "data/img/forward_blue.jpg"; 

	btn_right.alt = "on"
	btn_right.src = "data/img/right_green.jpg";

} );

btn_stop.addEventListener("click", function () { 
	console.log("Stop");
	change_pin ( 27, 0);
	change_pin ( 24, 0);
	change_pin ( 28, 0);
	change_pin ( 29, 0);

	btn_backward.alt = "off"
	btn_backward.src = "data/img/backward_blue.jpg"; 				
	
	btn_left.alt = "off"
	btn_left.src = "data/img/left_blue.jpg";


	btn_forward.alt = "off"
	btn_forward.src = "data/img/forward_blue.jpg"; 

	btn_right.alt = "off"
	btn_right.src = "data/img/right_blue.jpg";
	
} );
