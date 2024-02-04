const menu = document.querySelectorAll('.menu li');
const slideshows = document.querySelectorAll('.slideshow');

const activateSlideshow = (slideshowId) => {
    slideshows.forEach((slideshow, index) => {
        const menuItem = menu[index];
        if (slideshow.id === slideshowId) {
            slideshow.classList.remove('is-hidden');
            menuItem.classList.add('actives');
        } else {
            slideshow.classList.add('is-hidden');
            menuItem.classList.remove('actives');
        }
    });
};

const pickSection = (e) => {
    const origin = e.target;
    const slideshowId = origin.dataset.sliderId;

    if (slideshowId) {
        activateSlideshow(slideshowId);
    }
};
menu.forEach(li => {
    li.addEventListener('click', pickSection);
});


createSlideShow('business-div');
createSlideShow('design-div');
createSlideShow('tech-div');

// Function to create a slideshow
function createSlideShow(sectionId) {
    let slideIndex = 1;
    showSlides(slideIndex, sectionId);

    function plusSlides(n) {
        showSlides((slideIndex += n), sectionId);
    }

    function currentSlide(n) {
        showSlides((slideIndex = n), sectionId);
    }

    function showSlides(n, sectionId) {
        let i;
        let slides = document.getElementById(sectionId).getElementsByClassName("slides");
        let dots = document.getElementById(sectionId).getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1;
        }
        if (n < 1) {
            slideIndex = slides.length;
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }

    document.getElementById(sectionId).querySelector('.prev').addEventListener('click', () => plusSlides(-1));
    document.getElementById(sectionId).querySelector('.next').addEventListener('click', () => plusSlides(1));

    let dots = document.getElementById(sectionId).getElementsByClassName("dot");
    for (let i = 0; i < dots.length; i++) {
        dots[i].addEventListener('click', () => currentSlide(i + 1));
    }
}

