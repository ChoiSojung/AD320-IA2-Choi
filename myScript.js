function validateForm() {
    var x = document.forms["form"]["name"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
    
    var y = document.forms["form"]["email"].value;
    if (y == "") {
        alert("Email must be filled out");
        return false;
    }
}