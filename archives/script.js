let miniModal = document.querySelector('.miniModal');
let BTNdate = document.querySelector('.BTNdate');
let show = document.querySelector('.show');
let search = document.querySelector('#search');
let color = document.querySelector('.color');

// if(miniModal){
//     console.log('oui');
// }

BTNdate.addEventListener('click', ()=>{
    console.log('oui');
    miniModal.classList.toggle('show');
    search.classList.toggle('top');
    BTNdate.classList.toggle('color');
});