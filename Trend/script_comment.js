let subBTN=document.querySelector('.BTNpost');
let url="http://localhost/trend/api/comment.php";
let message=document.querySelector(".message");
let content_comment=document.querySelector('.containerComments')


window.addEventListener('click',(e)=>{
    let date = new Date();
    if(e.target==subBTN){
        //vérifier si le commentaire n'est pas vide
       //récupération du commentaire dans la textarea
        let contentCom=document.querySelector('#comment').value;
        //création d'un objet que l'on va mettre en json 
        date=beautiDate(date)
        let com = {
            post_date:"",
            ext_billet:"",
            content:"",
            ext_utilisateur:"",
        };
        //rajout des choses dans l'objet
        com.post_date=date;
        com.ext_billet=id_billet;
        com.content=contentCom;
        com.ext_utilisateur=id_user;
        
        // com[post_date]=date;
        // com[ext_billet]=id_billet;
        // com[content]=contentCom;
        // com[ext_utilisateur]=id_user;
        console.log(com)
        //smiler()
        //mettre ici l'encodage des smileys
        fetch(url,{
            method:"POST",
            body:JSON.stringify(com),
            headers:{
                "Content-Type":"application/json",
            }
        })
        .then(
            c=document.createElement('div'),
            c.classList.add('userComment'),
            c.innerHTML= `<div class="userComment">
            <span id="hashtag2">#</span>
            <div class="User">
                <div class="ppUser"></div>
                <p class="pseudoUser">${pseudo} </p>
            </div>
            <p class="comment"> ${contentCom}</p>
            <p class="dateUser"> ${date} </p>
        </div>`,
            content_comment.appendChild(c)
           


        )
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