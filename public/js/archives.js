let miniModal = document.querySelector('.miniModal');
let BTNdate = document.querySelector('.BTNdate');
let show = document.querySelector('.show');
let search = document.querySelector('#search');
let color = document.querySelector('.color');
let part = document.querySelector(".part2");
let btn = document.querySelector(".btn")
let part2 = document.querySelector(".part2")



window.addEventListener('keyup', (e) => {
    if (e.target == search) {
        query()
    }
})

function query() {
    let q = search.value;
    console.log(q)
    //recherche dans la bdd
    fetch('./api/billet.php', {
            method: "POST",
            body: q,
            headers: {
                'Content-Type': 'text/html'
            }
        })
        .then((resp) => resp.json()) //on obtient un tableau ou se trouve nos données
        .then((data) => {
            let tab = data
            part.innerHTML = "",
                tab.forEach(el => {
                    let billet = document.createElement('a')
                    let link = `?page=trend&id_billet=${el.id_billet}`
                    console.log(el);
                    
                    billet.href = link
                    billet.innerHTML = `
                    <div class="exTrend1">
                    <div class="textsTrend">
                    <!-- pour le hashtag on va mettre le lien de l'article -->
                        <h1><span id="hashtag">#</span> ${el.titre} </h1>
                        <p class="description"> ${el.short_description} </p>
                        <p class="date"> ${el.date} </p>
                    </div>
                    <div class="imgTrend">
                        <img src="./public/img/trendPic/${el.imgName}">
                    </div>
                </div>`

                    part.appendChild(billet)
                })
        })
}
// btn.addEventListener("click",inverseSort)
// function inverseSort(){
//     let trends = document.querySelectorAll(".part2>a")
//     let cpt = 0 ;
//     while ( cpt<trends.length){
//         trends==
//         cpt++;
//     }
// }