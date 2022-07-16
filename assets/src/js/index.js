 window.addEventListener('scroll', () => {
    const nav = document.querySelector('.nav-menu')
     nav.classList.toggle('sticky',window.scrollY > 108)
 })

const menu = document.querySelector('nav');

const hamburger = document.querySelector('.hamburger-icon');
const hamburgerBars = document.querySelectorAll('.hamburger-icon__bar');
const nav = document.querySelector('nav');
hamburger.addEventListener('click', () => {
  hamburgerBars.forEach((item) => {
    item.classList.toggle(`hamburger-icon__bar--clicked`);
  });
  nav.classList.toggle('opened');
});