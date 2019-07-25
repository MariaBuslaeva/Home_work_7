<?php
	include 'task_7_4_figure.php';
	class Circle implements Figure {
		protected $r;

		public function __construct($r) {
			$this->r = $r;
		}

		public function getSquare() {
			return pow(pi(), 2)*$this->r;
		}
	}
	$circle = new Circle(3);
	echo $circle->getSquare();
