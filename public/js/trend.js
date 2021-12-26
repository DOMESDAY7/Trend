// Show/Hide comments

let SHcomment = document.querySelector('.SHcomments');
let areaComments = document.querySelector('.containerComments');
let eye = document.querySelector('.eye');
let p = document.querySelector('.p');
let show = "Show comments";
let hide = "Hide comments";

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


