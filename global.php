
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    // $x=30;
    // $y=60;
    // function add()
    // {
    //   $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
    // }
    // add();

    // echo $_SERVER['PHP_SELF'];
    // echo "<br>";
    // echo $_SERVER['HTTP_HOST'];
    // echo "<br>";
    // echo $_SERVER['SERVER_NAME']."<br>";
    // echo $_SERVER['HTTP_REFERER']."<br>";
    // echo $_SERVER['HTTP_USER_AGENT']."<br>";
    // echo $_SERVER['SCRIPT_NAME']."<br>";
    // echo $_SERVER['SERVER_SIGNATURE']."<br>";
    //

    ?>

<form action="" method="post">
Name: <input required type="text" name="username"><br><br>
E-mail: <input type="email" name="email"><br><br>
District:
<select required name="district">
     <option value="">Select District</option>
     <option value="Patuakhali">patuakhali</option>
     <option value="vola">vola</option>
      <option value="vola">jalokathi</option>
</select><br>
Gender:
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">Female<br>
<input type="submit" value="submit">
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$name=$_POST['username'];
$E_mail=$_POST['email'];
$gender=$_POST['gender'];
$district=$_POST['district'];
echo "Welcome $name your Email is:$E_mail"."<br>";
  echo 'District_'.$district."<br>";
echo 'Gender_'.$gender."<br>";
}
?>


</body>
</html>
