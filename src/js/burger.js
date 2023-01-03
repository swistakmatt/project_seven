const burgerNav = document.querySelector('.burger-nav');
const burgerMenuButton = document.querySelector('.burger-menu-button');
burgerMenuButton.addEventListener('click', () => {
  burgerMenuButton.classList.toggle('open');
  burgerNav.classList.toggle('open');
});