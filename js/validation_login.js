/* ======================================================
--- User Login Page
====================================================== */
$(document).ready(function () {
    //    $("#button-register").click(function () {
    //        validate();
    //    });
});

//this is called onsubmit, from the form in registration.html
//function is checking if every input is correct and filled out
function validate(form) {

    var username = form.username.value; //grabbing username
    var password = form.userpw.value; //grabbing password


    //in order, we check if all our values are inputted correctly
    if (!validateName(username)) { //calling validateName function with parameter username to check validity
        alert("No First Name Entered.");
        return false;
    } else if (!validatePassword(password)) { //calling validatePassword function with password given in the form to check validity (for now, if the password is at least 5 characters long)
        alert("Password must be at least 5 characters long.");
        return false;
    }

    
    
    return true;
}

//validation method for password (at the moment passwords must be at least 5 characters long )
function validatePassword(password) {
    if (password.length < 5) {
        return false;
    } else {
        return true;
    }
}

//validating if name entries are left blank -- returns false if left blank
function validateName(name) {
    if (name === "") {
        return false;
    } else {
        return true;
    }
}

