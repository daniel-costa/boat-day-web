var base_url = "";

var getTemplate = function(name){
	return $('script[type="x-boatday/template"][name="'+name+'"]').html();
};

var slidersConfig = {
	tooltip: 'hide'
};

var datepickerOpts = {
	format: "mm/dd/yyyy",
	startDate: "0d",
	autoclose: true
};

var priceSlideEvent = function(slideEvent){
	var priceArray = $('#slider-price').slider('getValue');
	var startPrice = priceArray[0];
	var endPrice = priceArray[1];
	$('.preview-price').text("$"+startPrice+ " - $" +endPrice);
};

var departureSlideEvent = function(slideEvent){
	var timeArray = $('#slider-departure').slider('getValue');
	var startTime = timeArray[0];
	var endTime = timeArray[1];
	$('.preview-departure').text(departureTimeToDisplayTime(startTime) + " - " + departureTimeToDisplayTime(endTime));
};

function dl(id){
	
	var href = "https://www.boatdayapp.com/dl/boatday/"+id;
	
	if(/Android/i.test(navigator.userAgent)){
		href = "android-app://com.boat.day/boatday/boatday?id="+id;

	} else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
		href = "boatday://boatday?id="+id;	
	}

	window.open(href, "_self");	
	
}

function scrollToAnchor(aid) {
	var aTag = $(aid);
	$('html, body').animate({ scrollTop: aTag.offset().top - 88}, 'slow');
}

function buttonLoader( text, button ) {

	if( text ) {

		if( !button ) var button =  $('#boatdaySearch').find('[type="submit"]');

		button.attr('data-loading-text', text).button('loading');

	} else {

		 $('#boatdaySearch').find('[data-loading-text]').button('reset');

	}
}

function departureTimeToDisplayTime(time) {
	var h = parseInt(time);
	var mm = (time-h) * 60;
	var dd = 'AM';

	if( h >= 12 ) {
		dd = 'PM';
		h -= 12;
	}

	return (h==0?12:h)+':'+(mm==0?'00':+(mm < 10 ? '0'+mm : mm))+' '+dd;
}

function getShortenDayname(date){
	var daysName = ["Sun","Mon","Tue","Wed","Thu","Fri","Sat"];
	return daysName[date.getDay()];
}

function getDateToEn(date){
	var d = getShortenDayname(date); 
	return (d + ", " + (date.getMonth() + 1) + "/" + date.getDate());
}

function getCityFromLocation(location) {

	var l = location.split(",");

	if( l.length == 0 ) {
		return '';
	}

	if( l.length == 1 ) {
		return l[0].trim();
	}

	if( l.length > 1 ) {
		return l[l.length - 2].trim(); //trim($l[count($l) - 2]);
	}

}

function loadBoatDays(){

	var tpl = _.template(getTemplate('boatday-card'));

    var fromDate = $('.options .form-group input[name="date-from"]').datepicker('getDate');
   	var toDate = $('.options .form-group input[name="date-to"]').datepicker('getDate');
   	var category = $('.options .form-group select[name="category"]').val();
   	var priceArray = $('#slider-price').slider('getValue');
	var startPrice = priceArray[0];
	var endPrice = priceArray[1];
	var timeArray = $('#slider-departure').slider('getValue');
	var startTime = timeArray[0];
	var endTime = timeArray[1];

	var target = $('.upcoming-boatdays .container .row');
	target.html("");

	var query = new Parse.Query(Parse.Object.extend('BoatDay'));
	query.include('captain');
	query.include('host');
	query.limit(20);
	query.equalTo('status', 'complete');
	query.equalTo('category', category);
	query.greaterThanOrEqualTo('price', parseInt(startPrice));
	query.lessThanOrEqualTo('price', parseInt(endPrice));
	query.greaterThanOrEqualTo('departureTime', parseFloat(startTime));
	query.lessThanOrEqualTo('departureTime', parseFloat(endTime));
	
	if((fromDate != null) && (toDate != null)){
		console.log("Form date in query");
		query.greaterThanOrEqualTo("date",fromDate);
		query.lessThanOrEqualTo("date", toDate);
	}
	else{
		console.log("Form date not in query");
		query.greaterThan("date", new Date());
	}
	

	query.find().then(function(boatdays){

		if(boatdays.length > 0){
			_.each(boatdays, function(boatday){

				var data = {
					boatday: boatday,
					departureTime: departureTimeToDisplayTime(boatday.get("departureTime")),
					dateToEn: getDateToEn(new Date(boatday.get('date'))),
					location: getCityFromLocation(boatday.get('locationText'))
				};

				target.append(tpl(data));

				var q = boatday.relation('boatdayPictures').query();
				q.ascending('order');
				q.first().then(function(fileholder) {
					if( fileholder ) {
						$('.bd-'+boatday.id+' .image').css({ backgroundImage: 'url('+fileholder.get('file').url()+')' });
					}
				});

			});

		}
		else {
			$('.upcoming-boatdays .container .row').append("<h1>BoatDay not found!</h1>");
		}

		buttonLoader();
		

	}, function(error){
		console.log(error);
		buttonLoader();
	})
}

$(document).ready(function() {

	//Parse.initialize("LCn0EYL8lHOZOtAksGSdXMiHI08jHqgNOC5J0tmU", "kXeZHxlhpWhnRdtg7F0Cdc6kvuGHVtDlnSZjfxpU"); // QA
	Parse.initialize("8YpQsh2LwXpCgkmTIIncFSFALHmeaotGVDTBqyUv", "FaULY8BIForvAYZwVwqX4IAmfsyxckikiZ2NFuEp"); //HP

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
	});

	//youtube on modal
    var youtubeUrl = $("#boatday-intro-video").attr('src');
    
    $("#modal-youtube-video").on('hide.bs.modal', function(){
        $("#boatday-intro-video").attr('src', '');
    });
    
    $("#modal-youtube-video").on('show.bs.modal', function(){
        $("#boatday-intro-video").attr('src', youtubeUrl);
    });


    if($('.boatdays .options').length !== 0){
    	    //datepicker
	    $('#date-from').datepicker(datepickerOpts);
	    $('#date-to').datepicker(datepickerOpts);

	    //slider
	    $('#slider-price').slider(slidersConfig).on('slide', priceSlideEvent);
	    $('#slider-departure').slider(slidersConfig).on('slide', departureSlideEvent);

	    $('#boatdaySearch').on('submit', function(e){
	    	e.preventDefault();

	    	buttonLoader("Searching...");

	    	var fromDate = $('.options .form-group input[name="date-from"]').datepicker('getDate');
	    	var toDate = $('.options .form-group input[name="date-to"]').datepicker('getDate');

	    	if((fromDate != null) && (toDate != null)){
	    		loadBoatDays();
	    	}
	    	else {
	    		buttonLoader();
	    		alert("Please pick dates!");
	    	}
	    });


	    loadBoatDays();
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