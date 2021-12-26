// Show/Hide comments

let SHcomment = document.querySelector('.SHcomments');
let areaComments = document.querySelector('.containerComments');
let eye = document.querySelector('.eye');
let p = document.querySelector('.p');
let show = "Show comments";
let hide = "Hide comments";



if(setComment == true){
    areaComments.classList.add('show');
}

SHcomment.addEventListener('click', ()=>{
    areaComments.classList.toggle('show');

    if(areaComments.classList.contains('show') ==  true){
        eye.src = "./public/img/eyeClosed.svg";
        p.textContent = hide;
    }
    
    if(areaComments.classList.contains('show') == false){
        eye.src = "./public/img/eyeOpen.svg"
        p.textContent = show;
    }

    if(areaComments.innerHTML == null){
        areaComments.textContent="Be the first"
    }

});

// Modal 1
let BGcomment = document.querySelector('.BGmodal');
let croix = document.querySelector('.croix');
let addComment = document.querySelector('.BTNpost');

document.querySelector('.putComment').addEventListener('click', ()=>{
    BGcomment.classList.toggle('display');
    console.log("prouy");
});

croix.addEventListener('click', ()=>{
    BG2.classList.toggle('display');
})

addComment.addEventListener('click', ()=>{
    BG2.classList.toggle('display');
})


// Modal 2
// let BGops = document.querySelector('.BGmodal2');

// document.querySelector('.putComment').addEventListener('click', ()=>{
    // BGops.classList.toggle('display');
    // console.log("gnah");
// });

// BGops.addEventListener('click', ()=>{
    // BGops.classList.toggle('display');
// })