<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="public/js/wow.min.js"></script>
<script src="public/carousel/owl.carousel.min.js"></script>
<script> new WOW().init(); </script>
<script> $(function () { $(".images img").click(function () { var $src = $(this).attr("src"); $(".show").fadeIn(); $(".img-show img").attr("src", $src); }); $("span, .overlay").click(function () { $(".show").fadeOut(); });  }); </script>
<script>
$(document).ready(function(){  
    $(window).scroll(function () {
        if ($(this).scrollTop() > 250) {
            $('.animation-table').fadeIn();
        } else {
            $('.animation-table').fadeOut();
        }
    });
});
</script>
<script>
$(document).ready(function(){  
    $(window).scroll(function () {
        if ($(this).scrollTop() > 850) {
            $('.animation-new').fadeIn();
        } else {
            $('.animation-new').fadeOut();
        }
    });
});
</script>