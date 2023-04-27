/*!
* Start Bootstrap - Shop Homepage v5.0.1 (https://startbootstrap.com/template/shop-homepage)
* Copyright 2013-2021 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-shop-homepage/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project

$(".top").hide();
$(window).scroll(function(e){
  if ($(this).scrollTop() > 0) {
      $(".top").css("display", "block");
  } else {
      $(".top").css("display", "none");
  }
});
