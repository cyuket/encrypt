<form action="" method="POST">
	<input type="" name="string">
	<input type="submit" value="encrypt">
</form>
<?php
$offset = 0;
$string =strtolower($_POST['string']);
if (isset($string)&&! empty($string)) {
	$alpha = range('a', 'z');
	$split = str_split($string);
	$split_length = count($split);
	$alpha_length = count($alpha);
	for ($i=0; $i < $split_length ; $i++) { 
		$find = $split[$i];
		$pos = array_search($find, $alpha ); 
		$index = $pos + 1;
		$mod = $index%2;
		if ($mod > 0) {
			$x = ($index*3) + 1;
			echo "o".$x;
		}else{
		
			$x = $index/2;
			echo "e".$x;
		}

	
	}

}else {
	echo "please type a string";
}


 ?>