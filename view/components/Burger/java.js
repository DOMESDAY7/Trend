    // console.log('ça marche ou bien là');

let BG = document.querySelector('.burgerBG');
let burger = document.querySelector('.burger');

document.querySelector('.rondBurger').addEventListener('click', ()=>{
    BG.classList.toggle('display');
    burger.classList.toggle('show');
});