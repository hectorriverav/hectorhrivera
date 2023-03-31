document.addEventListener('DOMContentLoaded', function(){
    iniciarApp();
});

function iniciarApp(){
    galeryPortfolio();
};

// Portfolio Galery
function galeryPortfolio() {
    const galery= document.querySelector('.PortfolioGalery');

    for(let i = 1; i <= 19; i++ ){
        const image = document.createElement('picture');
        image.innerHTML = `
            <source srcset="build/img/Thumb/${i}.webp" type="image/webp">
            <img loading="lazy"  src="build/img/Thumb/${i}.webp" alt="Small image portfolio">
        `;
        image.onclick = function() {
            // showImage(i);
            showImage(i);
        }

        galery.appendChild (image);
    }
}

// Showing portfolio galery

    function showImage(id){
        const image = document.createElement('picture');
        image.innerHTML = `
            <source srcset="build/img/Big/${id}.webp" type="image/webp">
            <img loading="lazy" src="build/img/Big/${id}.webp" alt="Small image portfolio">
        `;
   

        // Image Overlay
        const overlay = document.createElement("DIV");
        overlay.appendChild(image);
        overlay.classList.add("Overlay");
        overlay.onclick = function(){
            const body = document.querySelector('body');
            body.classList.remove("FixBody");
            overlay.remove();
        }

        //To close modal
        const CloseImage = document.createElement('P');
        CloseImage.textContent = 'X';
        CloseImage.classList.add('CloseButton');
        CloseImage.onclick = function() {
            const body = document.querySelector('body');
            body.classList.remove("FixBody");
            overlay.remove();
        }
        overlay.appendChild(CloseImage);
        
        //Add image to HTML
        const body = document.querySelector("body");
            body.appendChild(overlay);
            body.classList.add("FixBody");
    }

    


//Hamburger menu
    const hamburgerMenu = document.querySelector(".hamburger-menu");
    const menu = document.querySelector(".menu");

    hamburgerMenu.addEventListener("click", () => {
    menu.classList.toggle("show");
    });