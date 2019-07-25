<?php
	class User {
		public static $count=0;
		public function __construct() {
			self::$count+=1;
		}
	}
	$q=new User();
	$w=new User();
	echo User::$count;
