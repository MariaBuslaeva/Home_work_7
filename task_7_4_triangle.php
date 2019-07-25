<?php
	include 'task_7_4_figure.php';
	class Triangle implements Figure {
		protected $a;
		protected $h;

		public function __construct($a, $h) {
			$this->a = $a;
			$this->h = $h;
		}
		public function getSquare() {
			return 0.5*$this->a*$this->h;
		}
	}
	$triangle = new Triangle(5,7);
	echo $triangle->getSquare();