//GLOBAL VARIABLES
var shop = document.getElementById("shop");
var calendar = document.getElementById("calendar");
var infoChanger = document.getElementById("info");

//SHOW HIDE FUNCTIONS
function ShowShop(){
    var shop = document.getElementById("shop");
    var calendar = document.getElementById("calendar");
    var infoChanger = document.getElementById("info");
    shop.style.display = "block";
    calendar.style.display = "none";
    infoChanger.style.display = "none";
}

function ShowCalendar(){
    var shop = document.getElementById("shop");
    var calendar = document.getElementById("calendar");
    var infoChanger = document.getElementById("info"); 
    shop.style.display = "none";
    calendar.style.display = "block";
    infoChanger.style.display = "none";
}

function ShowChangeInfo(){
    var shop = document.getElementById("shop");
    var calendar = document.getElementById("calendar");
    var infoChanger = document.getElementById("info");
    shop.style.display = "none";
    calendar.style.display = "none";
    infoChanger.style.display = "block";
}
