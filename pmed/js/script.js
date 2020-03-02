$(document).ready(function(){
  $(window).bind('load resize', function()
  {
    var win=$(window).width();
    if(win<=576){
      $(".circ-bck-line").appendTo(".imp-man");
      $(".ellipse").last().appendTo(".imp-man");
      $(".imp-man .ellipse").css({"position": "absolute","top":"68%","left":"32%"});
      $(".imp-man").css({"position":"relative"});
      $(".respo-circ").removeClass();
    }
    });
    var i = 0;
    $(function () {
        $(window).on("resize", function () {
            var windowsize = $(this).width();
            if (windowsize < 576 && i === 0) {
                i = 1;
            } else if (windowsize >= 576 && i == 1) {
                location.reload();
                i = 0;
            }
        });
    });

$(window).bind('load resize',function(){
if($(window).width()<768){
 $(".footer-logo img").attr("src","images/pic/logo-sm.png");
 $(".conslt-position .btn-order").addClass("mb-5");
 $(".pass-img").attr("style","z-index:1");
 $(".conslt-position .btn-order").attr("style","z-index:2")
    }else if($(window).width()>768){
      $(".about-med-center p:first").after($(".card-discount"));
      $(".footer-logo img").attr("src","images/pic/logo.png");
      $(".conslt-position .btn-order").removeClass("mb-5");
      $(".pass-img").attr("style","z-index:-1");
      $(".conslt-position .btn-order").attr("style","z-index:0");
    }
    if($(window).width()<768){
  $(".about-sec").append($(".card-discount"));
} else if($(window).width()>768){
  $(".about-med-center p:first").after($(".card-discount"));
} 
if($(window).width()<1200){
      $(".about-med-center .right").css("width","0")
    }else{
      $(".about-med-center .right").css("width","200px")
    }
 
    });
 
});
var btn=document.getElementById("top-scroll");
window.onscroll=function(){scrollFunc()};
function scrollFunc(){
  if(document.body.scrollTop>30||document.documentElement.scrollTop>30){
    btn.style.display="block";
  }else{
    btn.style.display="none";
  }
}
function topFunc() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

