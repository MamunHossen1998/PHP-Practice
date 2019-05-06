<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>

  </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
      <body>

<div class="container">
  <div class="row">
    <div class="col-lg-6 m-auto" >
      <div class="text-center py-4">
        <h2> Form Validation </h2>
      </div>
<form action="form_validation_show.php" method="post">
      <div class="row">
      <div class="col-lg-12">
        <label for="">Name</label>
        <input type="text" name="fname" class="form-control" placeholder="Enter the name">
        <div class="pt-3 text-danger">
            <?php
               if(!empty($_GET['nam_err'])){
               echo $_GET['nam_err'];
               }
            ?>
      </div>
      </div>
      <div class="col-lg-12 ">
         <label for="">Email</label>
         <input type="text" name="Email" class="form-control" placeholder="Enter the name">
         <div class="text-danger">
           <?php
              if(!empty($_GET['email_err'])){
                echo $_GET['email_err'];
              }
           ?>

         </div>
      </div>
<div class="col-lg-12 pt-3">
  <label for=""> password</label>
  <input type="password" name="password" class="form-control" placeholder="Enter the password">
  <div class="text-danger">
    <?php
        if(!empty($_GET['pass-err'])){
          echo $_GET['pass-err'];
        }
    ?>
  </div>

</div>
<div class="col-lg-12 pt-3">
  <label for="">Repassword</label>
  <input type="password" name="Repassword" class="form-control" placeholder="Enter the Repassword">
  <div class="text-danger">
    <?php
        if(!empty($_GET['Repass-err'])){
          echo $_GET['Repass-err'];
        }
    ?>
  </div>
</div>
<div class="col-lg-12 pt-3 ">
  <label for="">Gender:</label>
   <input type="radio" name="gender" value="Male">Male
   <input type="radio" name="gender" value="Female">Female
   <div class="text-danger">
     <?php
         if(!empty($_GET['gender_err'])){
           echo $_GET['gender_err'];
         }
     ?>
   </div>
 </div>
<div class="col-lg-12 pt-3">
  <select class="" name="select">
       <option value="0">Select your country</option>
          <option value="Bangladesh">Bangladesh</option>
             <option value="Canada">Canada</option>
                <option value="India">India</option>
  </select>
  <div class="text-danger">
     <?php
        if(!empty($_GET['select_err'])){
          echo $_GET['select_err'];
        }

     ?>
  </div>
  </div>
  <div class="col-lg-12 py-3">
    <label for="">Write message</label>
    <textarea name="comment" rows="6" cols="57"></textarea>
    <div class="text-danger">
      <?php
        if(!empty($_GET['comment_err'])){
           echo $_GET['comment_err'];
        }
     ?>
    </div>
    </div>
      <div class="col-lg-12 text-center">
        <button type="submit" class="btn btn-primary">submit</button>
      </div>
      </div>
</form>
    </div>
    </div>
  </div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
