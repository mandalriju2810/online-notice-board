<?php    
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>create new account</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css"
  rel="stylesheet"
/>
<!--icon-->
<link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
<!--user css
<link rel="stylesheet" type="text/css" href="../student/signup.css">-->
</head>
<body style="background-color: #eee;">
	<section class="vh-100" >
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
          	<img src="https://upload.wikimedia.org/wikipedia/en/thumb/0/06/JIS_College_of_Engineering_Logo.png/220px-JIS_College_of_Engineering_Logo.png" class="float-right" width="100" 
        alt="JIS log" width="60" >

            <div class="row ">

              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
                   	
                <form action="signup_user.php" method="post" enctype="multipart/form-data" class="mx-1 mx-md-4">
                   <!--name-->
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline mb-4">
             <p>Name: * <input type="text" name="student_name" placeholder="Riju Mandal" required > </p>
           
          </div>
                  </div>

                  	<!--email-->
                  <div class="form-outline mb-4">
             <p>Email: * <input type="email" name="student_email" placeholder="abc@gmail.com" required > </p>
           
          </div>

               <!--phone no-->
               		 <div class="form-outline mb-4">
             <p>Phone:* <input type="number" name="student_phone" placeholder="" required > </p>
           
          </div>
               <!--Gender-->
               		 <div class="d-flex flex-row align-items-center mb-4 ml-4">
               		 	 <div class="form-outline flex-fill mb-0">
						  <input class="form-check-input" type="radio" name="student_gender" value="male" id="flexRadioDefault1"/>
						  <label class="form-check-label" for="flexRadioDefault1">
						   Male
						  </label>
						</div>
						  </div>
												
										
						<div class="d-flex flex-row align-items-center mb-4 mx-md-4">
							 <div class="form-outline flex-fill mb-0">
						  <input class="form-check-input" type="radio" name="student_gender" value="female" id="flexRadioDefault1"/>
						  <label class="form-check-label" for="flexRadioDefault1">
						   Female
						  </label>
						</div>
						 </div>
						 <div class="form-group">
				<label ><small>Select Year(im which you studied)</small></label>
				<select class="form-control" name="student_year" required>
					<option value="">-select year-</option>
					<option>First Year</option>
					<option>Second Year</option>
					<option>Third Year</option>
					<option>Fourth Year</option>
					
					</select>
				</div>
				<!--designation-->

				<div class="form-group">
				<label ><small>Select Department</small></label>
				<select class="form-control" name="department" required>
					<option value="">-select year-</option>
					<option>CSE</option>
					<option>ME</option>
					<option>ECE</option>
					<option>EE</option>
					<option>BBA</option>
					<option>BCA</option>
					<option>BME</option>
					
					</select>
				</div>

				<!--JIS ID-->
				 <div class="form-group">
				<label >Student JIS Id</label>
				<input type="text" class="form-control" name="jis_id" 
				autocomplete="off" required>
				
			</div>
				 <div class="form-group">
				
				<label  >Student Roll</label>
				<input type="number" class="form-control" name="student_roll"  autocomplete="off" required>
				
			</div>

              <!--password-->
                  <div class="form-outline mb-4">
             <p>Password: <input type="password" name="student_password" placeholder="" required > </p>
           
          </div>
             <!--repeat password-->
                 <div class="form-outline mb-4">
             <p>confirm password:<input type="password" name="student_confirm" placeholder="" required > </p>
           
          </div>
                  <!--picture-->
                   <div class="form-group">
				<label style="font-weight: bold;"  >upload profile image</label>
				<input type="file" class="form-control" name="student_picture"  required>
				
			</div>
            


                  <!--agreement-->
                  <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" required =""/>
                    <label class="form-check-label" for="form2Example3">
                      I agree all statements in <a href="#!">Terms of service</a>
                    </label>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg" name="sign_up">Register</button>
                  </div>
                   <div class="text-center text-lg-start mt-4 pt-2">
                   	<p class="small fw-bold mt-2 pt-1 mb-0">Already have account? ..<a href="signin.php"
                class="link-danger">Click here</a></p>
      
            <p class="small fw-bold mt-2 pt-1 mb-0">back to Home ..<a href="../notice_board.php"
                class="link-danger">Click here</a></p>
          </div>
                </form>

              </div>

              	
                 <div class="col-md-2 col-lg-4 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                   
                <img src="VariousLogo/form.png"
                  class="img-fluid" alt="Sample image" width="480">

              </div>
        


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
		
	


</body>
</html>