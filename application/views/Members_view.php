
<html lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>Bootstrap Login Form</title>
  <meta name="generator" content="Bootply" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
      <link href="<?php echo base_url(); ?>css/styles.css" rel="stylesheet">
    </head>
    <body>
      <!--login modal-->




      <div class="pr-wrap">
        <div class="pass-reset">

          <label>
            Enter the email you signed up with</label>
            <input type="email" placeholder="Email" />
            <input type="submit" value="Submit" class="pass-reset-submit btn btn-success btn-sm" />
          </div>
        </div>


        <div class="wrap">


          <p class="form-title logo">

           <img src="<?php echo base_url(); ?>img/white.png" />


           <form class="register" method="POST">
            <p class="form-title">Sign Up</p>
              <input type="text" data-toggle="tooltip" data-placement="right" title="firstname" name="firstname" placeholder="firstname" class="regFirstname" />
              <input type="text" data-toggle="tooltip" data-placement="right" title="lastname" name="lastname" placeholder="lastname" class="regLastname" />
              <input type="text" data-toggle="tooltip" data-placement="right" title="username" name="username" placeholder="username" class="regUsername" />
              <input type="password" data-toggle="tooltip" data-placement="right" title="password" name="password" placeholder="password" class="regPassword" />
              <input type="password" data-toggle="tooltip" data-placement="right" title="repasswprd" placeholder="repeat password"  class="regRepassword" />
              <input type="text" data-toggle="tooltip" data-placement="right" title="email" name="email" placeholder="email address" class="regEmail" />
              <div style="text-align: left;">
              Gender: <input type="radio" name="sex" value="male" style="margin-left: 15px;" checked class="male" /> Male
              <input type="radio" name="sex" value="female" style="margin-left: 15px;" class="female" /> Female
              </div>
              <div class="checkbox">
                <label>

                  <div style="color: white;" class="checkbox">
                    <input class="terms" type="checkbox" data-toggle="tooltip" data-placement="left" title="Just check the box biatch!" />

                    I agree to the "terms of use"

                  </div>
                </label>
              </div>
              <input type="submit" value="Sign Up" class="btn btn-success btn-sm regBtn" />
            </form>

            <div class ="login">

              <p class="form-title">
                Sign In</p>
                <form class="login" method="post" action="welcomeLads">
                  <input type="text" data-toggle="tooltip" data-placement="right" title="username" name="username" placeholder="Username" class="username" />
                  <input type="password" data-toggle="tooltip" data-placement="right" title="password" name="password" placeholder="Password" class="password" />                  <div class="remember-forgot">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" />
                            Remember Me
                          </label>
                        </div>
                      </div>
                      <div class="col-md-6 forgot-pass-content">
                        <a href="javascription:void(0)" class="forgot-pass">Forgot Password</a>
                      </div>

                    </div>
                  </div>
                  <input type="submit" value="Sign In" class="btn btn-success btn-sm signInBtn" />
                  <h5 style="color: white;">OR</h5>

                  <span href="javascription:void(0)" class="btn btn-info registerBtn">Sign Up</span>
                  <!--<a href="javascription:void(0)" class="btn btn-info registerBtn">Sign Up</a>
                -->

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- script references -->
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script> -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.11.2.js"></script>
    <script src="<?php echo base_url(); ?>js/homeForms.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
  </html>