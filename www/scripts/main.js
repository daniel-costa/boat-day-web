$(document).ready(function() {

	var xAnimationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
	
	if($('.main-swiper').length !== 0) {
		var mainSwiper = new Swiper('.main-swiper .swiper-container', {
			spaceBetween: 0,
			keyboardControl: true,
			loop: true,
			autoplay: true,
			autoplay: 1500,
			autoplayDisableOnInteraction: true,
			pagination: '.main-swiper .swiper-pagination',
		});
	}

	if($('.boatdays-swiper').length !== 0) {
		var mainSwiper = new Swiper('.boatdays-swiper', {
			spaceBetween: 0,
			keyboardControl: true,
			loop: true,
			autoplay: true,
			autoplay: 2500,
			autoplayDisableOnInteraction: true,
			pagination: '.boatdays-swiper .swiper-pagination',
		});
	}
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