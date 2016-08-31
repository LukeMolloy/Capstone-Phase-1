var error = 0;
var success = 0;
function validateFirstSafeHavenRegistrationForm (){
    var clientForm = document.forms["safeHavenRegistration"];
    var first = clientForm.elements.FirstName.value; 
    var last = clientForm.elements.LastName.value; 
    var email = clientForm.elements.Email.value; 
    var phone = clientForm.elements.PhoneNumber.value;
   // var dependants = clientForm.elements.Dependants.value;
    //var pets = clientForm.elements.Pets.value;
    //var infants = clientForm.elements.Infants.value;
   
    checkFirstName();
    
    checkLastName();

    checkEmail();
    
    checkPhone();
    
    if (first == "" || last == "" || email == "" || phone == ""){
        error = 1;
        return false;
        
    }
    if (first != "" || last != "" || email != "" || phone != ""){
        error = 0;
        return true;

    }
}

function validateSecondSafeHavenRegistrationForm (){
    var clientForm = document.forms["safeHavenRegistration"];
    var first = clientForm.elements.FirstName.value; 
    var last = clientForm.elements.LastName.value; 
    var email = clientForm.elements.Email.value; 
    var phone = clientForm.elements.PhoneNumber.value;
   // var dependants = clientForm.elements.Dependants.value;
    //var pets = clientForm.elements.Pets.value;
    //var infants = clientForm.elements.Infants.value;
   
    checkFirstName();
    
    checkLastName();

    checkEmail();
    
    checkPhone();
    
    if (first == "" || last == "" || email == "" || phone == ""){
        error = 1;
        return false;
        
    }
    if (first != "" || last != "" || email != "" || phone != ""){
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
    var email = clientForm.elements.Email.value;      
     if (email == "") {
        window.document.getElementById("EmailError").innerHTML = "Please enter an email";
        return false;
    }
    else {
        window.document.getElementById("EmailError").innerHTML = "";
    }    
}

function checkPhone() {
    var clientForm = document.forms["safeHavenRegistration"];
    var phone = clientForm.elements.PhoneNumber.value;      
     if (phone == "") {
        window.document.getElementById("PhoneError").innerHTML = "Please enter a phone number";
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