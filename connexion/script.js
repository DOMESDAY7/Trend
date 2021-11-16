let subButton=document.querySelector('button[type]');
subButton.addEventListener('click',verifLog)


function verifLog(){
    fetch (url,
        {
            headers:{
                'Content-type': 'text/JSON'
            }
        })
        .then((resp)=>resp.json)
        .then()

}