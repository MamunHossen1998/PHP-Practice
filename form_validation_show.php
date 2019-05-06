<?php
 $name = $_POST['fname'];
 $Email = $_POST['Email'];
 $password = $_POST['password'];
 $Repassword = $_POST['Repassword'];
 $gender = $_POST['gender'];
 $select = $_POST['select'];
 $comment = $_POST['comment'];
//print_r($_POST);
//$name_err='';
$name_er='';
$Email_er='';
$password_err='';
$Repassword_err='';
$gender_err='';
$select_err='';
$comment_err='';

if(empty($name)){
  $name_err = "Please enter the name";
  header('location:form_validation.php?nam_err='.$name_err);
}
elseif(empty($Email)){
  $Email_er= "Email dan dada";
  header('location:form_validation.php?email_err='.$Email_er);
}
elseif(!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/',$Email )){
  //elseif(!filter_var($Email,FILTER_VALIDATE_EMAIL))
  $Email_er= "tora aber manus ha";
  header('location:form_validation.php?email_err='.$Email_er);
}

elseif(empty($password)){
  $password_err="sir,Password ta deley ki hoy?";
  header('location:form_validation.php?pass-err='.$password_err);
}
elseif(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/',$password)){
//elseif(strlen($password) <=7){
  $password_err="Enter the minimum eight digit number";
  header('location:form_validation.php? pass-err='.$password_err);
}
elseif(empty($Repassword)){
  $Repassword_err="sir,Repassword ta o dan";
  header('location:form_validation.php?Repass-err='.$Repassword_err);
}
// elseif(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/',$Repassword)){
// //elseif(strlen($password) <=7){
//   $Repassword_err="Repassword not correct";
//   header('location:form_validation.php?Repass-err='.$Repassword_err);
// }
elseif($password != $Repassword){
  $Repassword_err="Password r Repassword soman nah";
  header('location:form_validation.php?Repass-err='.$Repassword_err);
}
elseif(empty($gender)){
  $gender_err="Select your gender";
  header('location:form_validation.php?gender_err='.$gender_err);
}
elseif(empty($select)){
  $select_err="Select your country";
  header('location:form_validation.php?select_err='.$select_err);
}
elseif(str_word_count($comment)<10){
  $comment_err="Write a comment about form minimun ten word";
  header('location:form_validation.php?comment_err='.$comment_err);
}

else{
  echo $name."<br>";
  echo $Email."<br>";
    echo $password."<br>";
        echo $Repassword."<br>";
          echo $gender."<br>";
                echo $select."<br>";
                echo $comment;
}

?>
