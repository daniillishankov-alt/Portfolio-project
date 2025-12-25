    // theme chek

const toggleBtn = document.getElementById("theme-toggle");


if (localStorage.getItem("theme") === "dark") {
    document.body.classList.add("dark-theme");
}

    // theme switching

toggleBtn.addEventListener("click", () => {
    document.body.classList.toggle("dark-theme");

    if (document.body.classList.contains("dark-theme")) {
        localStorage.setItem("theme", "dark");
    } else {
        localStorage.setItem("theme", "light");
    }
});

    // dropdown

document.querySelectorAll('.dropdown-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        const menu = btn.parentElement;

        menu.classList.toggle('open');
    });
});

    // Cookies

const cookieMessage = document.querySelector('.cookie-message');
const acceptCookie = document.querySelector('.accept-cookie');
let cookieAccepted = localStorage.getItem('cookieAccepted');

if (cookieAccepted === 'true'){
    cookieMessage.style.display = 'none';
} else {
    cookieMessage.style.display = 'block';
}


acceptCookie.addEventListener('click', () => {
    cookieMessage.style.display = 'none';
    localStorage.setItem('cookieAccepted', 'true');
});

    // Greetings depends on current time

const greetings = document.getElementById("time_greetings");
let date_time = new Date();
let hours= date_time.getHours();
let year = date_time.getFullYear();
const year_of_copyright = document.getElementById("year_of_copyright");

    year_of_copyright.innerText = year;

function greetings_by_time(){
    if(hours >= 6 && hours < 12){
        greetings.innerText = "Goedemorgen!";
    }else if(hours >= 12 && hours < 18){
        greetings.innerText = "Goedemiddag!";
    }else if(hours >= 18 && hours !== 0){
        greetings.innerText = "Goedenavond!";
    }else{
        greetings.innerText = "Goedenacht!";
    }
}

greetings_by_time()

    // Navigation "burger" menu

const nav_menu_button = document.getElementById('nav_menu_button');
const nav_menu = document.getElementById('nav_menu');

    nav_menu_button.addEventListener('click', () => {
        nav_menu_button.classList.toggle('active');
        nav_menu.classList.toggle('active');
});

                    //Birthday countdown

const birth_day = 28;
const birth_month = 1;
const birthday_timer = document.getElementById("birthday_timer");

function updateBDCountdown(){
    let currentDate = new Date();
    let birthDayDate = new Date(
        currentDate.getFullYear(),
        birth_month,
        birth_day
    );

    currentDate.setHours(0,0,0,0,);
    birthDayDate.setHours(0,0,0,0);

    if(birthDayDate.getTime() === currentDate.getTime()){
        birthday_timer.innerText = "Vandaag is mijn verjaardag";
        return;
    }else if (birthDayDate < currentDate){
        birthDayDate.setFullYear(currentDate.getFullYear() + 1);
    }

    let BDDifference = birthDayDate - currentDate;
    let daysUntilBD = Math.ceil(BDDifference / (1000 * 60 * 60 * 24));

    if (daysUntilBD === 1){
        birthday_timer.innerText = "Nog " + daysUntilBD + " dag tot mijn verjaardag";
    }else{
        birthday_timer.innerText = "Nog " + daysUntilBD + " dagen tot mijn verjaardag";
    }
}
    updateBDCountdown();
    setInterval(updateBDCountdown, 1000 * 60 * 60 * 24);