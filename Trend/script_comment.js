let subBTN=document.querySelector('.BTNpost');
const url="../API/comment.php";
let message=document.querySelector(".message");
let date = new Date();

window.addEventListener('click',(e)=>{
    if(e.target==subBTN){
       //récupération du commentaire dans la textarea
        let contentCom=document.querySelector('#comment').value;
        //création d'un objet que l'on va mettre en json 
        date=beautiDate(date)
        let com = new Object();
        //rajout des choses dans l'objet
        com[post_date]=date;
        com[ext_billet]=id_billet;
        com[content]=contentCom;
        com[ext_utilisateur]=id_user;
        //smiler()
        //mettre ici l'encodage des smileys
        fetch(url,{
            method:"POST",
            body:JSON.stringify(com),
            headers:{
                "Content-Type":"application/json",
            }
        })
        .catch (message.textContent="An error has occurred")



    }

})
//fonction pour encoder des smileys dans la bdd JS
function smiler(text){
    text.replace(":)","")
}
//fonction qui met la date sous la forme attendu par la BDD
function beautiDate(date){
    date=date.getFullYear()+"-"+date.getMonth()+"-"+date.getDate();
    return date;
    
}