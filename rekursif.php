<p>Masukan Angka</p>
<form method="Post">
	Angka: <input type="number" name="a"> 
	<input type="submit" name="submit" value="submit"> <br>
</form>
<?php 
	$a =$_POST['a'];

	function rekursif($z,$x){
	 	if ($z > 0) {
	 		if ($x > 0) {
	 			echo "* ";
	 			$x--;
	 			rekursif($z,$x);
	 		}	
	 		else{
	 			echo "<br>";
	 			$z--;
	 			rekursif($z,$z);
	 		}
	 	}
	 }
	rekursif ($a, $a);

echo "============================================= <br>";

	function rekursif2($z,$x,$a){
	 	if ($z <= $a) {
	 		if ($x <= $z) {
	 			echo "$x ";
	 			$x++;
	 			rekursif2($z,$x,$a);
	 		}	
	 		else{
	 			echo "<br>";
	 			$z++;
	 			rekursif2($z,1,$a);
	 		}
	 	}
	}
	rekursif2 (1,1,$a);

 ?>
