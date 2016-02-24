

function myReset(){

	document.getElementById("myForm").reset();

}

function formCheck(){

	var path = document.getElementById("PFRB").value;
	var shadow = document.getElementById("SRRB").value;
	var rogue = document.getElementById("RTRB").value;
	var dead = document.getElementById("DLRB").value;
	var r1 = document.getElementById("r1").checked;
	var r2 = document.getElementById("r2").checked;
	var r3 = document.getElementById("r3").checked;
	var user = document.getElementById("username").value;
	var pass = document.getElementById("password").value;
	var ship = 0;


	if(path<0||shadow<0||rogue<0||dead<0||path==""||shadow==""||rogue==""||dead==""){
		alert("Please enter valid, non-negative quantities");
		return false;
	}

	if(r1){
		ship = 0;
	}
	else if(r2){
		ship = 5;
	}
	else if(r3){
		ship = 50
	}
	else{
		alert("Please select a shipping option");
		return false;
	}
	
	var at = user.indexOf("@");
    var dot = user.lastIndexOf(".");
    if (at<1 || dot<at+2 || dot+2>=user.length) {
        alert("Not a valid e-mail address");
        return false;
    }

	if(pass==""){
		alert("Please enter a password");
		return false;
	}





}
