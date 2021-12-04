let pseudo=document.querySelector('input.pseudo')
let titlePseudo=document.querySelector('.titlePseudo')
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
