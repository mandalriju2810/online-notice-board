<?php
include("../inc/db.php");
$con=mysqli_connect("localhost","root","","notice_board");

if(isset($_GET['email'])&& isset($_GET['v_code']))
{   
   echo $query="SELECT * FROM `admin` WHERE `admin_email`='$_GET[email]' AND `verification`='$_GET[v_code]'   ";
    $result=$con->query($query);
    if($result)
    {
       if(mysqli_num_rows($result)==1)
       {
           $result_fetch=mysqli_fetch_assoc($result);
        $e=$result_fetch['admin_email'];
           if($result_fetch['status']==0)
           {

             echo $update="UPDATE admin SET status='1' WHERE admin_email='$e' ";
             if(mysqli_query($con,$update))
             {
                 echo
                 " <script>
                 alert ('Email verification successfull!!');
                 window.location.href='form.php';
               </script>"; 
             }
             else
             {
                " <script>
                alert ('Can not run query ..some error found!!');
                window.location.href='admin_signup.php';
              </script>"; 
             }
           }
           else
           {
            echo
            " <script>
               alert ('Email Already verified');
               window.location.href='admin_signup.php';
             </script>";  
           }
       }
    }
    else
    {
        echo
        " <script>
           alert ('Cannot run Query');
           
         </script>";
    }
}




?>