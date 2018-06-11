//GLOBAL VARIABLES
const shop = document.getElementById("shop");
const calendar = document.getElementById("calendar");
const infoChanger = document.getElementById("info");

//SHOW HIDE FUNCTIONS
function ShowShop(){
    shop.style.display = "block";
    calendar.style.display = "none";
    infoChanger.style.display = "none";
}

function ShowCalendar(){
    shop.style.display = "none";
    calendar.style.display = "block";
    infoChanger.style.display = "none";
}

function ShowChangeInfo(){
    shop.style.display = "none";
    calendar.style.display = "none";
    infoChanger.style.display = "block";
}
