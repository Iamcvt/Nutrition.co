var menu = document.querySelector('nav ul');
var menuBar = document.querySelector('nav .menu');
var iconMenu =  document.querySelector('nav .menu img');

menuBar.addEventListener('click', function(){
    menu.classList.toggle('active');
});