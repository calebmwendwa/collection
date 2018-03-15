<form method="BMI">
<input type="number" name="BMI">

<button>submit</button>

<?php
if (isset($_GET['BMI'])) {
		# code...
		$BMI=$_GET['BMI'];
		if ($BMI<=15) {
			# code...
			echo "very severly underweight";
		} else{
			echo "severly underweight";
		}if ($BMI>=16) {
			# code...
			echo "severly underweight";
		}elseif ($BMI>=18) {
			# code...
			echo "normal healthy weight";
		}elseif ($BMI>=25) {

			echo "overweight";
		}elseif ($BMI>=30) {
			# code...
			echo "obese class 1 Moderately obese";
		}elseif ($BMI>=35) {
			# code...
			echo "obese class 2 sevely obese";
		}elseif ($BMI>=40) {
			# code...
			echo "obese class 3 very severly obese";
		}

		
	}

?>

