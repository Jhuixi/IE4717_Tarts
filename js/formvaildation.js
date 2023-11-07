function validateName(){
    var name = document.getElementById("firstName").value;
    name.trim(); //remove any whitespace from both ends of the string
    if(name.length > 0){ //make sure it is not empty
        var namevali = /^[a-z]+( [a-z]+){0,10}$/i;
        if(namevali.test(name)){
            return true;
        }
        else{
            alert("The name field should only contains alphabet characters and character spaces.");
            return false;
        }
    }
    alert("Please fill in your name.");
    return false;
}
function validateEmail(){
    var email = document.getElementById("email").value;
    email.trim();
    if(email.length > 0){ //make sure it is not empty
        // var emailvali = /^([\w\.-])+@([\w]+\.){1,3}([A-z]){2,3}$/;
        var emailvali = /^([\w\.-])+@[\w\.-]{2,4}+\.[A-Za-z]{2,3}$/;
        if(emailvali.test(email)){
            return true;
        }
        else{
            alert("Email entered in wrong format. ");
            return false;
        }
    }
    alert("Please fill in your email.");
    return false;
}
function validateDate(){
    var date = new Date(document.getElementById("date").value);
    var currentDate = new Date();
    if(date.getFullYear() > currentDate.getFullYear()) {
		return true;
	}
	else if(date.getFullYear() == currentDate.getFullYear()){
		if(date.getMonth() > currentDate.getMonth()){
			return true;
		}
		else if(date.getMonth() == currentDate.getMonth()){
			if(date.getDate() > currentDate.getDate()){
				return true;
			}
		}
	}
	alert("Date must be in the future.");
	return false;
}
