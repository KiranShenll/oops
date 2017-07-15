<?php
class straight {
	public function kir() {
		echo "kiran sai";
	}
}

class reverse extends straight {
	public function kir() {
		echo "ias narik";
	}
}
$rev = new reverse();
$rev -> kir();

echo $rev;
?>