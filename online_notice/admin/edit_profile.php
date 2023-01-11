<?php
session_start();
if (!($_SESSION['aemail'])) {
  header("location:form.php");
}
include("../inc/db.php");

/*  Update code*/
if(isset($_POST['update_profile'])){
$password=$_POST['admin_password'];
 $confirm_password=$_POST['admin_confirm'];

$name=$_POST['admin_name'];

$email=$_POST['admin_email'];

$phone=$_POST['admin_phone'];



if ($_FILES['admin_picture']['name']) {
      
      $img= time().$_FILES['admin_picture']['name'];

     $extar=explode(".","$img");
     $exta=array_reverse($extar);
     $ext=$exta[0];

     if ($ext=='jpg' || $ext='jpeg' || $ext=='png') 
     {
          
       $buf=$_FILES['admin_picture']['tmp_name'];
       move_uploaded_file($buf,"admin_upload_pic/".$img);

       }  

       else
       {

        echo "Picture type not supported";
       }

   


if(strlen($password)<8){
  echo "<script>alert('password shoud be minimum 8 characters!!')</script>";
exit();


}

  //$con=mysqli_connect("localhost","root","","notice_board");

  $update="UPDATE admin SET admin_name='$name',admin_password='$password',admin_email='$email', admin_image='$img',admin_phone='$phone', admin_confirm='$confirm_password' WHERE admin_email='$_SESSION[aemail]' "; 
 $con->query($update);
header("location:dashboard.php");
 }

 $update="UPDATE admin SET admin_name='$name',admin_password='$password',admin_email='$email',admin_phone='$phone', admin_confirm='$confirm_password' WHERE admin_email='$_SESSION[aemail]' "; 
 $con->query($update);
header("location:dashboard.php");

}
?>



<!DOCTYPE html>
<html >
<head>
  <title>Edit profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Edit profile</h2>
  <?php
   include("../inc/db.php");
  $sel="SELECT * FROM admin WHERE admin_email='$_SESSION[aemail]'";
  $rs=$con->query($sel);
  while($row=$rs->fetch_assoc()){

 ?>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
        
      
      <div><img src="admin_upload_pic/<?php echo $row['admin_image'] ;?>" class="img-circle" alt="Cinque Terre" width=100px; > </div>
             
        <div class="form-group">
        <label style="font-weight: bold;"  > Picture</label>
          <input type="file" class="form-control" name="admin_picture">
        </div>

        <div class="form-group">
      <label for="admin_name"> Name</label>
      <input type="text" class="form-control"   name="admin_name" value="<?php echo $row['admin_name'];?>">
    </div>       

    <div class="form-group">
      <label for="admin_email"> email</label>
      <input type="email" class="form-control"   name="admin_email" value="<?php echo $row['admin_email'];?>">
    </div>



     <div class="form-group">
      <label for="admin_phone"> phone</label>
      <input type="number" class="form-control"   name="admin_phone" value="<?php echo $row['admin_phone'];?>">
    </div>

      

    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control"   name="admin_password" value="<?php echo $row['admin_password'];?>">
    </div>

     <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control"   name="admin_confirm" value="<?php echo $row['admin_confirm'];?>">
    </div>
  

    
    <button type="submit" class="btn btn-primary" name="update_profile">Update</button>
    <?php
  }
  ?>
  </form>
</div>

</body>
</html>
