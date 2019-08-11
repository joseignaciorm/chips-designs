const navbarToogle = document.getElementById('navbar-toggle'),
      mainNavBar = document.getElementById('main-navbar'),
      navbarItem = document.getElementById('navbar__item');
      navbarItemChild = document.getElementById('navbar--child');


navbarToogle.addEventListener('click', () => {
    mainNavBar.classList.toggle('translate');
})

navbarItem.addEventListener('click', () => {
    navbarItemChild.classList.toggle('dropdown__navbar--child');
})