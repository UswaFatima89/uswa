<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta >
	<title>first php class</title>
</head>
<body>
	 <?php
	 	$student1 = array(
			 'name' =>  Uswa
			 'subject' => ENGLISH
			 'marks' => 90.05
		 );
		 $student2 = array(
			'name' =>  Bisma
			'subject' => ENGLISH
			'marks' => 95.75
		 );
		 $merged_array = array_merge($student1,$student2);
		 foreach($merged_array as $value){
			 echo $value
		 }
	 ?>
</body>
</html>