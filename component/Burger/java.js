    // console.log('ça marche ou bien là');

let button = document.querySelector('.burgerBG');
let burger = document.querySelector('.burger');

document.querySelector('.rondBurger').addEventListener('click', ()=>{
    button.classList.toggle('display');
    burger.classList.toggle('show');
});