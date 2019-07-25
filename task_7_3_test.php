<?php 
	include 'task_7_3_trait1.php';
	include 'task_7_3_trait2.php';
	include 'task_7_3_trait3.php';
	class Test {
		use Trait1;
		use Trait2;
		use Trait3;
		public function getSum () {
			return $this->method1() + $this->method2() + $this->method3();
		}
	}

	$a = new Test;
	echo $a->getSum();