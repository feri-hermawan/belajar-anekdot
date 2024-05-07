/* Toogle Navbar */
const buttonToogleNav = document.querySelector('#navbar-toggle');
const menuNav = document.querySelector('.menu-nav');

buttonToogleNav.addEventListener('click', ()=>{
    menuNav.classList.toggle('hidden');
})
/*----------------------------------*/

/* Button Ubah Profile */
const ubahButton = document.querySelector('.update-profile');
const btnCancel = document.querySelector('#btn-cancel');
const formUpdate = document.querySelector('.form-update');
const biodata = document.querySelector('.biodata');

ubahButton.addEventListener('click',()=>{
    ToogleUpdateProfile();
})

btnCancel.addEventListener('click',()=>{
    ToogleUpdateProfile();
})

function ToogleUpdateProfile(){
    formUpdate.classList.toggle('hidden');
    biodata.classList.toggle('hidden');
}

/*---------------------------------------------*/
