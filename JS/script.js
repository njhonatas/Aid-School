let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .nav');
let header = document.querySelector('.header');

menu.onclick = () => {
   menu.classList.toggle('fa-times');
   navbar.classList.toggle('active');
};

window.addEventListener('resize', () => {
   if (window.innerWidth > 768) {
      navbar.classList.remove('active');
      menu.classList.remove('fa-times');
   }
});

window.addEventListener('scroll', () => {
   if (window.scrollY > 0) {
      header.classList.add('active');
   } else {
      header.classList.remove('active');
   }
});
