(function($) {
  "use strict"; // Start of use strict

  // Toggle the side navigation
  $("#sidebarToggle, #sidebarToggleTop").on('click', function(e) {
    $("body").toggleClass("sidebar-toggled");
    $(".sidebar").toggleClass("toggled");
    if ($(".sidebar").hasClass("toggled")) {
      $('.sidebar .collapse').collapse('hide');
    };
  });

  // Close any open menu accordions when window is resized below 768px
  $(window).resize(function() {
    if ($(window).width() < 768) {
      $('.sidebar .collapse').collapse('hide');
    };
    
    // Toggle the side navigation when window is resized below 480px
    if ($(window).width() < 480 && !$(".sidebar").hasClass("toggled")) {
      $("body").addClass("sidebar-toggled");
      $(".sidebar").addClass("toggled");
      $('.sidebar .collapse').collapse('hide');
    };
  });

  // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
  $('body.fixed-nav .sidebar').on('mousewheel DOMMouseScroll wheel', function(e) {
    if ($(window).width() > 768) {
      var e0 = e.originalEvent,
        delta = e0.wheelDelta || -e0.detail;
      this.scrollTop += (delta < 0 ? 1 : -1) * 30;
      e.preventDefault();
    }
  });

  // Scroll to top button appear
  $(document).on('scroll', function() {
    var scrollDistance = $(this).scrollTop();
    if (scrollDistance > 100) {
      $('.scroll-to-top').fadeIn();
    } else {
      $('.scroll-to-top').fadeOut();
    }
  });

  // Smooth scrolling using jQuery easing
  $(document).on('click', 'a.scroll-to-top', function(e) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($anchor.attr('href')).offset().top)
    }, 1000, 'easeInOutExpo');
    e.preventDefault();
  });
  $(document).on('change', '#gambar', function(e) {
    var file = $(this)[0].files[0];
    var exts = ["image/png", "image/jpg", "image/jpeg"];
    var max  = 1024 * 1024;
    
    //validasi image
    if( !exts.includes(file.type) )
    {
        alert("File must be an image. JPG OR PNG");
        return false;
    }

    //validasi image size
    if( file.size >  max)
    {
        alert("File not large than 1 MB");
        return false;
    }
    

    if (file) {
        var reader = new FileReader();
        reader.onload = function(e) {
            
            var image = new Image();
            image.src = e.target.result;

            image.onload = function() {
                
                $("#image-avatar").css("background-image", "url(" + this.src + ")");
                $("#image-avatar").css("background-position", "center");
                $("#image-avatar").css("background-size", "cover"); 
                $("#image-avatar").css("background-repeat", "no-repeat");
                
            };

        }
        reader.readAsDataURL(file);
    } else {
        alert('select a file to see preview');
        $('#pickPhoto').val('');
        $("#image-avatar").css("background", "url('https://placehold.co/140x140?text=AVATAR')");
    }
});
})(jQuery); // End of use strict
