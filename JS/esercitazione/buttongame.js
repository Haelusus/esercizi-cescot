var clickMeButton = document.getElementById("click-me-button");
clickMeButton.addEventListener('mouseenter', function(){
    clickMeButton.style.top = Math.random() * 100 + "%";
    clickMeButton.style.left = Math.random() * 100 + "%";
})//mouseenter permette di far scappare il bottone appena mi avvicino con il mouse

var showPasswordBtn = document.getElementById('password')
showPasswordBtn.addEventListener('click',function(){
    let passwordInput = document.getElementById('password');

    if (passwordInput.getAttribute('type') == 'password'){
        passwordInput.setAttribute('type', 'text');
        showPasswordBtn.innerText = "nascondi";
    } else{
        passwordInput.setAttribute('type','password');
        passwordInput.innerText = "mostra";
    }
    
});
passwordInput.addEventListener