//GLOBAL VARIABLES
var shop = document.getElementById("shop");
var calendar = document.getElementById("calendar");
var infoChanger = document.getElementById("info");

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
