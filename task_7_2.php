<?php
	class Log {
		public $list=[];

		public function save($str) {
			$this->list[count($this->list)] = $str;
		}
		public function getRecords($n) {
			$arr = [];
			$count = 0;
			for($i=count($this->list)-1;  $i>$n; $i--) {
				$arr[$count]=$this->list[$i];
				$count++;
			}
			return $arr;
		}
		public function clear() {
			$this->list=[];
		}

	}
	$l = new Log();
	$l->save('Первая запись');
	$l->save('Вторая запись');
	$l->save('Третья запись');
	$l->save('Четвертая запись');
	$l->save('Пятая запись');

	echo print_r($l->list) ."\n";

	echo print_r($l->getRecords(2));

	$l->clear();
	echo print_r($l->list) ."\n";




