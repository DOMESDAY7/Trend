let subButton=document.querySelector('button[type]');
let comfirm=document.querySelector('input#comfirm')
let message=document.querySelector('span.message');
let button=document.querySelector('.subButton');
let form=document.querySelector('#inscription')
let pseudo=document.querySelector('#pseudo');

pseudo.addEventListener('change',verifPseudo)
comfirm.addEventListener('keyup',equal)

// window.addEventListener('submit',equal)
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
        button.style.cssText="cursor: not-allowed;"
        button.removeEventListener('click',formSub)
        return false;
    }
}

function verifPseudo(){
    pseudo="?pseudo="+pseudo.value;
    let url="trend.mathieuandry.fr/api";
    url=url+pseudo;
    fetch(url)
    .then((resp)=>resp.json)
    .then((data)=>console.log(data))


}
function formSub(){
    form.submit()
}