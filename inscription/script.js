let subButton=document.querySelector('button[type]');
let comfirm=document.querySelector('input#comfirm')
let message=document.querySelector('span.message');
let button=document.querySelector('.subButton');
let form=document.querySelector('#inscription')
let pseudo=document.querySelector('#username');

pseudo.addEventListener('change',verifPseudo)
comfirm.addEventListener('keyup',equal)

// window.addEventListener('submit',equal)
//vérifier si les deux mots de passe sont remplis
function equal(){
    let mdp=document.querySelector('input#mdp').value;
    let comfirm_value=document.querySelector('input#comfirm').value;
    if(mdp == comfirm_value){
        message.textContent="👍Les mots de passes corresspondent";
        button.style.cssText="cursor: pointer;"
        button.addEventListener('click',formSub)
        return true;
    }
    else{
        message.textContent="👎Les mots de passes ne corresspondent pas";
        coloredInput(comfirm)
        coloredInput(mdp)
        button.style.cssText="cursor: not-allowed;"
        button.removeEventListener('click',formSub)
        return false;
    }
}

//vérification de l'existence du pseudo
function verifPseudo(){
    let pseudoSearch="?pseudo="+pseudo.value;
    let url="../api";
    url=url+pseudoSearch;
    fetch(url)
    .then((resp)=>resp.json())
    .then((data)=>
    message.textContent="Le pseudo "+data.pseudo+" existe déjà ❌",
    coloredInput(pseudo)

    
    
    )
    .catch(message.textContent="✅votre pseudo est unique")
}
function formSub(){
    form.submit()
}
function coloredInput(input){
    input.style.cssText="background-color: red"
}