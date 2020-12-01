$(document).ready(function () {

  //show keep in touch popup menu after loading the page 
   $(window).on('load', function(){
    setTimeout(() => {
      $('.popup-contact').css({'transform': 'scale(1)'});
    }, 4000);

  });  

  // click on x to close the keep in touch popup window
  $('.contact_close').on('click', function(){
    $('.popup-contact').css({'transform': 'scale(0)'});
  });

// click on popup-contact menu to close it
  /* $('.popup-contact').on('click', function(){
    $(this).css({'transform': 'scale(0)'});
  }); */

  
// ============================================== when window scroll down ==================================
  //changing the intro text width and fontsize when scroll down
  $(window).scroll(function () {
    let position = $(window).scrollTop();

    // changing navbar color when scroll down
    if (position >= 90) {
      $("header .navbar").css({ "background-color": "#ef0000" });
    } else {
      $(".navbar").css({
        "background-color": "#131313",
        'color': "#FFF",
      });
    }
//================== display and hide up icon when window scroll top 
  if(position > 200){
      $('.up').css({'transform': 'translateX(0px)'});
    }else{
      $('.up').css({'transform': 'translateX(100px)'});
    }
// clicking on up icon to scoll the window to top 
$('.up .up-icon').click(function(){
  $('body, html').animate({scrollTop: 0});
});

    if(position >= 1200){
      $('.welcome2 .wel-txt').addClass('right');
      $('.welcome2 .wel-img').addClass('left');
      $('.welcome2 .wel-txt_2').addClass('left2');
      $('.welcome2 .wel-img_2').addClass('right2');
    }else{
      $('.welcome2 .wel-txt').removeClass('right');
      $('.welcome2 .wel-img').removeClass('left');
      $('.welcome2 .wel-txt_2').removeClass('left2');
      $('.welcome2 .wel-img_2').removeClass('right2');
    }


    // animate menu divs when scroll down 
     

     if(position > 180){
       //alert('hellooooooooooooooooooooooooo');
       $('.menu-m .top_item').css({'opacity': '1'});
       $('.menu_item-1').addClass('menu_item1');
       $('.menu_item-2').addClass('menu_item2');
       $('.menu_item-3').addClass('menu_item3');
       $('.menu_item-4').addClass('menu_item4');
       $('.menu_item-5').addClass('menu_item5');
       $('.menu_item-6').addClass('menu_item6');
       $('.menu_item-7').addClass('menu_item7');
       $('.menu_item-8').addClass('menu_item8');

       
     }else{
       $('.menu_item-1').removeClass('menu_item1');
       $('.menu_item-2').removeClass('menu_item2');
       $('.menu_item-3').removeClass('menu_item3');
       $('.menu_item-4').removeClass('menu_item4');
       $('.menu_item-5').removeClass('menu_item5');
       $('.menu_item-6').removeClass('menu_item6');
       $('.menu_item-7').removeClass('menu_item7');
       $('.menu_item-8').removeClass('menu_item8');

      
     }

//=============================== animation for reservation and deleivery text pages ===================
/* if(position > 140){
  $('.reserve-content p').css({'transform': 'translateX(0px)'});
}else{
  $('.reserve-content p').css({'transform': 'translateX(100px)'});
} */

  });
// ============================================== ending of  window scroll down ==================================

// ================================ nav bar icons chaning color, background when clicking on =================
/* $('header .navbar-nav li ').click(function(){
  $(this).removeClass("nav_active").siblings().addClass('nav_active');
  
}); */


  /* ================================ setting box ======================================== */

  $(".toggle_gear").on("click", function () {
    $(this).find("i").toggleClass("fa-spin");

    $(".setting").toggleClass("hide-box");
  });

  // 1- changing heading color
  $(".setting .heading-color li").on("click", function () {
    /* $("h2").css({
    color: $(this).data("color"),
  }); */

    $("h2, h3").css("color", $(this).data("color"));
  });

  // 2- chaning div background
  $(".setting .bckgrd-color li").on("click", function () {
    $(".change-div-color").css({
      "background-color": $(this).data("color"),
    });
  });

  //chainging font size

  $(".setting .change-font li").on("click", function () {
    $("p").css({
      "font-size": $(this).data("font") - "2px",
    });
  });
  // ================================================ working hours popup menu ===================================
  $(".banner .w-hours").click(function (event) {
    event.preventDefault();

    //alert("hellow this is popup menu");
    $(".popup").css({ transform: "scale(1)" }, 400);
  });

  //closing popup
  $(".close-button").click(function () {
    $(".popup").css({ transform: "scale(0)" });
  });


  /*============================================= menu nav tabs ===========================================*/ 
  $('.menu_nav ul li').click(function() {
            var myID = $(this).attr('id');

            // remove class inactive when clicking on this li 
            $(this).removeClass('inactive').siblings().addClass('inactive');

            //hid all div content when clicking on li
            $('.menu_content .content').hide();

            //get the id from the same Li , and add -content to open its content 
            $('#' + myID + '-content').fadeIn(400);

        });

 /*============================================= ending of  menu nav tabs ===========================================*/

 /*============================================= STARTIN GOF A MENU BUTTON TO REACH TO THE MENU SECTION  ===========================================*/
 
 $('.my_menu').on('click', function(){
  $('html,body').animate({
    scrollTop: $(".home-menu").offset().top});
 });
 /*============================================= ending of  menu nav tabs ===========================================*/
 
 
});
