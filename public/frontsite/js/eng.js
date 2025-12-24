// Landing
const leftArrow = document.querySelector('.fa-angle-left');
const rightArrow = document.querySelector('.fa-angle-right');
const bullets = document.querySelectorAll('.bullets li');
const landing = document.querySelector('.landing');
const backgrounds = [
    '/images/landing-01.webp',
    '/images/landing.jpg',
    '/images/landing-02.webp'
];
let currentIndex = 1;

function updateBackground(index) {
    landing.style.backgroundImage = `url(${backgrounds[index]})`;

    document.querySelector('.bullets li.active')?.classList.remove('active');
    bullets[index].classList.add('active');
}
leftArrow.addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + backgrounds.length) % backgrounds.length;
    updateBackground(currentIndex);
});
rightArrow.addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % backgrounds.length;
    updateBackground(currentIndex);
});
bullets.forEach((bullet, index) => {
    bullet.addEventListener('click', () => {
        currentIndex = index;
        updateBackground(currentIndex);
    });
});
updateBackground(currentIndex);
// console.log(landing.style.backgroundImage);
setInterval(() => {
    rightArrow.click();
}, 5000);

//Portfolio
const filterItems = document.querySelectorAll('.portfolio .shuffle li');
const imageBoxes = document.querySelectorAll('.portfolio .imgs-container .box');

function filterImages() {
    const activeFilter = document.querySelector('.portfolio .shuffle li.active').textContent.trim().toLowerCase();

    imageBoxes.forEach((box) => {
        const imageCategory = box.querySelector('h4').textContent.trim().toLowerCase();

        if (activeFilter === 'all' || activeFilter === imageCategory) {
            box.style.display = 'block';
        } else {
            box.style.display = 'none';
        }
    });
}

function updateActiveFilter() {
    filterItems.forEach(item => item.classList.remove('active'));
    this.classList.add('active');
    filterImages();
}

filterItems.forEach(item => {
    item.addEventListener('click', updateActiveFilter);
});

filterImages();

//stats
document.addEventListener("DOMContentLoaded", () => {
    const statBoxes = document.querySelectorAll(".stats .box .number");

    statBoxes.forEach(box => {
        const targetNumber = parseInt(box.textContent.replace(/\D/g, "")); // Extract number
        let currentNumber = 0;
        const increment = Math.ceil(targetNumber / 100); // Adjust increment speed

        const updateNumber = () => {
            currentNumber += increment;
            if (currentNumber >= targetNumber) {
                box.textContent = `${targetNumber}+`;
                return;
            }
            box.textContent = `${currentNumber}+`;
            requestAnimationFrame(updateNumber); // Smooth animation
        };

        updateNumber();
    });
});
//testimonials
// Select all testimonial boxes and bullets
const testimonialBoxes = document.querySelectorAll('.testimonials .box');
const bullets_testimonial = document.querySelectorAll('.testimonials .bullets li');

const imageSources = [
    ['/images/skills-01.jpg', '/images/skills-02.webp', '/images/eng1.webp'],
    ['/images/eng2.webp', '/images/eng3.webp', '/images/eng4.webp'],
    ['/images/hat.jpg', '/images/skills-01.jpg', '/images/skills-02.webp']
];

let i = 0; // Start with the first group

// Function to update visible testimonials
function updateTestimonials(index) {
    const totalBoxes = testimonialBoxes.length;

    // Hide all testimonials
    testimonialBoxes.forEach((testimonial) => {
        testimonial.style.display = 'none';
    });

    // Calculate and display the three testimonials in the group
    for (let i = 0; i < 3; i++) {
        const boxIndex = (index + i) % totalBoxes;
        testimonialBoxes[boxIndex].style.display = 'flex';

        // Update the image sources for the active testimonial
        const imgElement = testimonialBoxes[boxIndex].querySelector('img');
        imgElement.src = imageSources[index][i];  // Change image based on index
    }

    // Update bullets
    bullets_testimonial.forEach((bullet, i) => {
        bullet.classList.toggle('active', i === index);
    });
}

// Initialize with the first group of testimonials
updateTestimonials(i);

// Add click events to bullets
bullets_testimonial.forEach((bullet, index) => {
    bullet.addEventListener('click', () => {
        i = index;
        updateTestimonials(i);
    });
});

// Auto-slide functionality
setInterval(() => {
    i = (i + 1) % imageSources.length;
    updateTestimonials(i);
}, 5000); // Change every 5 seconds




