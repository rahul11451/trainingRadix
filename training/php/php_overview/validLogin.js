function validate() {
    var pass1 = document.getElementById('pass').value;
    var email1 = document.getElementById('email').value; 
    if(pass1 === ""){
        alert("please Your password");
    }
    if(email1 === ""){
        alert("please Your email");
    }
}