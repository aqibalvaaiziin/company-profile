$(document).ready(function(){
    $(".menubar").click(function(){
      $("#sidebar").toggleClass('active');
      $(".cc").toggleClass("ccoff");
      $(".tableSize").toggleClass("ctableSize");
    });
  });