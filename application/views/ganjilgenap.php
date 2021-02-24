<?php
defined('BASEPATH') OR exit('No direct script access allowed');

for ($g = 1; $g <= 10; $g++) {
	if ($g % 2 == 0) {
		echo "$g =";
		echo " Bilangan genap<br>";
	} else {
		echo "$g =";
		echo " Bilangan ganjil<br>";
	}
}
?>
