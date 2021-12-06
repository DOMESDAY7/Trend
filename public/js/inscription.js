let subButton = document.querySelector('button[type]');
let comfirm = document.querySelector('input#comfirm')
let message = document.querySelector('span.message');
let button = document.querySelector('.subButton');
let form = document.querySelector('#inscription')
let pseudo = document.querySelector('#username');
let mail = document.querySelector('input#mail');
let mdp = document.querySelector('input#mdp')

pseudo.addEventListener('change', verifPseudo)
comfirm.addEventListener('keyup', equal)
button.addEventListener('click', function () {
    let comfirm_value = comfirm.value;
    let mail_value = mail.value;
    let mdp_value = mdp.value;
    let pseudo_value = pseudo.value;
    //si l'utilisateur ne met que des espaces
    if (comfirm_value = "" || pseudo_value == "" || mail_value == "" || mdp_value == "") {
        console.log("tess")
        unSubmit();
        wrongInput(comfirm);
        wrongInput(pseudo)
        wrongInput(mail)
        wrongInput(mdp)
        message.textContent = "You can't just put spaces 🤓";
    } else {
        canSubmit();
    }
})
//à faire
//trouver un moyen de supprimer le submit si
function equal() {
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
            writeInput(pseudo)
        )
}

function formSub() {
    form.submit()
}

function wrongInput(input) {
    input.style.cssText = "background-color: red"
}

function writeInput(input) {
    input.style.cssText = "background-color: green"
}

function unSubmit() {
    button.setAttribute("disabled", "true")
}

function canSubmit() {
    button.addEventListener('click', formSub)
    button.setAttribute("disabled", "false")
}