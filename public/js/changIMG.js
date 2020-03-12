function myFunction(){
  $(document).ready(function () {
     
     $("#demo1").click(function () {
       var imageUrl =
         "images/bg_songkhla.gif";
       $(".box").css("background-image", "url(" + imageUrl + ")");
     });
   });

   $(document).ready(function () {
    
     $("#demo2").click(function () {
       var imageUrl =
         "images/22.jpeg";
       $(".box").css("background-image", "url(" + imageUrl + ")");
     });
   });

   $(document).ready(function () {
    
    $("#demo3").click(function () {
      var imageUrl =
        "images/31.jpg";
      $(".box").css("background-image", "url(" + imageUrl + ")");
    });
  });

  $(document).ready(function () {
    
    $("#demo4").click(function () {
      var imageUrl =
        "images/36.jpg";
      $(".box").css("background-image", "url(" + imageUrl + ")");
    });
  });
  }