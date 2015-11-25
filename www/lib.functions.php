<?php

	function dateToEnBoatDayCard($date) {
		$date->setTimezone(new DateTimeZone('Europe/Helsinki'));

		return $date->format("D, n/j");
	}

	
	function departureTimeToDisplayTime($time) {

		$h = $time * 1;
		$mm = ( $time - $h ) * 60;
		$dd = 'am';

		if( $h >= 12 ) {
			$dd = 'pm';
			$h -= 12;
		}

		return ( $h == 0 ? 12 : $h ) + ':' + ( $mm == 0 ? '00' : + ( $mm < 10 ? '0' + $mm : $mm ) ) + ' ' + $dd;	
	}

	function getCityFromLocation($location) {

		$l = explode(',', $location);

		if( count($l) == 0 ) {
			return '';
		}

		if( count($l) == 1 ) {
			return $l[0].trim();
		}

		if( count($l) > 1 ) {
			return trim($l[count($l) - 2]);
		}

	}

	function getGuestRate($type) {
		return $type == 'business' ? 0.05 : 0.1;
	}

	function getGuestPrice($price, $guestPart) {
		return ceil($price / (1 - $guestPart));
	}

?>