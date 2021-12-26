// Modal 1
let BGcomment = document.querySelector('.BGmodal');
let croix = document.querySelector('.croix');
let addComment = document.querySelector('.BTNpost');

document.querySelector('.putComment').addEventListener('click', ()=>{
    BGcomment.classList.toggle('display');
});

croix.addEventListener('click', ()=>{
    BGcomment.classList.remove('display');
})

addComment.addEventListener('click', ()=>{
    BG2.classList.toggle('display');
})