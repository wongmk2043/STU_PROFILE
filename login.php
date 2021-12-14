<?php
  $title = "SMCESPS::STUDENT - Login";
  $class_input = "form-control border-secondary rounded-3";
  $org = "SMCESPS";
  $org_sub = "Student";
?><!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/448ac64101.js" crossorigin="anonymous"></script>
    <title><?php echo $title?></title>
    <style>
      body {
        /*background-color: #f8f7f2;*/
        background-color: #f5f5f5;
      }

      .container {
        color :#1f2c33;

      }
      .card {
        background-color: #bac0c3;
      }

      .bg_light {
          background-color: #F8F7F2;
      }

      * {
        scrollbar-width: thin;
        scrollbar-color:#364fc7 #dbe4ff;
      }

      /* Works on Chrome, Edge, and Safari */
      *::-webkit-scrollbar {
        width: 12px;
      }

      *::-webkit-scrollbar-track {
        background: #dbe4ff;
      }

      *::-webkit-scrollbar-thumb {
        background-color:#364fc7;
        border-radius: 20px;
        border: 3px solid #dbe4ff;
      } 

      #forgot_passwd_link {
        text-decoration:none; 
        color: #1A4876;
        text-shadow: 1px 1px 5px #e9ecef;
      }

      #forgot_passwd_link:hover {
        color: #e03131;
      }
    </style>
  </head>
  <body>
  <div class="container">
    <div class="row  align-items-center" style="min-height: 100vh">
      <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto" style="margin-top: -45px">
        <div class="text-center">
          <h1 style="text-shadow: 1px 1px 3px #e0e9ed;"><span style="color:#3F7DAF; font-weight:bold"><?php echo $org ?></span> <span style="color:#C00">::</span> <span style="color:#4B4B4B"><?php echo $org_sub ?></span></h1>
        </div>
        <div class="card border-secondary shadow rounded-3">
          <div class="card-body p-4  p-sm-5">
            <h3 class="card-title text-center mb-4 fw-light" style="text-shadow: 1px 1px 5px #e9ecef;">Sign In</h3>
            <div id="msg_login"></div>
            <form>
              <div class="form-floating mb-3">
                <input type="text" class="<?php echo $class_input;?>" id="stu_id" placeholder="e.g. s1234567">
                <label for="stu_id"><i class="fas fa-user"></i>&nbsp;&nbsp;Student ID</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="<?php echo $class_input;?>" id="stu_passwd" placeholder="Password">
                <label for="stu_passwd"><i class="fas fa-key"></i>&nbsp;&nbsp;Password</label>
              </div>

              <div class="row align-items-center">
                <div class="col-7 text-start">
                  <a id="forgot_passwd_link" href="#" onclick="$('#div_forgot_passwd').fadeToggle()"><i class="far fa-question-circle"></i> Forgot password?</a>
                </div>
                <div class="col-5 text-end">
                  <button class="btn btn-primary fw-bol border border-primary  rounded-3">Sign
                    in</button>
                </div>
                
              </div>  
              <hr class="my-4">
              <div class="d-grid mb-2" >
                <div id="div_forgot_passwd" class="card bg_light rounded-3 border border-primary"  style="display:none">
                  <div class="card-body">
                    <i class="fas fa-info-circle"></i> <strong>To reset your password, enter the student ID. (e.g. s1234567)</strong>
                    <div id="msg_forgot"></div>
                    <div class="form-floating mb-3 mt-3">
                      <input type="text" class="<?php echo $class_input;?>" id="forgot_stu_id" placeholder="Password">
                      <label for="forgot_stu_id">Student ID</label>
                    </div>
                  
                    <div class="row align-items-center">
                     
                      <div class="col text-end">
                        <button class="btn btn btn-outline-secondary rounded-3 "  onclick="$('#div_forgot_passwd').fadeToggle()">Cancel</button>
                        <button class="btn btn-primary fw-bol border border-primary rounded-3" >Submit</button>
                      </div>
                      
                    </div> 
                  </div>
                </div>
                
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>    
  </body>
</html>
