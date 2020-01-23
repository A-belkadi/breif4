function validation() {
    var nom;
    var email;
    var message;
    var emailReg = new RegExp(/^[A-Za-z-0-9-_.]+@[A-Za-z]{4,7}.[A-Za-z]{2,3}$/);
    var valid;
    nom = document.getElementById("nom").value;
    email = document.getElementById("email").value;
    message = document.getElementById("message").value;
    if (nom == "" || email == "" || message == "") {
        alert("les champs n'est pas validé");
    } else {
        valid = emailReg.test(email);
        if (valid == true) {
            alert("la forme bien validé");
            return true;
        } else {
            alert("la forme n'est pas validé");
            return false;

        }
    }

}

function annuler() {
    var anl;
    var nom;
    var email;
    var message;
    nom = document.getElementById("nom").value;
    email = document.getElementById("email").value;
    message = document.getElementById("message").value;
    document.getElementById("nom").value = "";
    document.getElementById("email").value = "";
    document.getElementById("message").value = "";




}