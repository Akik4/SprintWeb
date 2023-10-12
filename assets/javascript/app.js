// animeJS

function animate(){
    anime({
        targets: ".headPage",
        top: "0px",
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
    let x = main.classList.toggle('darkMode')
    if(main.classList.contains('darkMode')){
        png.src = `assets/img/soleil.png`;
    }else{
        png.src = `assets/img/nuit.png`;
    }   
})



// //PARALLAX

// document.addEventListener('mousemove', parallax)

// function parallax (e){
//     this.querySelector('.layer').forEach(Layer => {
//         const speed = Layer.getAttribute('data-speed')

//         const x = (window.innerWidth - e.pageX*speed)/100;
//         const y = (window.innerHeight - e.pageY*speed)/100;

//         Layer.style.transform = `translateX(${x}px) translateY(${y}px)`;
//     })
// }