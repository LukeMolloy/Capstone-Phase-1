function validateRegistrationForm (){
    var regForm = document.forms["authorityRegistration"];
    var first = regForm.elements.FirstName.value; 
    var last = regForm.elements.LastName.value; 
    var email = regForm.elements.Email.value; 
    var password = regForm.elements.Password.value;
    var confirmPassword = regForm.elements.ConfirmPassword.value;
   
    checkFirstName();
    
    checkLastName();

    checkEmail();
    
    checkPassword();
    
    checkConfirmPassword();
    
    if (first == "" || last == "" || email == "" || password == "" || confirmPassword == ""){
        return false;
    }
    else {
        return true;

    }
}

function checkFirstName () {
    var regForm = document.forms["authorityRegistration"];
    var first = regForm.elements.FirstName.value; 
    if (first == "") {
        window.document.getElementById("FirstNameError").innerHTML = "Please enter a first name";
        return false;
    }
    else {
        window.document.getElementById("FirstNameError").innerHTML = "";
    }    
}

function checkLastName() {
    var regForm = document.forms["authorityRegistration"];
    var last = regForm.elements.LastName.value; 
    if (last == "") {
        window.document.getElementById("LastNameError").innerHTML = "Please enter a last name";
        return false;
    }
    else {
        window.document.getElementById("LastNameError").innerHTML = "";
    }    
}

function checkEmail() {
    var regForm = document.forms["authorityRegistration"];
    var email = regForm.elements.Email.value;      
     if (email == "") {
        window.document.getElementById("EmailError").innerHTML = "Please enter an email";
        return false;
    }
    else {
        window.document.getElementById("EmailError").innerHTML = "";
    }    
}

function checkPassword() {
    var regForm = document.forms["authorityRegistration"];
    var password = regForm.elements.Password.value;      
     if (password == "") {
        window.document.getElementById("PasswordError").innerHTML = "Please enter a password";
        return false;
    }
    else {
        window.document.getElementById("PasswordError").innerHTML = "";
    }    
}

function checkConfirmPassword() {
    var regForm = document.forms["authorityRegistration"];
    var password = regForm.elements.Password.value;
    var confirmPassword = regForm.elements.ConfirmPassword.value; 
     if (confirmPassword != password) {
        window.document.getElementById("ConfirmPasswordError").innerHTML = "The passwords do not match";
        return false;
    }
    else {
        window.document.getElementById("ConfirmPasswordError").innerHTML = "";
    }    
}