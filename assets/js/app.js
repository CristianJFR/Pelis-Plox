const lognBtn = document.querySelector(".login-btn");
const formPass = document.querySelector(".form-pass");
const trailerLink = document.querySelector(".navbar-brand");

let testing;

lognBtn.addEventListener("click", ()=>{
    if(formPass.value == "admin"){
        testing = 1;
        if(testing == 1){
            trailerLink.href = "hola.xd";
        }
    }else{
        testing = 2;
    }
});

