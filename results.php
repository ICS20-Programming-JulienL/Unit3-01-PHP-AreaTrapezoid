<?php
	// get the hourly rate and the work hours from textfield
	$base1 = $_POST["shape-base-1"];
	$base2 = $_POST["shape-base-2"];
  $height= $_POST["shape-height"];

	// calculate the other variables

  $area = $base1+$base2;
  $area1 = $area*$height/2;
  $roundedArea= round($area1, 2);
?>
<h3>Results:</h3>
<?php echo "The trapezoid is "."$roundedArea"."cm<sup>2</sup>."?>