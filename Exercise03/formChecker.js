function reset() {
    document.getElementById("mainForm").reset();
}

function isValidEmail(email) {
    return /\S+@\S+\.\S+/.test(email);
}

function submitForm() {
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;

    let apple = document.getElementById('apple').value;
    let banana = document.getElementById('banana').value;
    let orange = document.getElementById('orange').value;

    let shipping = document.getElementById("mainForm")["shipping"].value;

    if(shipping == "") {
        alert("You must select at leaset one shipping option");
        return false;
    }

    if(!isValidEmail(username)) {
        alert("Username must be an email");
        return false;
    }

    if(password == '') {
        alert("Password field can not be empty");
        return false;
    }

    if(parseInt(apple) < 0 || apple == '' || parseInt(banana) < 0 || banana == '' || parseInt(orange) < 0 || orange == '') {
        alert("You must order a zero or positive amount of fruit");
        return false;
    }

    return true;
}