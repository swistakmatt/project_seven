const burgerNav = document.querySelector('.burger-nav');
const burgerMenuButton = document.querySelector('.burger-menu-button');
burgerMenuButton.addEventListener('click', () => {
  burgerNav.classList.toggle('open');
});