<!DOCTYPE html>
<html lang="en">
<head>
<title>Interior Design | Catalogue</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
<script src="js/jquery-1.6.2.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jcarousellite_1.0.1.js"></script>
<script src="js/jquery.galleriffic.js"></script>
<script src="js/jquery.opacityrollover.js"></script>
<script>
$(document).ready(function () {
    $(".jCarouselLite").jCarouselLite({
        btnNext: ".next",
        btnPrev: ".prev",
        speed: 400,
        vertical: false,
        circular: true,
        easing: 'easeOutQuart',
        visible: 4,
        start: 0,
        scroll: 1
    });
});
</script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->


</head>
<body id="page1">
<!--==============================header=================================-->
<header>
  <div class="row-1">
    <div class="main">
      <div class="container_12">
        <div class="grid_12">
          <nav>
            <ul class="menu">
              <li><a href="{{route('index')}}">About Us</a></li>
              <li><a href="{{route('services')}}">Services</a></li>
              <li><a href="{{route('catalogue')}}">Catalogue</a></li>
              <li><a href="{{route('pricing')}}">Pricing</a></li>
              <li><a href="{{route('contacts')}}">Contacts</a></li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <div class="row-2">
    <div class="main">
      <div class="container_12">
        <div class="grid_9">
          <h1> <a class="logo" href="index.html">Int<strong>e</strong>rior</a> <span>Design</span> </h1>
        </div>
        <div class="grid_3">
          <form id="search-form" action="#" method="post" enctype="multipart/form-data">
            <fieldset>
              <div class="search-field">
                <input name="search" type="text">
                <a class="search-button" href="#"><span>search</span></a> </div>
            </fieldset>
          </form>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </div>
</header>


@yield('content')



<!--==============================footer=================================-->
<footer>
  <div class="main">
    <div class="container_12">
      <div class="wrapper">
        <div class="grid_4">
          <div>Copyright &copy; <a href="#">Domain Name</a> All Rights Reserved</div>
          <div>Design by <a target="_blank" href="http://www.templatemonster.com/">TemplateMonster.com</a></div>
          <!-- {%FOOTER_LINK} -->
        </div>
        <div class="grid_4"> <span class="phone-numb"><span>+1(800)</span> 123-1234</span> </div>
        <div class="grid_4">
          <ul class="list-services">
            <li><a href="#"></a></li>
            <li><a class="item-2" href="#"></a></li>
            <li><a class="item-3" href="#"></a></li>
            <li><a class="item-4" href="#"></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<script>
$(window).load(function () {
    // We only want these styles applied when javascript is enabled
    $('div.navigation').css({
        'width': '320px',
        'float': 'right'
    });
    $('div.content').css('display', 'block');

    // Initially set opacity on thumbs and add
    // additional styling for hover effect on thumbs
    var onMouseOutOpacity = 0.5;
    $('#thumbs ul.thumbs li span').opacityrollover({
        mouseOutOpacity: onMouseOutOpacity,
        mouseOverOpacity: 0.0,
        fadeSpeed: 'fast',
        exemptionSelector: '.selected'
    });

    // Initialize Advanced Galleriffic Gallery
    var gallery = $('#thumbs').galleriffic({
        delay: 7000,
        numThumbs: 12,
        preloadAhead: 6,
        enableTopPager: false,
        enableBottomPager: false,
        imageContainerSel: '#slideshow',
        controlsContainerSel: '',
        captionContainerSel: '',
        loadingContainerSel: '',
        renderSSControls: true,
        renderNavControls: true,
        playLinkText: 'Play Slideshow',
        pauseLinkText: 'Pause Slideshow',
        prevLinkText: 'Prev',
        nextLinkText: 'Next',
        nextPageLinkText: 'Next',
        prevPageLinkText: 'Prev',
        enableHistory: true,
        autoStart: 7000,
        syncTransitions: true,
        defaultTransitionDuration: 900,
        onSlideChange: function (prevIndex, nextIndex) {
            // 'this' refers to the gallery, which is an extension of $('#thumbs')
            this.find('ul.thumbs li span').css({
                opacity: 0.5
            })
        },
        onPageTransitionOut: function (callback) {
            this.find('ul.thumbs li span').css({
                display: 'block'
            });
        },
        onPageTransitionIn: function () {
            this.find('ul.thumbs li span').css({
                display: 'none'
            });
        }
    });
});
</script>
</body>
</html>
