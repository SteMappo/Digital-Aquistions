jQuery(document).ready(function($) {


//scrollspy
// $(window).on('scroll', function () {
//    var sections = $('section')
//     , nav = $('nav')
//     , nav_height = nav.outerHeight()
//     , cur_pos = $(this).scrollTop();
//   sections.each(function() {
//     var top = $(this).offset().top - nav_height,
//         bottom = top + $(this).outerHeight();
 
//     if (cur_pos >= top && cur_pos <= bottom) {
//       nav.find('li').removeClass('active');
//       sections.removeClass('active');
 
//       $(this).addClass('active');
//       nav.find('div[id="'+$(this).attr('id')+'"]').addClass('active');
//     }
//   });
// });


//responisve menu btn
    $(".btn-menu").click(function () {
        $('.nav').slideToggle('.nav');
      $('.fa', this).toggleClass('fa-bars').toggleClass('fa-times');
        return false;
    });
    //    //Do not include! This prevents the form from submitting for DEMO purposes only!
    // $('form').submit(function(event) {
    //     event.preventDefault();
    //     return false;
    // });
    var owlOne = $("#owl-carousel-hero");
    owlOne.owlCarousel({
      smartSpeed: 3000,
      autoplay: true,
      autoplayTimeout: 7000,
      loop: true,
      center:false,
      // nav : true,
      // navText : ["<i class='fa fa-arrow-circle-left'></i>","<i class='fa fa-arrow-circle-right'></i>"],
      dots : true,
      responsive:{
      0:{ items:1 },
      600:{ items:1 },
      767:{ items:1 },
      991:{ items:1 }
      }
    });

    function myFunction() {
    var element = document.getElementById("sub-menu");
    element.classList.add("dropdown-menu");
} 

// Sticky scroll nav, when pasted header do add stick
    var yourNavigation = $(".header-sticky");
    stickyDiv = "sticky";
    yourHeader = $('.header').height();

$(window).scroll(function() {
  if( $(this).scrollTop() > yourHeader ) {
    yourNavigation.addClass(stickyDiv);
  } else {
    yourNavigation.removeClass(stickyDiv);
  }
});


//exerpt control using filter
// initialize Isotope after all images have loaded
 
// external js: isotope.pkgd.js


// init Isotope
var $grid = $('.grid').isotope({
  itemSelector: '.element-item',
  layoutMode: 'fitRows',
  getSortData: {
    name: '.name',
    symbol: '.symbol',
    number: '.number parseInt',
    category: '[data-category]',
    weight: function( itemElem ) {
      var weight = $( itemElem ).find('.weight').text();
      return parseFloat( weight.replace( /[\(\)]/g, '') );
    }
  }
});

// filter functions
var filterFns = {
  // show if number is greater than 50
  numberGreaterThan50: function() {
    var number = $(this).find('.number').text();
    return parseInt( number, 10 ) > 50;
  },
  // show if name ends with -ium
  ium: function() {
    var name = $(this).find('.name').text();
    return name.match( /ium$/ );
  }
};

// bind filter button click
$('#filters').on( 'click', 'button', function() {
  var filterValue = $( this ).attr('data-filter');
  // use filterFn if matches value
  filterValue = filterFns[ filterValue ] || filterValue;
  $grid.isotope({ filter: filterValue });
});

// bind sort button click
$('#sorts').on( 'click', 'button', function() {
  var sortByValue = $(this).attr('data-sort-by');
  $grid.isotope({ sortBy: sortByValue });
});

// change is-checked class on buttons
$('.button-group').each( function( i, buttonGroup ) {
  var $buttonGroup = $( buttonGroup );
  $buttonGroup.on( 'click', 'button', function() {
    $buttonGroup.find('.is-checked').removeClass('is-checked');
    $( this ).addClass('is-checked');
  });
});
  


});