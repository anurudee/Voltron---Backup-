$(function(){
  $(".menu i").hide();
  $("#showmenu").click(function(){
    if($(".side-menu").width() > "100"){
      $(".side-menu").animate({width: '-=185px'});
      $(".main-section").animate({'margin-left': '-=205px'});
      $(".logo").text("VT");
      $("span.text").hide();
      $(".menu i").show();
    }
    else {
        $(".side-menu").animate({width: '+=185px'});
        $(".main-section").animate({'margin-left': '+=205px'});
        $(".logo").text("Voltron Admin Page");
        $("span.text").show("slow");
        $(".menu i").hide();
    }
    
  });
  
});

