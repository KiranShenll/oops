<?php
class straight {
	public function area($a) {
		$dd = 22/5*($a*$a);
		echo $dd;
	}
}

class reverse extends straight {
	public function area($a,$b) {
		$dd = $a + $b;
		echo $dd;
	}
}
$rev = new reverse();
$rev -> area(5);

echo $rev;
?>