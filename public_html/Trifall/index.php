<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trifall - </title>
    <link rel="stylesheet" type="text/css" href="Trifall/Fonts/fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="Trifall/Style/Trifall-measure.css">
    <link rel="stylesheet" type="text/css" href="Trifall/Style/Trifall-measure.css">
    <style>
        .onscroll{

        }
    </style>

</head>
<body>

<header>
    <nav class="scrollchange absolute wide right">
        <li><a class="active" href="#home">Home</a></li>
        <li><a href="#news">News</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#about">About</a></li>
    </nav>

<img src="Trifall/Images/SlideShow/Slide1.jpg" alt="Slide" width="100%">
</header>
<i class="fal fa-address-card"></i>
<br>
<br>
tekst
<br>

</body>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script>
  $(function() {

        var header = $(".scrollchange");

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 40) {
            header.addClass("onscroll");
            header.addClass("sticky");
            header.addClass("left");
            header.removeClass("right");
            header.removeClass("absolute");
        } else {
            header.removeClass("onscroll");
            header.removeClass("sticky");
            header.removeClass("left");
            header.addClass("right");
            header.addClass("absolute");
        }
    });
  });

</script>
</html>
