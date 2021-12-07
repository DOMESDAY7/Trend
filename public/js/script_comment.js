let subBTN = document.querySelector('.BTNpost');
let url = "./api/comment.php";
let message = document.querySelector(".message");
let content_comment = document.querySelector('.containerComments')


window.addEventListener('click', (e) => {
    let date = new Date();
    if (e.target == subBTN) {
        //vérifier si le commentaire n'est pas vide
        //récupération du commentaire dans la textarea
        let contentCom = document.querySelector('#comment').value;
        //création d'un objet que l'on va mettre en json 
        date = beautiDate(date)
        let com = {
            post_date: date,
            ext_billet: id_billet,
            content: cleanData(contentCom),
            ext_utilisateur: id_user,
        };
        console.log(com)
        //smiler()
        //mettre ici l'encodage des smileys
        fetch(url, {
                method: "POST",
                body: JSON.stringify(com),
                headers: {
                    "Content-Type": "application/json",
                }
            })
            .then(
                c = document.createElement('div'),
                c.classList.add('userComment'),
                c.innerHTML = `
            <div class="userComment">
            <span id="hashtag2">#</span>
            <div class="User">
                <div class="ppUser"></div>
                <p class="pseudoUser">${pseudo} </p>
            </div>
            <p class="comment"> ${contentCom}</p>
            <p class="dateUser"> ${date} </p>
        </div>`,
                first = content_comment.firstChild,
                content_comment.insertBefore(c, first),




            )
            .catch(message.textContent = "An error has occurred")
    }

})

//fonction qui met la date sous la forme attendu par la BDD
function beautiDate(date) {
    date = date.getFullYear() + "-" + date.getMonth() + "-" + date.getDate();
    return date;

}

function cleanData(string) {
    string = string.replace(/\\n/g, "\\n")
    string = string.replace(/\\'/g, "\\'")
    string = string.replace(/\\"/g, '\\"')
    string = string.replace(/\\&/g, "\\&")
    string = string.replace(/\\r/g, "\\r")
    string = string.replace(/\\t/g, "\\t")
    string = string.replace(/\\b/g, "\\b")
    string = string.replace(/\\f/g, "\\f");
    return string;
}