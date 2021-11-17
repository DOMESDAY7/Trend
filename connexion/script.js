const subButton=document.querySelector('button[type]');
subButton.addEventListener('click',verifLog)
const bjPseudo=document.querySelector('.bjPseudo')
let pseudo=document.querySelector('input.pseudo')
let mdp=document.querySelector('input.mdp')
const titlePseudo=document.querySelector('.titlePseudo')
let attrPseudo=document.querySelector('.pseudo').getAttribute('value')
let img=document.querySelector('.profil');

window.addEventListener('keyup',(e)=>{
    
    if (e.target==pseudo){
        
        titlePseudo.textContent= pseudo.value+",";
        if(pseudo.value=="Admin" || pseudo.value=="admin" ){
            img.src="../img/admin.svg"
        }else{
            img.src="../img/profil.svg"
        }
    }
})
//vérifier au submit si les champs ne sont pas vide
window.addEventListener('submit',function(){
    if(pseudo.value.length==0 || mdp.value.length==0){
        return false;

    }else{
        return true;
    }
},false)



function verifLog(){
    fetch (url,
        {
            headers:{
                'Content-type': 'text/JSON'
            }
        })
        .then((resp)=>resp.json)
        .then((data)=>{
            console.log(data)
            data.mdp
        })

}