//left side menu based on  https://codepen.io/j_holtslander/pen/XmpMEp
$(document).ready(function () {
    var trigger = $('.hamburger'),
        overlay = $('.overlay'),
       isClosed = false;
  
      trigger.click(function () {
        hamburger_cross();      
      });
  
      function hamburger_cross() {
  
        if (isClosed == true) {          
          overlay.hide();
          trigger.removeClass('is-open');
          trigger.addClass('is-closed');
          isClosed = false;
        } else {   
          overlay.show();
          trigger.removeClass('is-closed');
          trigger.addClass('is-open');
          isClosed = true;
        }
    }
    
    $('[data-toggle="offcanvas"]').click(function () {
          $('#wrapper').toggleClass('toggled');
    });  
  });



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
