let voir = document.querySelectorAll('.voir');
let desc = document.querySelectorAll('.prd-desc');

for(let i = 0; i < voir.length; i++){
    voir[i].addEventListener('click', () => {
        desc[i].classList.toggle('displayBlock');
    })
}