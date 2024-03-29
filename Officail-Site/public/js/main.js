window.addEventListener("scroll", function () {
    //logo display when scrolling
    const logo = document.getElementById('logo');
    const scrollPosition = window.scrollY; // Get current scroll position

    if (scrollPosition >= 200) { // Threshold for logo change
        logo.src = "images/logo_hrz.png"; // Change the logo image
        logo.classList.add('scrolled'); // Apply optional CSS class for further styling
    } 
    else if(page=="contactUs" || page=="afterSubmit"){
        
    } 
    else {
        logo.src = "images/logo without bg2.png"; // Revert to initial logo if scrolled back up
        logo.classList.remove('scrolled');
    }
    
    //Header color change when scrolling
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
   
    //add animation when scrolling
    var reveals = document.querySelectorAll('.reveal');
    for (var i = 0; i < reveals.length; i++) {
        //get window height
        var windowheight = window.innerHeight;
        var revealtop = reveals[i].getBoundingClientRect().top;
        var revealpoint = 150;
        if (revealtop < windowheight - revealpoint) {
            reveals[i].classList.add('active');   
        }
        else {
            reveals[i].classList.remove('active');
        }
    }
});


var path = window.location.pathname;
var page = path.split("/").pop();
// console.log( page )

if(page==""){
    window.addEventListener("scroll", function () {
        var timelineSec = document.querySelector('.timelineSec');
        var observer = new IntersectionObserver(function (entries, observer) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    timelineSec.classList.add('animate-scroll');
                } else {
                    timelineSec.classList.remove('animate-scroll');
                }
            }); 
        });
        observer.observe(timelineSec);
        });
    let daysItem = document.querySelector("#days");
    let hoursItem = document.querySelector("#hours");
    let minItem = document.querySelector("#min");
    let secItem = document.querySelector("#sec");


    let countDown = () => {
    let futureDate = new Date("19 Jan 2024");
    let currentDate = new Date();
    let myDate = futureDate - currentDate;
    //console.log(myDate);

    let days = Math.floor(myDate / 1000 / 60 / 60 / 24);

    let hours = Math.floor(myDate / 1000 / 60 / 60) % 24;

    let min = Math.floor(myDate / 1000 / 60) % 60;

    let sec = Math.floor(myDate / 1000) % 60;

    if(days>=0){
        daysItem.innerHTML = days;
        hoursItem.innerHTML = hours;
        minItem.innerHTML = min;
        secItem.innerHTML = sec;
    }
    else{
        daysItem.innerHTML = 0;
        hoursItem.innerHTML = 0;
        minItem.innerHTML = 0;
        secItem.innerHTML = 0;
    }
    
    }

    countDown();

    setInterval(countDown, 1000);
}

// const chckDrpdwn=document.querySelector(".dropdown");
// if( chckDrpdwn!=null ){
//     const spon=document.querySelector(".dropdwn-shw");
//     const navLinks = document.querySelectorAll('.nav-item')
//     const menuToggle = document.getElementById('navbarNav')
//     const bsCollapse = new bootstrap.Collapse(menuToggle, {toggle:false})
//     navLinks.forEach((l) => {
//         if(l.className!="nav-item dropdown"){
//             l.addEventListener('click', () => { bsCollapse.toggle() });
//         }
        
//     })
//     spon.addEventListener('click', () => { bsCollapse.toggle() });
// }


const navLinks = document.querySelectorAll('.nav-item')
const menuToggle = document.getElementById('navbarNav')
const bsCollapse = new bootstrap.Collapse(menuToggle, {toggle:false})
navLinks.forEach((l) => {
    if(l.className!="nav-item dropdown"){
        l.addEventListener('click', () => { bsCollapse.toggle() });
    }
    
})


