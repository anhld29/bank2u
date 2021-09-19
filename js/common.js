
/* readyEvent
------------------------------------------------------------------------*/

$(function(){
	// smoothScroll ---------------------------//
	var	speed = 1000,
		easing = 'swing',
		pcPosition = -0,
		tabPosition = -0,
		spPosition = -0;

	$('a').not('.noscroll').click(function(){
		var href = $(this).attr('href'),
			case1 = href.charAt(0) == '#',
			case2 = location.href.split('#')[0] == href.split('#')[0];

		if(case1 || case2) {
			if(case2)
				href = '#'+href.split('#')[1];

			$target = $(href);

			if($target.length){
				$html.add($body).not(':animated').animate({scrollTop : String($target.offset().top + (abi.pc ? pcPosition : abi.tab ? tabPosition : spPosition))},speed,easing);

				return false;
			}
		}
	});

	// outerPageAnchorLink ---------------------------//
	if(window.location.href.split('#')[1] == undefined || window.location.href.split('#')[1].indexOf('=') == -1) {
		var $target = $('#'+window.location.href.split('#')[1]),
			adjust = (abi.pc) ? pcPosition : (abi.tab) ? tabPosition : spPosition;

		if($target.length) {
			$w.load(function(){
				var targetPosition = $target.offset().top;
				$html.add($body).animate({scrollTop: String(targetPosition + adjust)}, 10);
			});
		}
	}
	$('.center').slick({
		dots: true,
		arrows:false,
		infinite: true,
		speed: 300,
		slidesToShow: 1,
		adaptiveHeight: true
	});

	var menu = new MmenuLight(
    document.querySelector( '#menu' ),
    'all'
  );

  var navigator = menu.navigation({
    selectedClass: 'Selected',
    slidingSubmenus: false,
  });

  var drawer = menu.offcanvas({
  });

  //	Open the menu.
  document.querySelector( 'a[href="#menu"]' )
	.addEventListener( 'click', evnt => {
		evnt.preventDefault();
		drawer.open();
	});

	//	Modal
  var modal = $('.modal');
  var btn = $('.btn-modal');
  var span = $('.close');
  btn.click(function () {
    modal.show();
		$body.addClass('modal-open');
  });
  span.click(function () {
    modal.hide();
		$body.removeClass('modal-open');
  });
  $(window).on('click', function (e) {
    if ($(e.target).is('.modal')) {
      modal.hide();
			$body.removeClass('modal-open');
    }
  });

});
