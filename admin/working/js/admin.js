//GLOBAL VARIABLES
//var mainPages = [document.getElementById("shop"), document.getElementById("calendar"), document.getElementById("info"), document.getElementById("user")];
/*
var shop = document.getElementById("shop");
var calendar = document.getElementById("calendar");
var infoChanger = document.getElementById("info");
var newUser = document.getElementById("user");
*/
//Open close navbar
function w3_open() {
    document.getElementById("main").style.marginLeft = "25%";
    document.getElementById("mySidebar").style.width = "25%";
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("openNav").style.display = 'none';
  }
  function w3_close() {
    document.getElementById("main").style.marginLeft = "0%";
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("openNav").style.display = "inline-block";
  } 

//SHOW HIDE FUNCTIONS LEFT NAVBAR
function ShowShop(){
    var shop = document.getElementById("shop");
    var calendar = document.getElementById("calendar");
    var infoChanger = document.getElementById("info");
    var newUser = document.getElementById("user");
    //var save = document.getElementById("userSaved");
    //save.style.direction = "none"
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
    //var save = document.getElementById("userSaved");
   // save.style.direction = "none"
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
    //var save = document.getElementById("userSaved");
    //save.style.direction = "none"
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
    //var save = document.getElementById("userSaved");
    //save.style.direction = "none"
    shop.style.display = "none";
    calendar.style.display = "none";
    infoChanger.style.display = "none";
    newUser.style.display = "block";
}

//---Show Hide shop options---//
function showShopAdd(){
    var add = document.getElementById("shopAdd");
    var update = document.getElementById("shopUpdate");
    var del = document.getElementById("shopDelete");
    var addContent = document.getElementById("shopAddContent");
    var updateContent = document.getElementById("shopUpdateContent");
    var delContent = document.getElementById("shopDeleteContent");
    addContent.style.display = "block";
    updateContent.style.display = "none";
    delContent.style.display = "none";
    add.className = "nav-link active";
    update.className = "nav-link";
    del.className = "nav-link";
}
function showShopUpdate(){
    var add = document.getElementById("shopAdd");
    var update = document.getElementById("shopUpdate");
    var del = document.getElementById("shopDelete");
    var addContent = document.getElementById("shopAddContent");
    var updateContent = document.getElementById("shopUpdateContent");
    var delContent = document.getElementById("shopDeleteContent");
    addContent.style.display = "none";
    updateContent.style.display = "block";
    delContent.style.display = "none";
    add.className = "nav-link";
    update.className = "nav-link active";
    del.className = "nav-link";
}
function showShopDelete(){
    var add = document.getElementById("shopAdd");
    var update = document.getElementById("shopUpdate");
    var del = document.getElementById("shopDelete");
    var addContent = document.getElementById("shopAddContent");
    var updateContent = document.getElementById("shopUpdateContent");
    var delContent = document.getElementById("shopDeleteContent");
    addContent.style.display = "none";
    updateContent.style.display = "none";
    delContent.style.display = "block";
    add.className = "nav-link";
    update.className = "nav-link";
    del.className = "nav-link active";
}
//---SQL BUTTON ACTIONS TO SAVE WEBPAGE STATE AFTER RELOAD---//
function userSaving(){
    var shop = document.getElementById("shop");
    var calendar = document.getElementById("calendar");
    var infoChanger = document.getElementById("info");
    var newUser = document.getElementById("user");
    //var save = document.getElementById("userSaved");
    //save.style.direction = "block"
    shop.style.display = "none";
    calendar.style.display = "none";
    infoChanger.style.display = "none";
    newUser.style.display = "block";
}