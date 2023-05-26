const menu = document.querySelector('.menu input');
const nav = document.querySelector('#navbar');



menu.addEventListener('click', function(){
    nav.classList.toggle('slide');
});


function passBtn(){
    const input = document.getElementById('inputPassword');
    const icon = document.getElementById('eyeIcon');

    if(input.type == 'password'){
        input.type = 'text';
        icon.classList = 'bi bi-eye-slash';
    } else{
        input.type = 'password';
        icon.classList = 'bi bi-eye';
    }
}