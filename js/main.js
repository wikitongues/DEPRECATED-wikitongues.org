// Device Check

window.mobilecheck = function() {
var check = false;
(function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))check = true})(navigator.userAgent||navigator.vendor||window.opera);
return check; }

// Page interactions
$(function() {
  var win = $(window),
    doc = $(document),
    t, //target
    h, //height
    w; //width

  function videoResize() {
    var r = 16/9,
    v = $('.page-banner.video video'); //video
    t = $('.page-banner.video');
    h = t.height(),
    w = t.width();
    if(w/h>=r) {
      t.addClass('vertical');
      v.css("margin-left",0);
    } else {
      t.removeClass('vertical');
      v.css("margin-left",-(v.width()/2));
    }
  }

  function fixHeader() {
    var bannerHeight = 79
    t = $('header')
    if(doc.scrollTop() >= 15+bannerHeight) {
      t.addClass('scrolled')
    } else {
      t.removeClass('scrolled')
    }
  }

// Close kickstarter banner
  $(".kickstarter-banner-wrapper a.close").on("click", function() {
    $(this).parent().remove()
    console.log('hi')
  })

// Events
  doc.ready(function() {
    videoResize()

    if(!window.mobilecheck()) {
        fixHeader()
      }
  })

  win.on('resize', function() {
    videoResize()
  })

  win.on('scroll', function() {
    if(!window.mobilecheck()) {
      fixHeader()
    }
  })
})

// Textarea auto-resizing
$(function() {
  /*  Correctly resize textarea based on input */

  var m = $('.hiddenDiv'), //mirror
    t = $('textarea'), //target
    v = null; //value

  t.on('keyup', function() {
    v = $(this).val();
    v = v.replace(/\n/g, '<br>');
    m.html(v + '<br class="lbr">');
    $(this).css('height', m.innerHeight());
  })
})

// Modal textarea does not auto-resize correctly

// Form input focus animation
$(function() {
  $('textarea, input:not(:checkbox)').blur(function() {
    // check if the input is not empty
    if ($(this).val())
      $(this).addClass('used');
    else
      $(this).removeClass('used');
  });
});

// Form inset toggle
$(function() {
  $('.form-page form .grouping.inset a').on('click', function(e) {
    $(this).parent().toggleClass('open')
  })
})


// Video upload form volunteer name conditional
$(function() {
  $('#b input').on('click', function() {
    $('#c').removeClass('hidden')
  })
  $('#a input').on('click', function() {
    $('#c').addClass('hidden')
  })
})

// Contact modal popup

$(function(){
  var t = $('#contact-wrap') //target

  $('#contact-trigger').on('click', function(e){
    e.preventDefault()
    t.show()
    setTimeout(function() {t.addClass('active')}, 100)
    $('html').css('overflow','hidden')

    $('body').on('click', '#contact-wrap', function(e){
      if ( e.target.id === 'contact-wrap' ) {
        closeModal()
      }
    })
  })

  $('#contact-wrap .modal .close').on('click', function() {
    closeModal()
  })

  function closeModal() {
    t.removeClass('active')
    setTimeout(function() {t.hide()}, 400)
    $('html').css('overflow','scroll')
  }
})

// Form success modal
$(function() {
  var m = $(".form-success"), // modal
  t =  $(".form-success a.close-button")

  $(t).on("click", function() {
    $(m).remove()
  })
})

// Page pannel subnav navigation
// do this with PHP in v2
$(function(){
  var hash = window.location.hash
  if( !$('body').hasClass('sample-page')) {
    $('.post').hide()
  }

  if(hash) {
    $('.post'+hash+'-w').show()
    $('ul.sub-nav-list li a[href='+hash+']').addClass('active')
  } else {
    $('.post:first-of-type').show()
    $('ul.sub-nav-list li:first-child a').addClass('active')
  }

  $('a.sub-nav-link').on('click', function(e){
    e.preventDefault();
    var selectedId = $(this).attr('href'),
        targetId = selectedId.slice(1)+'-w';

    if ( !$(this).hasClass('active') ) {
      $('a.sub-nav-link.active').removeClass('active')
      $(this).addClass('active')
    }

    $('.post').each(function(){
      if ( $(this).attr('id') == targetId ) {
          $(this).show();
      } else {
          $(this).hide();
      }
    });
  });

  $(window).load(function() {
    document.body.scrollTop = document.documentElement.scrollTop = 0;
  })
});

// hide background video on mobile
$(function(){

  if (window.mobilecheck()){
      $('video').hide()
  }
})