<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="../public/js/wow.min.js"></script>
<script> new WOW().init(); </script>

<script> $(window).scroll(function() { $('.mov').each(function(){ var imagePos = $(this).offset().top; var topOfWindow = $(window).scrollTop(); if (imagePos < topOfWindow+300) { $(this).addClass('bounceInLeft'); } }); });  </script>
<script> $(function () { $(".images img").click(function () { var $src = $(this).attr("src"); $(".show").fadeIn(); $(".img-show img").attr("src", $src); }); $("span, .overlay").click(function () { $(".show").fadeOut(); });  }); </script>
<script> function initMap() { var location = {lat:51.0289215, lng:71.4611418,}; var map = new google.maps.Map(document.getElementById("map"), { zoom: 9, center: location }); var marker = new google.maps.Marker({ position: location, map: map }); } </script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script async defer src="https://maps.google.com/maps/api/js?key=AIzaSyDv7GzWpp5vOk0dV-Day519ss5GgbBQW4M&callback=initMap"></script>