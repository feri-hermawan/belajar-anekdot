//Humburger Nav Toogle
const hamburger = document.querySelector('#hamburger');
const navMenu = document.querySelector('#nav-menu');
const sidebarDiv = document.querySelector('#sidebar');
hamburger.addEventListener('click',()=>{
   hamburger.classList.toggle('hamburger-active');
   navMenu.classList.toggle('hidden');
   sidebarDiv.classList.toggle('absolute');
   sidebarDiv.classList.toggle('z-10');
});

//Nav-Menu (mobile ver)

