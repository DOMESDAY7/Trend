const subButton=document.querySelector('button[type]');
subButton.addEventListener('click',verifLog)
const bjPseudo=document.querySelector('.bjPseudo')
let pseudo=document.querySelector('input.pseudo')
const titlePseudo=document.querySelector('.titlePseudo')
let attrPseudo=document.querySelector('.pseudo').getAttribute('value')

window.addEventListener('change',(e)=>{
    if (e.target==pseudo){
        titlePseudo.textContent= pseudo.value+",";
        
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