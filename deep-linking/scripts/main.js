
var dayToEnDay = function(n) {
	switch(n) {
		case 0 : return 'Sun'; break;
		case 1 : return 'Mon'; break;
		case 2 : return 'Tue'; break;
		case 3 : return 'Wed'; break;
		case 4 : return 'Thur'; break;
		case 5 : return 'Fri'; break;
		case 6 : return 'Sat'; break;
	}
};

var dateToEnBoatDayCard = function(date) {
	var date = new Date(date.iso ? date.iso : date);
	return dayToEnDay(date.getDay()) + ', ' + (date.getMonth()+1) + '/' + date.getDate();
};

departureTimeToDisplayTime = function(time) {

	var h = parseInt(time);
	var mm = (time-h) * 60;
	var dd = 'am';

	if( h >= 12 ) {
		dd = 'pm';
		h -= 12;
	}

	return (h==0?12:h)+':'+(mm==0?'00':+(mm < 10 ? '0'+mm : mm))+' '+dd;	
};


var getCityFromLocation = function(location) {

	var l = location.split(',');

	if( l.length == 0 ) {
		return '';
	}

	if( l.length == 1 ) {
		return l[0].trim();
	}

	if( l.length > 1 ) {
		return l[l.length - 2].trim();
	}

};

var getUrlParameter = function(sParam) {
    var sURLVariables = decodeURIComponent(window.location).split('/');
    return sURLVariables[sURLVariables.length - 1];
};

$(document).ready(function() {

	Parse.initialize("8YpQsh2LwXpCgkmTIIncFSFALHmeaotGVDTBqyUv", "FaULY8BIForvAYZwVwqX4IAmfsyxckikiZ2NFuEp");

	var boatdayid = getUrlParameter('id');
	var BoatDayModel = Parse.Object.extend("BoatDay");

	if( typeof boatdayid === typeof undefined ) {
		return ;
	}

	var query = new Parse.Query(BoatDayModel);
	query.include('captain');
	query.get(boatdayid).then(function(boatday) {

		if( boatday.get('captain').get('rating') ) {
			$('.no-rating').hide();
			$('.rating').addClass('rating-' + Math.ceil(boatday.get('captain').get('rating')));
		} else {
			$('.no-rating').text(boatday.get('captain').get('displayName'));
			$('.rating').hide();
		}

		$('.host-picture').css({ 
			backgroundImage: 'url(' + boatday.get('captain').get('profilePicture').url() + ')'
		});

		var seats = boatday.get('availableSeats') - boatday.get('bookedSeats');

		document.title = boatday.get('name') + ', only ' + seats + ' seat'+(seats == 1 ? '' : 's') + ' available.';
		
		$('meta[property="og\\:title"]').attr("content", boatday.get('name'));
		$('meta[property="og\\:description"]').attr("content", boatday.get('description'));
		$('meta[property="og\\:url"]').attr("content", decodeURIComponent(window.location));

		$('.title').text(boatday.get('name'));
		$('.location .label').text(getCityFromLocation(boatday.get('locationText')));
		$('.date .label').text(dateToEnBoatDayCard(boatday.get('date')));
		$('.time .label').text(departureTimeToDisplayTime(boatday.get('departureTime')));
		$('.seats .label').text(boatday.get('availableSeats'));
		$('.price').text('$'+boatday.get('price'));

		$('.deep-link').attr('href', 'boatday://boatday?id=' + boatdayid);

		boatday.relation('boatdayPictures').query().first().then(function(fh) {

			$('.image').css({ 
				backgroundImage: typeof fh === typeof undefined ? 'url(resources/placeholder-boatday.png)' : 'url(' + fh.get('file').url() + ')'
			});

			$('meta[property="og\\:image"]').attr("content", typeof fh === typeof undefined ? 'https://www.boatdayapp.com/deep-linking/resources/placeholder-boatday.png' : fh.get('file').url());

			$('.container').fadeIn();
		});
	})

});