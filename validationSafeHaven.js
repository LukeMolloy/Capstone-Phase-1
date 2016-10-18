var error = 0;
var success = 0;
function validateFirstSafeHavenRegistrationForm (){
    var clientForm = document.forms["safeHavenRegistration"];
    var first = clientForm.elements.FirstName.value; 
    var last = clientForm.elements.LastName.value; 
    var email = clientForm.elements.Email.value; 
    var license = clientForm.elements.licenseNumber.value; 
    var phone = clientForm.elements.PhoneNumber.value;
    var password = clientForm.elements.Password.value;
    var confirmpassword = clientForm.elements.ConfirmPassword.value;
   // var dependants = clientForm.elements.Dependants.value;
    //var pets = clientForm.elements.Pets.value;
    //var infants = clientForm.elements.Infants.value;
   
    checkFirstName();
    
    checkLastName();

    checkEmail();
    
    checkLicense();
    
    checkPhone();
    
    checkPassword();
    
    checkConfirmPassword();

    
    if (first == "" || last == "" || email == "" || license == "" || phone == "" || password == "" || confirmpassword == "" || password != confirmpassword){
        error = 1;
        return false;
        
    }
    if (first != "" || last != "" || email != "" || license != "" || phone != "" || password == "" || confirmpassword == ""){
        error = 0;
        return true;

    }
}

function validateSecondSafeHavenRegistrationForm (){
    var clientForm = document.forms["safeHavenRegistration"];
    var address = clientForm.elements.Address.value; 
    var suburb = clientForm.elements.Suburb.value; 
    var postcode = clientForm.elements.PostCode.value; 

    checkAddress();
    
    checkSuburb();

    checkPostCode();
    
    checkPhone();
    
    if (address == "" || suburb == "" || postcode == ""){
        error = 1;
        return false;
        
    }
    if (address == "" || suburb == "" || postcode == ""){
        error = 0;
        return true;

    }
}

function checkFirstName () {
    var clientForm = document.forms["safeHavenRegistration"];
    var first = clientForm.elements.FirstName.value; 
    if (first == "") {
        window.document.getElementById("FirstNameError").innerHTML = "Please enter a first name";
        return false;
    }
    else {
        window.document.getElementById("FirstNameError").innerHTML = "";
    }    
}

function checkPassword () {
    var clientForm = document.forms["safeHavenRegistration"];
    var password = clientForm.elements.Password.value; 
    if (password == "") {
        window.document.getElementById("PasswordError").innerHTML = "Please enter a password";
        return false;
    }
    
    if (password.length < 6) {
        window.document.getElementById("PasswordError").innerHTML = "Please ensure your password is 6 characters or more";
        return false;
    }
    
    else {
        window.document.getElementById("PasswordError").innerHTML = "";
    }    
}

function checkConfirmPassword () {
    var clientForm = document.forms["safeHavenRegistration"];
    var password = clientForm.elements.Password.value; 
    var confirmpassword = clientForm.elements.ConfirmPassword.value; 
    if (confirmpassword == "") {
        window.document.getElementById("ConfirmPasswordError").innerHTML = "Please enter a password";
        return false;
    }
    
    if (confirmpassword != password) {
        window.document.getElementById("ConfirmPasswordError").innerHTML = "Please ensure the passwords match";
        return false;
    }
    
    if (confirmpassword.length < 6) {
        window.document.getElementById("ConfirmPasswordError").innerHTML = "Please ensure your password is 6 characters or more";
        return false;
    }
    
    
    
    else {
        window.document.getElementById("ConfirmPasswordError").innerHTML = "";
    }    
}


function checkLastName() {
    var clientForm = document.forms["safeHavenRegistration"];
    var last = clientForm.elements.LastName.value; 
    if (last == "") {
        window.document.getElementById("LastNameError").innerHTML = "Please enter a last name";
        return false;
    }
    else {
        window.document.getElementById("LastNameError").innerHTML = "";
    }    
}

function checkEmail() {
    var clientForm = document.forms["safeHavenRegistration"];
    var valid = /[@]/igm;
    var email = clientForm.elements.Email.value;      
     if (email == "") {
        window.document.getElementById("EmailError").innerHTML = "Please enter an email";
        return false;
    }
   
    if (!valid.test(email)) {
        window.document.getElementById("EmailError").innerHTML = "Please enter a valid email";
        return false;
    }
    

    
    else {
        window.document.getElementById("EmailError").innerHTML = "";
    }    
}

function checkLicense() {
    var clientForm = document.forms["safeHavenRegistration"];
    var license = clientForm.elements.licenseNumber.value;      
     if (license == "") {
        window.document.getElementById("LicenseError").innerHTML = "Please enter a license number";
        return false;
    }
   
    if (isNaN(license)) {
        window.document.getElementById("LicenseError").innerHTML = "Please enter a valid license number";
        return false;
    }
    

    
    else {
        window.document.getElementById("LicenseError").innerHTML = "";
    }    
}

function checkPhone() {
    var clientForm = document.forms["safeHavenRegistration"];
    var phone = clientForm.elements.PhoneNumber.value;      
     if (phone == "") {
        window.document.getElementById("PhoneError").innerHTML = "Please enter a phone number";
        return false;
    }
    
    if (isNaN(phone)) {
        window.document.getElementById("PhoneError").innerHTML = "Please enter a valid phone number";
        return false;
    }
    
    
    else {
        window.document.getElementById("PhoneError").innerHTML = "";
    }    
}




function checkAddress() {
    var clientForm = document.forms["safeHavenRegistration"];
    var dependants = clientForm.elements.Address.value;      
     if (dependants == "") {
        window.document.getElementById("AddressError").innerHTML = "Please enter an address";
        return false;
    }
    else {
        window.document.getElementById("AddressError").innerHTML = "";
    }    
}

function checkSuburb() {
    var clientForm = document.forms["safeHavenRegistration"];
    var pets = clientForm.elements.Suburb.value;      
     if (pets == "") {
        window.document.getElementById("SuburbError").innerHTML = "PPlease enter a suburb";
        return false;
    }
    else {
        window.document.getElementById("SuburbError").innerHTML = "";
    }    
}

function checkPostCode() {
    var clientForm = document.forms["safeHavenRegistration"];
    var infants = clientForm.elements.PostCode.value;      
     if (infants == "") {
        window.document.getElementById("PostCodeError").innerHTML = "Please enter a postcode";
        return false;
    }
    else {
        window.document.getElementById("PostCodeError").innerHTML = "";
    }    
}
