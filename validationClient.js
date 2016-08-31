var error = 0;
var success = 0;
function validateRegistrationForm (){
    var clientForm = document.forms["clientRegistration"];
    var first = clientForm.elements.FirstName.value; 
    var last = clientForm.elements.LastName.value; 
    var email = clientForm.elements.Email.value; 
    var phone = clientForm.elements.Phone.value;
   // var dependants = clientForm.elements.Dependants.value;
    //var pets = clientForm.elements.Pets.value;
    //var infants = clientForm.elements.Infants.value;
   
    checkFirstName();
    
    checkLastName();

    checkEmail();
    
    checkPhone();
    
    
    //checkDependants();
    
//    checkPets();
    
  //  checkInfants();
    
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
    var clientForm = document.forms["clientRegistration"];
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
    var clientForm = document.forms["clientRegistration"];
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
    var clientForm = document.forms["clientRegistration"];
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
    var clientForm = document.forms["clientRegistration"];
    var phone = clientForm.elements.Phone.value;      
     if (phone == "") {
        window.document.getElementById("PhoneError").innerHTML = "Please enter a phone number";
        return false;
    }
    else {
        window.document.getElementById("PhoneError").innerHTML = "";
    }    
}

function checkDependants() {
    var clientForm = document.forms["clientRegistration"];
    var dependants = clientForm.elements.Dependants.value;      
     if (dependants == "") {
        window.document.getElementById("DependantsError").innerHTML = "Dependants cannot be blank";
        return false;
    }
    else {
        window.document.getElementById("DependantsError").innerHTML = "";
    }    
}

function checkPets() {
    var clientForm = document.forms["clientRegistration"];
    var pets = clientForm.elements.Pets.value;      
     if (pets == "") {
        window.document.getElementById("PetsError").innerHTML = "PPets cannot be blank";
        return false;
    }
    else {
        window.document.getElementById("PetsError").innerHTML = "";
    }    
}

function checkInfants() {
    var clientForm = document.forms["clientRegistration"];
    var infants = clientForm.elements.Infants.value;      
     if (infants == "") {
        window.document.getElementById("InfantsError").innerHTML = "Infants cannot be blank";
        return false;
    }
    else {
        window.document.getElementById("InfantsError").innerHTML = "";
    }    
}