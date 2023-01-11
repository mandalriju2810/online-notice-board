<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Student Panel</title>
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css"
  rel="stylesheet"
/>
<link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="row" >
        <div class="shadow-lg p-3 mb-5 bg-white rounded">
        <div class="col-md-1">
        </div>
        
        <div class="col-md-10" ><!--form coloumn start-->
                <section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="VariousLogo/form.png " width="400px" 
          class="img-fluid" alt="Sample image">
      </div>
    
      
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1" ><!--form border-->
            
        <form action="signin_user.php" method="post" enctype="multipart/form-data">
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            
          </div>

          <div class="divider d-flex align-items-center my-4">
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3">Sign in with</p>
            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-linkedin-in"></i>
            </button>
          </div>
           
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
             <p>Email: *   <input type="email" name="email" placeholder="abc@gmail.com" required > </p>
           
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <p>Password * 
        <input type="password" name="password" placeholder="enter password" required > </p>
        
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              
              <label class="form-check-label" for="form2Example3">
                
              </label>
            </div>
            <a href="#!" class="text-body">Forgot password?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <input type="submit" class="btn btn-primary btn-block mb-4" id="btn" name="signin" value="login" >
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="signup.php"
                class="link-danger">Register</a></p>
          </div>
          <div class="text-center text-lg-start mt-4 pt-2">
      
            <p class="small fw-bold mt-2 pt-1 mb-0">back to Home ..<a href="../notice_board.php"
                class="link-danger">Click here</a></p>
          </div>
        </form>
        
      </div><!--form div-->

    </div>
  </div>
  
</section>
            
        
    </div><!-- form coloumn-->
        <div class="col-md-1">

            
        </div>
    </div><!--shadow-->
        </div><!--row-->
        

</body>
</html>