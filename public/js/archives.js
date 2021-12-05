let miniModal = document.querySelector('.miniModal');
let BTNdate = document.querySelector('.BTNdate');
let show = document.querySelector('.show');
let search = document.querySelector('#search');
let color = document.querySelector('.color');
let part = document.querySelector(".part2");

// if(miniModal){
//     console.log('oui');
// }

BTNdate.addEventListener('click', () => {
    console.log('oui');
    miniModal.classList.toggle('show');
    search.classList.toggle('top');
    BTNdate.classList.toggle('color');
});


window.addEventListener('keyup',(e)=>{
    if(e.target==search){
        query()
    }
})

function query()
{let q = search.value;
    console.log(q)
//recherche dans la bdd
fetch('./api/billet.php',{
method:"POST",
body:q,
headers:{
    'Content-Type': 'text/html'
}
}
    )
    .then((resp)=>console.log(resp.json())) //on obtient un tableau ou se trouve nos données
    .then((data)=>
        part.innerHTML = `
    <a href="../Trend/?id_billet=${data.id_billet}">
    <div class="exTrend1">
        <div class="textsTrend">
        <!-- pour le hashtag on va mettre le lien de l'article -->
            <h1><span id="hashtag">#</span> ${data.titre} </h1>
            <p class="description"> ${data.short_description} </p>
            <p class="date"> ${data.date} </p>
        </div>
        <div class="imgTrend">
            <img src="./public/img/pc.jpg" alt="">
        </div>
    </div>
</a>`

    )}