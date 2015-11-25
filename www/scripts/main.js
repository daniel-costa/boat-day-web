var base_url = "";

function scrollToAnchor(aid) {
	var aTag = $(aid);
	$('html, body').animate({ scrollTop: aTag.offset().top - 100}, 'slow');
}

$(document).ready(function() {

	var xAnimationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
	
	if($('.main-swiper').length !== 0) {
		var mainSwiper = new Swiper('.main-swiper .swiper-container', {
			spaceBetween: 0,
			loop: true,
			autoplay: 2500,
			autoplayDisableOnInteraction: true,
			paginationClickable: true,
			pagination: '.main-swiper .swiper-pagination',
		});
	}

	if($('.reviews').length !== 0) {
		var reviewsSwiper = new Swiper('.reviews .swiper-container', {
			spaceBetween: 40,
			loop: true,
			autoplay: 3500,
			autoplayDisableOnInteraction: true,
			paginationClickable: true,
			pagination: '.reviews .swiper-pagination',
		});
	}

	if($('.hosts').length !== 0) {
		var reviewsSwiper = new Swiper('.hosts .swiper-container', {
			spaceBetween: 40,
			autoplay: 3500,
			autoplayDisableOnInteraction: true,
			paginationClickable: true,
			pagination: '.hosts .swiper-pagination',
			slidesPerView: 3,
		});
	}

	$('.faq a').click(function(){
		if( $(this).attr('href').match("^#") ) {
			$( $(this).attr('href') + ' .inside').show();
			scrollToAnchor($(this).attr('href'));
			return false;
		}
	});

	$('#modal-download form').submit(function(event) {
		
		event.preventDefault();

		var form = $(event.currentTarget);
		var btn = $(event.currentTarget).find('button');

		if( btn.attr('back') ) {

			btn.removeAttr('back').text('Send Text');
			form.find('.cell').toggle();

		} else {
			btn.attr('disabled', 1).text('...');
			form.find('input').attr('disabled', 1);

			$.ajax({
				url: base_url + "lib.sms.php",
				method: 'POST',
				context : form,
				data: { 
					to: form.find('input').val()
				}
			})
			.done(function(data) {
				btn.removeAttr('disabled');
				form.find('input').removeAttr('disabled');
				$(this).find('.cell').toggle();
				$(this).find('.cell.msg').text(data.substring(2));
				btn.attr('back', '1').text('Back');
			});
		}
	})
});


// Facebook Tracking
(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) 
		return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=498086203544962&version=v2.0";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

// Google Analytics
(function(i,s,o,g,r,a,m){
	i['GoogleAnalyticsObject']=r;
	i[r]=i[r] || function(){ (i[r].q=i[r].q||[]).push(arguments) } , i[r].l=1*new Date();
	a=s.createElement(o),m=s.getElementsByTagName(o)[0];
	a.async=1;
	a.src=g;
	m.parentNode.insertBefore(a,m)
})(window, document, 'script', '//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-51849119-1', 'auto');
ga('send', 'pageview');