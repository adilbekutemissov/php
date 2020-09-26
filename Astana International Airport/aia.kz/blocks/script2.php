<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="../public/js/script.js"></script>
<script src="../public/js/wow.min.js"></script>
<script> new WOW().init(); </script>
<script> $(window).scroll(function() { $('.mov').each(function(){ var imagePos = $(this).offset().top; var topOfWindow = $(window).scrollTop(); if (imagePos < topOfWindow+300) { $(this).addClass('bounceInLeft'); } }); });  </script>
<script> $(function () { $(".images img").click(function () { var $src = $(this).attr("src"); $(".show").fadeIn(); $(".img-show img").attr("src", $src); }); $("span, .overlay").click(function () { $(".show").fadeOut(); });  }); </script>
<script> $('.part').hover (function() { $('.description').html($(this).attr('description-data')); $('.description').fadeIn(); }, function() { $('.description').fadeOut(50); } ); </script>
