// animeJS

function animate(){
    anime({
        targets: ".header",
        top: "10px",
        easing: "easeInOutBack",
        duration: 1500,
    });
    anime({
        targets: ".center",
        top: "50%",
        opacity: "100",
        easing: "easeInOutBack",
        duration: 2000, 
    });
    
}
animate()


//darkMode
const input = document.querySelector('#darkMode');
const png = document.querySelector('.png')

const main = document.querySelector('.main'),
    section = main.querySelector('.partie2')

input.addEventListener('click', () => {
    main.classList.toggle('darkMode')
    if(main.classList.contains('darkMode')){
        png.src = `../assets/img/soleil.png`;
    }else{
        png.src = `../assets/img/nuit.png`;
    }   
})
