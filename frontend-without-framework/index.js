$(window).scroll(function(evt){
  if ($(window).scrollTop()>0)
    $(".navbar").addClass("bg-light");
  else
      $(".navbar").removeClass("bg-light");
});

var s = skrollr.init();
