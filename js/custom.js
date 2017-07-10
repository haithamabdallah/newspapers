(function ($) {
    "use strict";

    new WOW().init();

    //SmoothScroll
  	smoothScroll.init({
    speed: 500, // Integer. How fast to complete the scroll in milliseconds
    easing: 'easeInOutCubic', // Easing pattern to use
    updateURL: true, // Boolean. Whether or not to update the URL with the anchor hash on scroll
    offset: 80, // Integer. How far to offset the scrolling anchor location in pixels
    callback: function ( toggle, anchor ) {} // Function to run after scrolling
	});

    $('.lazy').slick({
        fade: true,
        speed: 500,
        cssEase: 'linear',
        rtl: true
    });

    $('.la_most_read_articles').slick({
        dots: false,
        arrows: true,
        autoplay: true,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        prevArrow: '<button type="button" class="slick-prev"><span class="fa fa-angle-left"></span></button>',
        nextArrow: '<button type="button" class="slick-next"><span class="fa fa-angle-right"></span></button>',
    });

    $('.la_image_news_articles').slick({
        dots: false,
        arrows: true,
        autoplay: true,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        prevArrow: '<button type="button" class="slick-prev"><span class="fa fa-angle-left"></span></button>',
        nextArrow: '<button type="button" class="slick-next"><span class="fa fa-angle-right"></span></button>',
    });

    $('.la-slider-img').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.la-image-thumb-nav'
    });
    $('.la-image-thumb-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.la-slider-img',
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        prevArrow: '<button type="button" class="slick-prev"><span class="fa fa-angle-left"></span></button>',
        nextArrow: '<button type="button" class="slick-next"><span class="fa fa-angle-right"></span></button>'
    });

    $('.la-slider-content-01').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        rtl: true,
        responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
      ]
    });
   
    $('.la-slider-content-02').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        rtl: true,
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            },
        ]
    });

    // Header News Ticker
        
    var $ticker = $('.la-head-ticker-sliding-panel');
    var $tickerWrap = $('.la-head-ticker');
    var $tickerTitle = $('.la-head-ticker-cat');
    var pauseTicker = false;
    var ticking = false;
    var newsTickerTimeoutID = 0;
    var tickerElementsPositions = new Array();
    // If you want to speed up/slow down ticker just change tickerSpeed.
    var tickerSpeed = 30;
    
    // Scrolls ticker slowly to the right.
    function newsTicker(){
        if(pauseTicker){
            $ticker.stop();
            ticking = false;
            clearTimeout(newsTickerTimeoutID);
            newsTickerTimeoutID = setTimeout(newsTicker, 1000);
            return;
        }
        if(ticking) return;
        ticking = true;
        var right = parseInt($ticker.css('right'));
        
        var duration = 1000 * (tickerWidth + right) / tickerSpeed;
        $ticker.stop().animate({right: -tickerWidth}, duration, 'linear', function(){
            $ticker.css('right', $tickerWrap.width());
            ticking = false;
            newsTicker();
        });
    }
    
    // Calculates how much should ticker move to the right so that the next element is shown.
    function getTickerLeftForNextElement(){
        var tickerLeft = parseInt($ticker.css('right'));
        var controlsWidth = $tickerWrap.find('.owl-controls').outerWidth();
        var targetWidth = $tickerWrap.width() - tickerLeft - controlsWidth;
                
        for(var i = 0; i < tickerElementsPositions.length; i++){
            if(tickerElementsPositions[i] >= targetWidth){
                return $tickerWrap.width() - tickerElementsPositions[i] - $($ticker.find('.item')[i]).width() - controlsWidth;
            }               
        }
        
        return $ticker.css('right');
    }
        
    // Calculates how much should ticker move to the right so that the previous element is shown.
    function getTickerLeftForPrevElement(){
        var tickerLeft = parseInt($ticker.css('right'));
        var tickerTitleWidth = $tickerWrap.find('.la-head-ticker-cat').outerWidth(true);
                
        for(var i = 0; i < tickerElementsPositions.length; i++){
            if(tickerLeft - tickerTitleWidth + tickerElementsPositions[i] < 0){
                continue;
            }
            
            if(i > 0){
                return tickerTitleWidth -tickerElementsPositions[i - 1];
            }else{
                $ticker.css('right');
            }
        }
        
        return $ticker.css('right');
    }
    
    // If news ticker is present on the page, we should set it up.
    if($ticker.length > 0){
        var tickerWidth = 0;
        // Calculate ticker width.
        $ticker.find('.item').each(function(index, elem){
            tickerElementsPositions.push(tickerWidth);
            tickerWidth += $(elem).outerWidth();
        });
        
        $ticker.css('width', tickerWidth + 10).css('position', 'absolute').css('top', 0).css('right', $tickerTitle.outerWidth());
        
        // Wait for one second before starting ticker.
        setTimeout(function(){
            newsTicker();
        }, 1000);
        
        // Pause news ticker when mouse is over it.
        $ticker.find('.item').mouseover(
            function(){
                pauseTicker = true;
                newsTicker();
            }
        );
        
        $tickerWrap.hover(
            function(){},
            function(){
                pauseTicker = false;
                newsTicker();
            }
        );      
        
        // Controls for the news ticker.
        $tickerWrap.on('click', '.owl-prev', function(e){
            pauseTicker = true;
            newsTicker();
            clearTimeout(newsTickerTimeoutID);
            $ticker.stop().animate({right: getTickerLeftForNextElement()}, 200, 'linear');
        });
        
        $tickerWrap.on('click', '.owl-next', function(e){
            pauseTicker = true;
            newsTicker();
            clearTimeout(newsTickerTimeoutID);
            $ticker.stop().animate({right: getTickerLeftForPrevElement()}, 200, 'linear');
        });
    }

})(jQuery);
