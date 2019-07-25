<?php
	include 'task_7_4_figure.php';
	class Restangle implements Figure {
		protected $a;
		protected $b;

		public function __construct ($a, $b) {
			$this->a = $a;
			$this->b = $b;
		}
		public function getSquare() {
			return $this->a*$this->b;
		}
	}
	$restangle = new Restangle(4,5);
	echo $restangle->getSquare();