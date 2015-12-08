var base_url = "";

function scrollToAnchor(aid) {
	var aTag = $(aid);
	$('html, body').animate({ scrollTop: aTag.offset().top - 100}, 'slow');
}

$(document).ready(function() {

	Parse.initialize("LCn0EYL8lHOZOtAksGSdXMiHI08jHqgNOC5J0tmU", "kXeZHxlhpWhnRdtg7F0Cdc6kvuGHVtDlnSZjfxpU"); // QA
	//Parse.initialize("8YpQsh2LwXpCgkmTIIncFSFALHmeaotGVDTBqyUv", "FaULY8BIForvAYZwVwqX4IAmfsyxckikiZ2NFuEp"); //HP

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


    //datepicker
    var datepickerOpts = {
    	format: "mm/dd/yyyy",
    	startDate: "0d",
    	autoclose: true
    };
    $('#date-from').datepicker(datepickerOpts);
    $('#date-to').datepicker(datepickerOpts);

    //slider
	var priceSlideEvent = function(slideEvent){
		var priceArray = $('#slider-price').slider('getValue');
		var startPrice = priceArray[0];
		var endPrice = priceArray[1];
		//console.log(priceArray);
		$('.preview-price').text(displaySliderPrice(startPrice, endPrice));
		$('#start-price-hidden').val(startPrice);
		$('#end-price-hidden').val(endPrice);
	};

	var departureSlideEvent = function(slideEvent){
		var timeArray = $('#slider-departure').slider('getValue');
		var startTime = timeArray[0];
		var endTime = timeArray[1];
		$('#start-departure-hidden').val(startTime);
		$('#end-departure-hidden').val(endTime);
		$('.preview-departure').text(displaySliderDepatureTime(startTime, endTime));
	};

	function displaySliderPrice(startPrice, endPrice){
		return "$"+startPrice + " - " + "$"+endPrice;
	}

	function displaySliderDepatureTime(startTime, endTime){
		var h = parseInt(startTime);
		var mm = (startTime-h) * 60;
		var dd = 'AM';

		if( h >= 12 ) {
			dd = 'PM';
			h -= 12;
		}

		var h2 = parseInt(endTime);
		var mm2 = (endTime-h2) * 60;
		var dd2 = 'AM';

		if( h2 >= 12 ) {
			dd2 = 'PM';
			h2 -= 12;
		}

		var startStr = (h==0?12:h)+':'+(mm==0?'00':+(mm < 10 ? '0'+mm : mm))+' '+dd;
		var endStr = (h2==0?12:h2)+':'+(mm2==0?'00':+(mm2 < 10 ? '0'+mm2 : mm2))+' '+dd2;
		return startStr + " - " + endStr;
	}

    var slidersConfig = {
    	tooltip: 'hide'
    };

    $('#slider-price').slider(slidersConfig).on('slide', priceSlideEvent);
    $('#slider-departure').slider(slidersConfig).on('slide', departureSlideEvent);


    loadBoatDays();


    function loadBoatDays(){

    	var tpl = _.template(tplStr);

    	var query = new Parse.Query(Parse.Object.extend('BoatDay'));
    	query.include('captain');
    	query.include('host');
    	query.limit(20);
    	query.equalTo('status', 'complete');
    	query.find().then(function(boatdays){
    		console.log(boatdays.length);

    		_.each(boatdays, function(boatday){

    			$('.upcoming-boatdays .container .row').append(tpl({boatday: boatday}));


    			var q = boatday.relation('boatdayPictures').query();
    			q.ascending('order');
				q.first().then(function(fileholder) {
					if( fileholder ) {
						$('.bd-'+boatday.id+' .image').css({ backgroundImage: 'url('+fileholder.get('file').url()+')' });
					}
				});

    		});

    		

    	}, function(error){
    		console.log(error);
    	})




    }

});


var tplStr = '<div class="col-sm-4">'+
					'<div class="boatday-card bd-<%= boatday.id %>">' +
						'<div class="image">'+
							'<div class="banner left">'+
								'<div class="host-picture" style="background-image:url(<%= boatday.get("captain").get("profilePicture").url() %>)"></div>'+
								'<div>'+
								'</div>'+
							'</div>'+	
						'</div>';


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