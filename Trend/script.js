// Show/Hide comments

let SHcomment = document.querySelector('.SHcomments');
let areaComments = document.querySelector('.containerComments');
let eye = document.querySelector('.eye');
let p = document.querySelector('.p');
let show = "Show comments";
let hide = "Hide comments";
let setComment = "prout";


if(setComment == true){
    areaComments.classList.add('show');
}

SHcomment.addEventListener('click', ()=>{
    areaComments.classList.toggle('show');

    if(areaComments.classList.contains('show') ==  true){
        eye.src = "../img/eyeClosed.svg";
        p.textContent = hide;
    }
    
    if(areaComments.classList.contains('show') == false){
        eye.src = "../img/eyeOpen.svg"
        p.textContent = show;
    }
});





// Modal
let BG2 = document.querySelector('.BGmodal');
let croix = document.querySelector('.croix');
let addComment = document.querySelector('.BTNpost');

document.querySelector('.putComment').addEventListener('click', ()=>{
    BG2.classList.toggle('display');
});

croix.addEventListener('click', ()=>{
    BG2.classList.toggle('display');
})

addComment.addEventListener('click', ()=>{
    BG2.classList.toggle('display');
})