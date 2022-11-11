let menu = document.querySelector('.menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    navbar.classList.toggle("open-menu");
    menu.classList.toggle('move');
}
menu.onscroll = () =>{
    navbar.classList.remove("open-menu");
    menu.classList.remove('move');
}

// email js 
function validate(){
    let name = document.querySelector(".name");
    let email = document.querySelector(".email");
    let msg = document.querySelector(".message");
    let sendBtn = document.querySelector(".send-btn");


    sendBtn.addEventListener('click', (e)=> {
        e.preventDefault();
        if (name.value == "" || email.value== ""|| msg.value == ""){
            emptyerror();
        }else{
            sendmail(name.value, email.value, msg.value);
            success();
        }
    });
}
validate();
function sendmail(name,email,msg){
    emailjs.send("service_wvzf9w6","template_vh1e3da",{
        from_name: email,
        to_name: name,
        message: msg,
        });
}

function emptyerror()
{
    swal({
        title: "Oh On....!",
        text: "Fields cannot be empty !",
        icon: "error",
        
      });
}
function success()
{
    swal({
        title: "Email sent Successfully",
        text: "I try to reply in 24 hours!",
        icon: "success",
        
      });
}


// Header Backgroud change on scroll 
let header = document.querySelector("header");
window.addEventListener("scroll", ()=>{
    header.classList.toggle("header-active",window.scrollY > 0);
})
// Scroll Top
let scrollTop = document.querySelector(".scroll-top");
window.addEventListener("scroll", ()=>{
    scrollTop.classList.toggle("scroll-active",window.scrollY >= 400);
})
