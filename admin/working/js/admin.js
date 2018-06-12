//GLOBAL VARIABLES
var shop = document.getElementById("shop");
var calendar = document.getElementById("calendar");
var infoChanger = document.getElementById("info");
var newUser = document.getElementById("user");

//SHOW HIDE FUNCTIONS
function ShowShop(){
    var shop = document.getElementById("shop");
    var calendar = document.getElementById("calendar");
    var infoChanger = document.getElementById("info");
    var newUser = document.getElementById("user");
    shop.style.display = "block";
    calendar.style.display = "none";
    infoChanger.style.display = "none";
    newUser.style.display = "none";
}

function ShowCalendar(){
    var shop = document.getElementById("shop");
    var calendar = document.getElementById("calendar");
    var infoChanger = document.getElementById("info"); 
    var newUser = document.getElementById("user");
    shop.style.display = "none";
    calendar.style.display = "block";
    infoChanger.style.display = "none";
    newUser.style.display = "none";
}

function ShowChangeInfo(){
    var shop = document.getElementById("shop");
    var calendar = document.getElementById("calendar");
    var infoChanger = document.getElementById("info");
    var newUser = document.getElementById("user");
    shop.style.display = "none";
    calendar.style.display = "none";
    infoChanger.style.display = "block";
    newUser.style.display = "none";
}

function ShowCreateUser(){
    var shop = document.getElementById("shop");
    var calendar = document.getElementById("calendar");
    var infoChanger = document.getElementById("info");
    var newUser = document.getElementById("user");
    shop.style.display = "none";
    calendar.style.display = "none";
    infoChanger.style.display = "none";
    newUser.style.display = "block";
}
