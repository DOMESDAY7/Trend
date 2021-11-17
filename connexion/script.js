const subButton=document.querySelector('button[type]');
subButton.addEventListener('click',verifLog)
const bjPseudo=document.querySelector('.bjPseudo')
let pseudo=document.querySelector('input.pseudo')
const titlePseudo=document.querySelector('.titlePseudo')
let attrPseudo=document.querySelector('.pseudo').getAttribute('value')
let img=document.querySelector('.profil');

window.addEventListener('keyup',(e)=>{
    
    if (e.target==pseudo){
        
        titlePseudo.textContent= pseudo.value+",";
        //mettre le petit bonhome à lunette
        // if(pseudo.value=="Admin"&&pseudo.value=="admin"){
        //     img.src="admin.svg"
        // }
    }
})




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