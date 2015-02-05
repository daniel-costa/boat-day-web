<?php
	
	function getDateFromTimestamp($ts = null) {
		$d = new DateTime();
		$d->setTimestamp($ts === null ? time() : $ts);
		return $d->format('r');
	}
	
	function str2url($str, $charset='utf-8') {
		$str = str_replace(' ', '-', $str);
		$str = htmlentities($str, ENT_NOQUOTES, $charset);
		$str = preg_replace('#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str);
		$str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str); // pour les ligatures e.g. '&oelig;'
		$str = preg_replace('#&[^;]+;#', '', $str); // supprime les autres caractères
		return strtolower($str);
	}

	
	function require_admin() {
		global $proceedErrors;

		if($_SESSION['account']['type'] == ACCOUNT_TYPE_ADMIN) {
			$proceedErrors[] = 'Youd don\'t have access to this functionality';
			return false;
		}

		return true;
	}

	function getPagination($query, $types = null, $params = null, $escapeFrom = 0, $ipp = 20) {
		global $sql;

		if($types && $params) {
            $bind_names[] = $types;
            for ($i=0; $i < count($params); $i++) {
                $bind_name = 'bind'.$i;
                $$bind_name = $params[$i];
                $bind_names[] = &$$bind_name;
            }
        }

		$__page = isset($_GET['page']) ? $_GET['page'] : 1;
		
		$query_ = $query;
		for($i = 0; $i <= $escapeFrom; $i++) {
			$query_ = substr($query_, strpos($query_, 'FROM')+4);
		}

		$q1 = sprintf("SELECT count(*) FROM %s", $query_);

		$stmt = $sql->prepare($q1);
		if(isset($bind_names)) {
			call_user_func_array(array($stmt, 'bind_param'), $bind_names);
		}

		$stmt->execute();
		$stmt->bind_result($total);
		$stmt->fetch();
		$stmt->close();

		$start = ($__page - 1) * $ipp;

		$out = array(
			'current'	=> $__page,
			'next'		=> null,
			'total'		=> $total,
			'total_p'	=> max(ceil($total / $ipp), 1),
			'ipp'		=> $ipp
		);

		
		if($start > MAX($out['total']-1, 0)) {
			// ToDo : 
			// - handle this error in the UX
			// echo 'Page not in a valid range';
		}
		
		if($__page * $ipp < $out['total']) {
			$out['next'] = $__page + 1;
		}

		$stmt = $sql->prepare(sprintf("$query LIMIT %d,%d", $start, $out['ipp']));
		if(isset($bind_names)) {
			call_user_func_array(array($stmt, 'bind_param'), $bind_names);	
		}

		$out['stmt'] = $stmt;

		return $out;
	}

	function shutdown() {
		if(isset($_SESSION['last_form'])) {
			unset($_SESSION['last_form']);
		}
		
		if(isset($_SESSION['errors'])) {
			unset($_SESSION['errors']);
		}

		if(isset($_SESSION['success'])) {
			unset($_SESSION['success']);
		}
	}

	function s($field, $value) {

		if(isset($_SESSION['last_form'][$field])) {
			$lastValue = $_SESSION['last_form'][$field];
		} else {
			$lastValue = '';
		}

		echo sprintf(' value="%s" %s', $value, $lastValue == $value ? 'selected="true"' : '');
	}

	function t($field) {
		
		if(isset($_SESSION['last_form'][$field])) {
			$value = $_SESSION['last_form'][$field];
		} else {
			$value = '';
		}

		echo $value;
	}

	function f($field) {
		
		if(isset($_SESSION['last_form'][$field])) {
			$value = $_SESSION['last_form'][$field];
		} else {
			$value = '';
		}

		echo sprintf(' name="%s" value="%s" ', $field, $value);
	}

	function UX_Pagination($p) {
		echo '<nav><ul class="pagination pagination-sm">';
		$params = '';
		foreach($_GET as $k => $v) {
			if($k != 'page') {
				$params .= sprintf("&%s=%s", $k, $v);
			}
		}

		for($i = 1; $i <= $p['total_p']; $i++) {
			if($p['current'] == $i) {
				echo '<li class="active"><a href="#">'.$i.'</a></li>';
			} else {
				echo sprintf('<li><a href="%s?page=%s%s">%s</a></li>', $_SERVER['SCRIPT_NAME'], $i, $params, $i);
			}
		}

		echo '</ul></nav>';
	}

	function proceedPostParams() {
		$_SESSION['last_form'] = $_POST;
		foreach($_POST as $k => $v) {
			$v = trim(urldecode($v));
			$k = strtolower($k);
			$GLOBALS["__$k"] = $v;
		}
	}

	function back() {
		if(isset($_SERVER['HTTP_REFERER'])) {
			locate($_SERVER['HTTP_REFERER']);
		} else {
			locate('index.html');	
		}
	}

	function locate($url) {
		header("Location: $url");
	}
	
	function loggedIn() {
		return isset($_SESSION['account']['id']);
	}

	function formPostSent() {
		return isset($_POST);
	}

	function _n($text) {
		return $text == null ? '' : $text;
	}

	function generateRandomString($length = 10) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, strlen($characters) - 1)];
		}
		return $randomString;
	}

	function db_connect() {
		global $db_connection;
		
		$link = @new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
		
		if ($link->connect_errno) {
			echo 'db_connect'. 'MySQL Connexion error : ('.$link->connect_errno.') '.$link->connect_error;
		} else {
			return $link;
		}
	}

	function isEmailValid($email) {
		$isValid = true;
		$atIndex = strrpos($email, "@");
		if (is_bool($atIndex) && !$atIndex) {
			$isValid = false;
		} else {
			$domain = substr($email, $atIndex+1);
			$local = substr($email, 0, $atIndex);
			$localLen = strlen($local);
			$domainLen = strlen($domain);
			if ($localLen < 1 || $localLen > 64) {
				// local part length exceeded
				$isValid = false;
			} else if ($domainLen < 1 || $domainLen > 255) {
				// domain part length exceeded
				$isValid = false;
			} else if ($local[0] == '.' || $local[$localLen-1] == '.') {
				// local part starts or ends with '.'
				$isValid = false;
			} else if (preg_match('/\\.\\./', $local)) {
				// local part has two consecutive dots
				$isValid = false;
			} else if (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain)) {
				// character not valid in domain part
				$isValid = false;
			} else if (preg_match('/\\.\\./', $domain)) {
				// domain part has two consecutive dots
				$isValid = false;
			} else if (!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/', str_replace("\\\\","",$local))) {
				// character not valid in local part unless 
				// local part is quoted
				if (!preg_match('/^"(\\\\"|[^"])+"$/', str_replace("\\\\","",$local))) {
					$isValid = false;
				}
			}
			if ($isValid && !(checkdnsrr($domain,"MX") || checkdnsrr($domain,"A"))) {
				// domain not found in DNS
				$isValid = false;
			}
		}
		return $isValid;
	}
?>