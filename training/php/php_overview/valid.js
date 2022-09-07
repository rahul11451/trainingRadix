function validate() {
    var id1 = document.getElementById('fname').value;
    var pass1 = document.getElementById('pass').value;
    var add1 = document.getElementById('add').value;
    var email1 = document.getElementById('email').value;
    var enterrdDate = document.getElementById('date1').value;
    var number1 = document.getElementById('number').value;
    if (id1 === ""){ 
        alert("please Your name");
    }
    if(add1 === ""){
        alert("please Your address");
    } 
    if(pass1 === ""){
        alert("please Your password");
    }
    if(email1 === ""){
        alert("please Your email");
    }
    if(enterrdDate === ""){
        alert("please Your birth date");
    }
    if(number1 === ""){
        alert("please Your number");
    }
}