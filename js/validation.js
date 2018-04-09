/* ======================================================
--- User Registration Page
====================================================== */
$(document).ready(function () {
    //    $("#button-register").click(function () {
    //        validate();
    //    });
});

//this is called onsubmit, from the form in registration.html
//function is checking if every input is correct and filled out
function validate(form) {
    var firstname = form.firstname.value; //grabbing first name
    var lastname = form.lastname.value; //grabbing last name
    var username = form.username.value; //grabbing username
    var password = form.userpw.value; //grabbing password
    var email = form.useremail.value; //grabbing email address
    var dob = form.dob.value; //grabbing date of birth

    //in order, we check if all our values are inputted correctly
    if (!validateName(firstname)) { //calling validateName function with parameter firstname to check validity
        alert("No First Name Entered.");
        return false;
    } else if (!validateName(lastname)) { //calling validateName function with parameter lastname to check validity
        alert("No Last Name Entered.");
        return false;
    } else if (!validateName(username)) { //calling validateName function with parameter username to check validity
        alert("No Username Entered.");
        return false;
    } else if (!validatePassword(password)) { //calling validatePassword function with password given in the form to check validity (for now, if the password is at least 5 characters long)
        alert("Password must be at least 5 characters long.");
        return false;
    } else if (!validateEmail(email)) { //calling validateEmail which using regex checks validity of input
        alert("Email Entered Incorrectly.");
        return false;
    } else if (!validateDate(dob)) { //calling validateDate function which also uses regex to check validity of input
        alert("Date Entered Incorrectly.");
        return false;
    }
    
    
//console.log statements for debugging
//    console.log(firstname);
//    console.log(lastname);
//    console.log(username);
//    console.log(password);
//    console.log(email);
//    console.log(dob);
//
//    alert();
    return true;
}

//this is called onsubmit, from the form in registration.html
//function is checking if every input is correct and filled out
function validateLogin(form1) {
    var firstname = form1.firstname.value; //grabbing first name
    var lastname = form1.lastname.value; //grabbing last name
    var username = form1.username.value; //grabbing username
    var password = form1.userpw.value; //grabbing password
    var email = form1.useremail.value; //grabbing email address
    var dob = form1.dob.value; //grabbing date of birth

    //in order, we check if all our values are inputted correctly
    if (!validateName(firstname)) { //calling validateName function with parameter firstname to check validity
        alert("No First Name Entered.");
        return false;
    } else if (!validateName(lastname)) { //calling validateName function with parameter lastname to check validity
        alert("No Last Name Entered.");
        return false;
    } else if (!validateName(username)) { //calling validateName function with parameter username to check validity
        alert("No Username Entered.");
        return false;
    } else if (!validatePassword(password)) { //calling validatePassword function with password given in the form to check validity (for now, if the password is at least 5 characters long)
        alert("Password must be at least 5 characters long.");
        return false;
    } else if (!validateEmail(email)) { //calling validateEmail which using regex checks validity of input
        alert("Email Entered Incorrectly.");
        return false;
    } else if (!validateDate(dob)) { //calling validateDate function which also uses regex to check validity of input
        alert("Date Entered Incorrectly.");
        return false;
    }
    
    
//console.log statements for debugging
//    console.log(firstname);
//    console.log(lastname);
//    console.log(username);
//    console.log(password);
//    console.log(email);
//    console.log(dob);
//
//    alert();
    return true;
}







//validation method for email
function validateEmail(email) {
    //regex below chacks if email is valid or not
    if (!(/^[^@]+@[^@]+\.[a-zA-Z]{2,}$/.test(email))) {// not a valid email address
        return false;
    } else{
        return true;
    }
}

//validation method for password (at the moment passwords must be at least 5 characters long )
function validatePassword(password) {
    if (password.length < 5) {
        return false;
    } else {
        return true;
    }
}

//validation of the date for the date of birth input
function validateDate(date) {
    //regex below checks for valid dates
    if (!(/^(18|19|20)\d\d[-/](0[1-9]|1[012])[-/](0[1-9]|[12][0-9]|3[01])$/.test(date))) {// not a valid date
        return false;
    } else{
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


//previous attempt to check validty of form using onclick.
//function validate() {
//    var firstname = document.getElementById("form_register").elements["firstname"].value; //grabbing first name
//    var lastname = document.getElementById("form_register").elements["lastname"].value; //grabbing last name
//    var username = document.getElementById("form_register").elements["username"].value; //grabbing username
//    var password = document.getElementById("form_register").elements["userpw"].value; //grabbing password
//    var email = document.getElementById("form_register").elements["useremail"].value; //grabbing email address
//    var dob = document.getElementById("form_register").elements["dob"].value; //grabbing date of birth
//
//    console.log(firstname);
//    console.log(lastname);
//    console.log(username);
//    console.log(password);
//    console.log(email);
//    console.log(dob);
//    //    var input_name = "firstname";
//    //    var input = $("#form_id :input[name='" + input_name + "']");
//    //    var $inputs = $('#myForm :input');
//    //    var values = {};
//    //    $inputs.each(function() {
//    //        values[this.name] = $(this).val();
//    //    });
//
//    alert("First Name: " + firstname);
//}
