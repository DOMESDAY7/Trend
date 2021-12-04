let pseudo=document.querySelector('input.pseudo')
let titlePseudo=document.querySelector('.titlePseudo')
let img=document.querySelector('.profil');

window.addEventListener('keyup',(e)=>{
    
    if (e.target==pseudo){
        
        titlePseudo.textContent= pseudo.value+",";
        if(pseudo.value=="Admin" || pseudo.value=="admin" ){
            img.src="./public/img/admin.svg"
        }else{
            img.src="./public/img/profil.svg"
        }
    }
})
