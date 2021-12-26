let subBTN = document.querySelector('.BTNpost');
let url = "./API/comment.php";
let message = document.querySelector(".message");
let content_comment = document.querySelector('.containerComments')


window.addEventListener('click', (e) => {
    let date = new Date();
    if (e.target == subBTN) {

        let contentCom = document.querySelector('#comment').value;
        //création d'un objet que l'on va mettre en json 
        date = beautiDate(date)
        let com = {
            post_date: date,
            ext_billet: id_billet,
            content: contentCom,
            ext_utilisateur: id_user,
        };

        fetch(url, {
                method: "POST",
                body: JSON.stringify(com),
                headers: {
                    "Content-Type": "application/json",
                }
            })
            .then(
                newCom = document.createElement('div'),
                newCom.classList.add('userComment'),
                newCom.innerHTML = `
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
                content_comment.insertBefore(newCom, first)

            )
            .catch(message.textContent = "An error has occurred")
    }

})

function beautiDate(date) {
    date = date.getFullYear() + "-" + date.getMonth() + "-" + date.getDate();
    return date;
}

// function cleanData(string) {
//     string = string.replace(/\\n/g, "\\n")
//     string = string.replace(/\\'/g, "\\'")
//     string = string.replace(/\\"/g, '\\"')
//     string = string.replace(/\\&/g, "\\&")
//     string = string.replace(/\\r/g, "\\r")
//     string = string.replace(/\\t/g, "\\t")
//     string = string.replace(/\\b/g, "\\b")
//     string = string.replace(/\\f/g, "\\f");
//     return string;
// }