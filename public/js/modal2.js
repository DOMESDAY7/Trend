
// Modal 2
let BGops = document.querySelector('.BGmodal2');

document.querySelector('.putComment').addEventListener('click', ()=>{
    // console.log('bonjour');
    
    BGops.classList.toggle('display');
});

BGops.addEventListener('click', ()=>{
    BGops.classList.toggle('display');
})