window.addEventListener('scroll', () => {
    const nav = document.querySelector('.nav-menu')
    nav.classList.toggle('sticky',window.scrollY > 108)
})

const burgerMenu = document.querySelector('.burger-main-menu')

let help = 0
let help1 = 0
let help2 = 0
let help3 =0
let help4 =0
let help5 = 0

document.querySelector('.burger-menu-icon').addEventListener('click', () => {
    if(help%2 == 0) burgerMenu.style.left = '0'
    else burgerMenu.style.left = '-300px'
    help++
})
document.querySelector('.burger-menu-text').addEventListener('click', () => {
    if(help%2 == 0) burgerMenu.style.left = '0'
    else burgerMenu.style.left = '-300px'
    help++
})
document.querySelector('.x').addEventListener('click', () => {
    burgerMenu.style.left = '-300px'
})
document.querySelector(".shop-icon").addEventListener("click", () => {
    if(help1%2 == 0)document.querySelector('.shop-list').style.display = 'block'
    else document.querySelector('.shop-list').style.display = 'none'
    help1++
})
document.querySelector(".blog-icon").addEventListener("click", () => {
    if(help2%2 == 0)document.querySelector('.blog-list').style.display = 'block'
    else document.querySelector('.blog-list').style.display = 'none'
    help2++
})
document.querySelector(".media-icon").addEventListener("click", () => {
    if(help3%2 == 0)document.querySelector('.media-list').style.display = 'block'
    else document.querySelector('.media-list').style.display = 'none'
    help3++
})
document.querySelector(".shortcode-icon").addEventListener("click", () => {
    if(help4%2 == 0)document.querySelector('.shortcode-list').style.display = 'block'
    else document.querySelector('.shortcode-list').style.display = 'none'
    help4++
})
document.querySelector(".pages-icon").addEventListener("click", () => {
    if(help5%2 == 0)document.querySelector('.pages-list').style.display = 'block'
    else document.querySelector('.pages-list').style.display = 'none'
    help5++
})