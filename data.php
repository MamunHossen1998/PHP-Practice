<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <?php
	$name=$_POST['username'];
	$E_mail=$_POST['email'];
	$gender=$_POST['gender'];
	$district=$_POST['district'];
	echo "Welcome $name your Email is:$E_mail"."<br>";
		echo 'District_'.$district."<br>";
  echo 'Gender_'.$gender."<br>";

	?>
	<?php
       //echo explode("hello mamun hossen")."<br>";
			 $a="hello mamun hena nisa";
			 echo "<pre>";
			 print_r (explode(" ",$a));
			 echo "</pre>"."<br>";

			 $b='fjdkf kdf jdl';
			 echo strrev ($b);
	?>

</body>
</html>
