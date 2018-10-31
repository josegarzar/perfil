const botonMenu = document.querySelector('button.menu');
const elementosNav = document.querySelector('.links-menu');
const navbarMenu = document.querySelector('.navbar-menu');

botonMenu.addEventListener('click', () => {
  if(elementosNav.style.display == 'block') {
    elementosNav.style.display = 'none';
    botonMenu.style.color = '#000';
    botonMenu.style.background = 'transparent';
    navbarMenu.style.backgroundColor = 'transparent';
    navbarMenu.style.height = '0px';
  } else {
    elementosNav.style.display = 'block';
    elementosNav.style.color = '#fff';
    botonMenu.style.color = '#fff';

    /* botonMenu.style.background = '#000'; */
    navbarMenu.style.backgroundColor = 'rgba(0,0,0,0.95)';
    navbarMenu.style.height = '100%';
  }
});
