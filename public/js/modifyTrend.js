let trends = document.querySelectorAll(".contentTrend")
let short_description = document.querySelector("#short_description")
let titre = document.querySelector("#title")
let article = document.querySelector("#article")
let subBtn = document.querySelector("body > form > button")
let inputIdTrend = document.querySelector("#idTrend")
let toast =  `

<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
  <div id="liveToast" class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header bg-dark">
      🥰
      <strong class="me-auto">Trend</strong>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body bg-secondary text-white">
    The changes have been implemented
    </div>
  </div>
</div>`
trends.forEach(trend => {
    trend.addEventListener("click", () => {
        let id = trend.getAttribute("data-trend");
        showInForm(id);
        inputIdTrend.value = id
    })
});


function showInForm(id) {

    let url = "./API/getTrend.php?id_trend=" + id


    fetch(url)
        .then((resp) => resp.json())
        .then((data) => {
                short_description.value = data.short_description
                titre.value = data.titre
                article.value = data.article
            }

        )
}
subBtn.addEventListener("click", () => {
    if (inputIdTrend.value == "") {
        alert("Any trends are selected")
    } else if (confirm("The changes will be final")) {
        let newTrend = {
            short_description: `${short_description.value}`,
            titre: `${titre.value}`,
            article: `${article.value}`,

        }
        modifyTrend(newTrend, inputIdTrend.value);
    }

})

function modifyTrend(obj, id) {
    let url = "./API/modifyTrend.php?id_trend=" + id;
    fetch(url, {
        method: 'POST',
        body: JSON.stringify(obj),
        headers: {
            'Content-type': 'application/json; charset=UTF-8'
        }

    }).then(() => {
        document.body.innerHTML += toast
        console.log(id);
        
        document.querySelector(`body > div.list-group.w-50 > a:nth-child(${id}) > div > div > h5`).textContent =`${obj.titre}`
        document.querySelector( `body > div.list-group.w-50 > a:nth-child(${id}) > div > p` ).textContent = `${obj.short_description}`
        

    })

}