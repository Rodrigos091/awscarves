<!doctype html>
<html lang="en">
<head><meta charset="UTF-8">
</head>
<body>
<?php

$days = array('Monday' , 'Tuesday' , 'Wednesday') ;

foreach ($days as $value) { echo "&bull; $value" ;
	# code...
}

$months = array ('Jan' => 'January' , 'feb' => 'February' , 'mar' => 'March' );

echo '<dl>';
foreach ($months as $key => $value) { echo "<dt> $key <dd> $value"; }
	# code...

echo '</dl>' ;
?>

</body>
</html>
