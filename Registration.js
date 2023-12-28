Login.js

function registerUser() {
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    console.log("Registration Details:");
    console.log("Username: " + username);
    console.log("Email: " + email);
    console.log("Password: " + password);
    return false;
}
