$(document).ready(function () {

  // START Settings for plugins
  $('.marquee').marquee({
    duration: $(window).width() < 620 ? 6000 : 25000,
    gap: 1000,
    delayBeforeStart: 0,
    direction: 'left',
    duplicated: false
  });

  lightbox.option({
    'resizeDuration': 200,
  })

  // END Settings for plugins

  // START Back To Top Btn

  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('#back-to-top').fadeIn();
    } else {
      $('#back-to-top').fadeOut();
    }
  });

  $('#back-to-top').click(function () {
    $('html, body').animate({ scrollTop: 0 }, 'slow');
    return false;
  });

  // END of Back To Top Btn

  // START Smooth Scroll
  $('a[href*="#"]').click(function (event) {
    var target = $(this.hash);
    if (target.length) {
      event.preventDefault();
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 'slow');
      return false;
    }
  });

  // END Smooth Scroll


  // START Keeping the nav at the top of the page

  function updatePadding() {
    let windowWidth = $(window).width();
    let padding;

    if (windowWidth < 300) {
      padding = '2.2rem 0';
    } else if (windowWidth >= 301 && windowWidth <= 620) {
      padding = '2rem 1.5rem';
    } else if (windowWidth >= 621 && windowWidth <= 768) {
      padding = '2rem 1.5rem';
    } else if (windowWidth >= 769 && windowWidth <= 900) {
      padding = '1.3rem 1.5rem';
    } else if (windowWidth >= 901 && windowWidth <= 1200) {
      padding = '2.3rem 1.5rem';
    } else {
      padding = '1.3rem 1.5rem';
    }

    return padding;
  }


  $(window).scroll(function () {

    if ($(this).scrollTop() > 149) { // If the scroll from the top is more than 0

      $('.heading__header__nav').css({
        'position': 'fixed',
        'top': '0',
        'z-index': '100',
        'background-color': 'white',
        'width': $(window).width() < 1200 ? '100%' : '99%', // Check window width here
        'height': $(window).width() < 1200 ? '80px' : '53px', // Check window width here
        'box-shadow': 'rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px', // made shadow darker and larger
        'padding': $(window).width() < 1200 ? '0' : '0 1rem', // Check window width here
        'overflow-x': 'hidden'


      });
    } else {
      $('.heading__header__nav').css({
        'position': 'relative', // Change to 'static' or whatever default position you want
        'top': 'auto',
        'z-index': '1',
        'height': '55px',
        'box-shadow': 'unset',
        // 'padding': '1.8rem 1.5rem',
        // 'padding': $(window).width() < 300 ? '1.9rem 0' : '1.3rem 1.5rem',
        'padding': updatePadding(),
        'width': ''

      });
    }
  });

  // END Keeping the nav at the top of the page


  // START Services search logic

  $(".services__search-input").on("keyup", function () {
    var value = $(this).val().toLowerCase();
    var list = $(".services__list-content");

    // Case 1: Input box is empty
    if (value == "") {
      // Show all items
      list.show();

      // Remove any error message
      $(".services__list p").remove();
    }
    // Case 2: Input box contains text
    else {
      var results = 0;

      list.each(function () {
        var isMatch = $(this).text().toLowerCase().indexOf(value) > -1;
        if (isMatch) {
          $(this).show();
          results += 1;
        } else {
          $(this).hide();
        }
      });

      // If no results, show error message
      if (results === 0) {
        // If error message does not already exist, add it
        if ($(".services__list p").length === 0) {
          $(".services__list").append("<p>Please amend your keyword/search query</p>");
        }
      }
      // If there are results, remove error message
      else {
        $(".services__list p").remove();
      }
    }
  });

  // END Services search logic

  // START accordion on mobile for footer


  function checkWidth() {
    var windowSize = $(window).width();
  
    if (windowSize <= 912) {
      $('.footer__sections > div > .footer__sections-gallery__contents, .footer__sections > div > ul, .footer__sections > div > img').hide();
    } else {
      $('.footer__sections > div > .footer__sections-gallery__contents, .footer__sections > div > ul, .footer__sections > div > img').show();
    }
  }
  
  // Execute on load
  checkWidth();
  
  // Bind the event listener 
  $(window).resize(checkWidth);
  
  $('.footer__sections-contact h2, .footer__sections-gallery h2, .footer__sections-accreditation h2').click(function() {
    if ($(window).width() <= 912) {
      $(this).toggleClass('open').next().slideToggle();
    }
  });


  // END accordion on mobile for footer

  // START Add call now div on mobile
  var lastScrollTop = 0;

  function addCallUsDiv() {
    if ($('#call-us').length === 0 && $(window).width() <= 620) {
      $('body').append('<div id="call-us" style="position: fixed; bottom: 0; width: 100%; height: 50px; background-color: #28355c; text-align: center; line-height: 50px;"><a href="tel:02039761066" style="color: white; font-weight: 800; font-size: 32px; letter-spacing: 1px; padding: 1rem;">Call Us</a></div>');
    }
  }

  function checkWindowSizeAndScrollDirection() {
    var st = $(window).scrollTop();

    if ($(window).width() <= 620) {
      if (st < lastScrollTop) { // If we're scrolling up, add the div
        addCallUsDiv();
      }
      else {
        var footerTop = $('.footer').offset().top;
        var windowHeight = $(window).height();

        // If the top of the footer is less than the scroll position plus the window height, remove the div
        if (footerTop <= st + windowHeight) {
          $('#call-us').remove();
        }
      }
    } else {
      $('#call-us').remove(); // If the div exists and the window is larger than 620px, remove it
    }

    lastScrollTop = st;
  }

  // Add the div on initial load if the window width is less than or equal to 620
  if ($(window).width() <= 620) {
    addCallUsDiv();
  }

  // Check when window resizes or scrolls
  $(window).on('resize scroll', checkWindowSizeAndScrollDirection);

  // END Add call now div on mobile

  // START Footer is annoying me
  function adjustFooterElements() {
    let windowWidth = $(window).width();

    if (windowWidth <= 900) {
      $('.footer__bottom-copyright').insertAfter('.footer__bottom-myself');
    } else {
      $('.footer__bottom-myself').insertAfter('.footer__bottom-legal');
    }
  }

  // Call the function when the document is ready
  adjustFooterElements();

  // Call the function when the window is resized
  $(window).on('resize', adjustFooterElements);

  // END Footer is annoying me

});