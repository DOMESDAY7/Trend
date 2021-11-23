let subBTN=document.querySelector('.BTNpost');


window.addEventListener('click',(e)=>{
    if(e.target==subBTN){
       //récupération du commentaire dans la textarea
        let com=document.querySelector('#comment').value;
        com.replace('')
        var comRequest=new Request("") 
        fetch(url)
        .then((response)=>{
            return response.blob()
        })
        .then(()=>{
            url
        })



    }

})
//fonction pour mettre des smileys dans la bdd JS
function smiler(text){
    text.replace(":)","")
}