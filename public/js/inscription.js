let subButton = document.querySelector('button[type]');
let comfirm = document.querySelector('input#comfirm')
let message = document.querySelector('span.message');
let button = document.querySelector('.subButton');
let form = document.querySelector('#inscription')
let pseudo = document.querySelector('#username');
let mail = document.querySelector('input#mail');
let mdp = document.querySelector('input#mdp')

pseudo.addEventListener('change', verifPseudo)

//à faire
//trouver un moyen de supprimer le submit si
function mdpEqual() {
    let mdp = document.querySelector('input#mdp').value;
    let comfirm_value = document.querySelector('input#comfirm').value;
    if (mdp == comfirm_value) {
        message.textContent = "👍The passwords match";
        button.style.cssText = "cursor: pointer;"
        writeInput(comfirm)
        return true;
    } else {
        message.textContent = "👎Passwords do not match";
        wrongInput(comfirm)
        wrongInput(mdp)
        button.style.cssText = "cursor: not-allowed;"
        button.removeEventListener('click', formSub)
        return false;
    }
}

//vérification de l'existence du pseudo
function verifPseudo() {
    let pseudoSearch = "?pseudo=" + pseudo.value;
    let url = "./api/pseudo.php";
    url = url + pseudoSearch;
    fetch(url)
        .then((resp) => resp.json())
        .then((data) =>
            message.textContent = "The username " + data.pseudo + " already exists ❌",
            wrongInput(pseudo)
        )
        .catch(message.textContent = "✅Your username is unique",
           
        )
}
function wrongInput(input) {
    input.style.backgroundColor = " red"
}

function writeInput(input) {
    input.style.backgroundColor = "green"
}

// au click du bouton on vérifie si les tous les champs sont remplis
// on regarde si les deux mdp corresspondent
button.addEventListener("click",areComplete)
function areComplete(){
    if (comfirm.value==null){
        message.textContent = "You need to comfirm your password 😁"
    }
    if (mail.value==null){
        message.textContent = "You have to enter an email ✉️";
    }
    if (mdp.value== null){
        message.textContent = "You wouldn't want your account to be stolen? "
    }
    if (pseudo.value == null){
        message.textContent ="Give us a little name "
    }
    else{
       if (mdpEqual()){
           form.submit()
       }
    }
}
