document.querySelectorAll('.nav-links a').forEach(link => {
    link.addEventListener('click', function (e) {
        e.preventDefault();
        const targetId = this.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);

        window.scrollTo({
            top: targetElement.offsetTop - 70,
            behavior: 'smooth'
        });
    });
});

const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-links');

hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('show');
    hamburger.classList.toggle('active');
});

let currentIndex = 0;
const slides = document.querySelectorAll('.review-slide');
const totalSlides = slides.length;

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.style.transform = `translateX(${100 * (i - index)}%)`;
    });
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % totalSlides;
    showSlide(currentIndex);
}

setInterval(nextSlide, 3000);


function updateClock() {
    const timeElement = document.getElementById('time');
    const now = new Date();
    const hours = now.getHours();
    const minutes = now.getMinutes();
    const seconds = now.getSeconds();
    const ampm = hours >= 12 ? 'PM' : 'AM';
    const adjustedHour = hours % 12 || 12;
    const formattedTime = `${String(adjustedHour).padStart(2, '0')}:${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')} ${ampm}`;
    timeElement.textContent = formattedTime;
}


setInterval(updateClock, 1000);
updateClock();



document.addEventListener('DOMContentLoaded', function () {
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');

        question.addEventListener('click', () => {
            item.classList.toggle('active');
            faqItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                }
            });
        });
    });
});




function initializeCountdown(endDate, daysId, hoursId, minutesId, secondsId) {
    const countDownDate = new Date(endDate).getTime();


    const countdownFunction = setInterval(function () {
        const now = new Date().getTime();
        const distance = countDownDate - now;


        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);


        document.getElementById(daysId).innerHTML = days;
        document.getElementById(hoursId).innerHTML = hours;
        document.getElementById(minutesId).innerHTML = minutes;
        document.getElementById(secondsId).innerHTML = seconds;


        if (distance < 0) {
            clearInterval(countdownFunction);
            document.getElementById(daysId).innerHTML = "0";
            document.getElementById(hoursId).innerHTML = "0";
            document.getElementById(minutesId).innerHTML = "0";
            document.getElementById(secondsId).innerHTML = "0";

        }
    }, 1000);
}


document.addEventListener("DOMContentLoaded", function () {

    initializeCountdown("December 1, 2024 10:00:00", "days1", "hours1", "minutes1", "seconds1");


    initializeCountdown("January 15, 2025 09:00:00", "days2", "hours2", "minutes2", "seconds2");


});


window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    var scrollTopBtn = document.getElementById("scrollTopBtn");
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
        scrollTopBtn.style.display = "block";
    } else {
        scrollTopBtn.style.display = "none";
    }
}

// Scroll to the top of the document
function scrollToTop() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
}