<?php
	/*
	* class Scheme
	*/
	class Helper
	{
		private static $smarty = null;
		private static $helper = null;

		private function __construct()
		{
		}

		/*
		* get helper method
		* return type helper object
		*/
		public static function getHelper()
		{
			global $helper;

			if($helper == null)
			{
				$helper = new Helper;
			}
			return $helper;
		}

		public static function getSmarty()
		{
			global $smarty;
			if($smarty == null)
			{
				$smarty = new Smarty;
			}
			return $smarty;
		}


		public function isSessionStart($key=false)
		{
			if (isset($_SESSION[self::SESSION_CONSTANT.'LAST_ACTIVITY']) && (time() - $_SESSION[self::SESSION_CONSTANT.'LAST_ACTIVITY'] > 3600))
			{
				session_unset();
				session_destroy();
			}
			else
				$_SESSION[self::SESSION_CONSTANT.'LAST_ACTIVITY'] = time();

			if($key==false)
			{
				if(isset($_SESSION[self::SESSION_CONSTANT.'key']))
					return true;
				else
					return false;
			}
			else
			{
				if(isset($_SESSION[self::SESSION_CONSTANT.$key]))
					return true;
				else
					return false;
			}
		}

		public function isSuperAdminSessionStart($sa_key = false)
		{
			if($sa_key == false)
			{
				if(isset($_SESSION[self::SESSION_CONSTANT.'sa_key']) && isset($_SESSION[self::SESSION_CONSTANT.'sa_key']))
					return true;
				else
					return false;
			}
			else
			{
				if(isset($_SESSION[self::SESSION_CONSTANT.$sa_key]))
					return true;
				else
					return false;
			}
		}

		public function setSuperAdminSession($email,$sa_id)
		{
			$session_key = $this->encryptKey($email,$sa_id);
			$_SESSION[self::SESSION_CONSTANT.'sa_key'] = $session_key;
			$_SESSION[self::SESSION_CONSTANT.'email'] = $email;
			$_SESSION[self::SESSION_CONSTANT.'sa_id'] = $sa_id;
			return true;
		}

		public function setSession($hmac,$shop_name, $user_id=false)
		{
			$session_key = $this->encryptKey($hmac,$shop_name);
			$_SESSION[self::SESSION_CONSTANT.'key'] = $session_key;
			$_SESSION[self::SESSION_CONSTANT.'hmac'] = $hmac;
			$_SESSION[self::SESSION_CONSTANT.'shop'] = $shop_name;
			$_SESSION[self::SESSION_CONSTANT.'shop_id'] = $user_id;
			$_SESSION[self::SESSION_CONSTANT.'LAST_ACTIVITY'] = time();
			return true;
		}

		public function setProductSession($shop_name,$shop_id,$id_product)
		{
			$session_key = $this->encryptKey($shop_name,$id_product);
			$_SESSION[self::SESSION_CONSTANT.'key'] = $session_key;
			$_SESSION[self::SESSION_CONSTANT.'shop'] = $shop_name;
			$_SESSION[self::SESSION_CONSTANT.'shop_id'] = $shop_id;
			$_SESSION[self::SESSION_CONSTANT.'id_product'] = $id_product;
			return true;
		}

		public function setSomeExtraSession($resend_uniq)
		{
			$_SESSION[self::SESSION_CONSTANT.'resend_uniq'] = $resend_uniq;
		}

		public function setNoticeSession($notice = 0)
		{
			$_SESSION[self::SESSION_CONSTANT.'notice'] = $notice;
			return true;
		}

		public function getNoticeSession($notice)
		{
			if(isset($_SESSION[self::SESSION_CONSTANT.$notice]) && $_SESSION[self::SESSION_CONSTANT.$notice] != 0)
				return $_SESSION[self::SESSION_CONSTANT.$notice];
			else
				return false;
		}

		public function setErrorSession($error = 0)
		{
			$_SESSION[self::SESSION_CONSTANT.'error'] = $error;
			return true;
		}

		public function setSessionAttr($key, $value)
		{
			$_SESSION[self::SESSION_CONSTANT.$key] = $value;
			return true;
		}

		public function getErrorSession($error)
		{
			if(isset($_SESSION[self::SESSION_CONSTANT.$error]) && $_SESSION[self::SESSION_CONSTANT.$error] != 0)
				return $_SESSION[self::SESSION_CONSTANT.$error];
			else
				return false;
		}

		public function unsetSession($session_name)
		{
			if (is_array($session_name))
			{
				foreach ($session_name as $value)
					unset($_SESSION[self::SESSION_CONSTANT.$value]);
			}
			else
				unset($_SESSION[self::SESSION_CONSTANT.$session_name]);
		}

		public function closeSessionWrite()
		{
			session_write_close();
		}

		public function check_variable($variable)
		{
			$variable = trim($variable);
			if (get_magic_quotes_gpc()) {
				$variable = stripslashes($variable);
			}
			$variable = mysql_real_escape_string($variable);
			return $variable;
		}

		public function encryptKey($var1,$var2)
		{
			$mixed_str = $var1.$var2;
			$enc_string = md5($mixed_str);
			return $enc_string;
		}

		public function twoWayencryption($ciphertext)
		{
			$encrypted = base64_encode($ciphertext);
			return $encrypted;
		}

		public function twoWaydecryption($encrypted)
		{
			$ciphertext = base64_decode($encrypted);
			return $ciphertext;
		}

		public function redirect_link($page_name,$extra=false)
		{
			if(!$extra)
			{
				header('Location:index.php?p='.$page_name);
				exit;
			}
			else
			{
				if (is_array($extra))
				{
					$keys = '&';
					foreach ($extra as $key => $value)
						$keys .= $key.'='.$value.'&';
					header('Location:index.php?p='.$page_name.$keys);
					exit;
				}
				else
				{
					header('Location:index.php?p='.$page_name.'&'.$extra);
					exit;
				}
			}

			exit();
		}

		public function redirect($url)
		{
			header('Location: '.$url);
			exit;
		}

		public function getValue($key)
		{
			if (isset($_GET[$key]))
			{
				if ($_GET[$key]=='' || $_GET[$key] == 'undefined')
					return false;
				else
					return $_GET[$key];
			}
			else if (isset($_POST[$key]))
			{
				if ($_POST[$key]=='' || $_POST[$key] == 'undefined')
					return false;
				else if (is_array($key))
				{
					$i=0;
					foreach ($key as $value)
					{
						// $arr = array($i => $value);
						$arr["$i"] = $value;
						$i++;
					}
					return $arr;
				}
				else
					return $_POST[$key];
			}
			else
				return false;
		}
	}
?>