
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
    <body><!--
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
              <input type="password" data-toggle="tooltip" data-placement="right" title="repassword" placeholder="repeat password"  class="regRepassword" />
              <input type="text" data-toggle="tooltip" data-placement="right" title="email" name="email" placeholder="email address" class="regEmail" />
              <div style="text-align: left; color: white;">
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
              <button class="btn btn-danger btn-sm backBtn" onclick="javascript:refresh()">Back</button>
            </form>

            <div class ="login">

              <p class="form-title">
                Sign In</p>
                <form class="login" method="post">
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

              </form>
            </div>
          </div>
        </div>
      </div>
    </div> -->


    <div class="nav">
      <div class="container">
        <ul class="pull-left">
          <li><a href="#GrouPic" id="home">GrouPic</a></li>
          <li><a href="#aboutUs" id="about">About Us</a></li>
        </ul>
        <ul class="pull-right">
          <li><a href="#SignUp" id="SignUp">Sign Up</a></li>
          <li><a href="#SignIn" id="SignIn">Sign In</a></li>
          <li><a href="#ContactUs" id="contact">Contact Us</a></li>
        </ul>
      </div>
    </div>

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <!-- landing -->
        <div class="item active">
          <div class="jumbotron landing">
            <div class="container">
              <h1>GrouPic</h1>
              <p>A picture is worth a thousand words...</p>
            </div>
          </div>
        </div>
        <!-- SignUp -->
        <div class="item SignUp">
          <div class="jumbotron">
            <div class="container">
              <form class="form-horizontal register">
                <div class="form-group">
                  <label for="firstname" class="col-md-5 control-label">Firstname: </label>
                  <div class="col-md-4">
                    <input class="form-control regFirstname" type="text" data-toggle="tooltip" data-placement="right" title="firstname" name="firstname" placeholder="firstname">
                  </div>
                </div>
                <div class="form-group">
                  <label for="lastname" class="col-md-5 control-label">Lastname: </label>
                  <div class="col-md-4">
                    <input class="form-control regLastname" type="text" data-toggle="tooltip" data-placement="right" title="lastname" name="lastname" placeholder="lastname">
                  </div>
                </div>
                <div class="form-group">
                  <label for="username" class="col-md-5 control-label">Username: </label>
                  <div class="col-md-4">
                    <input class="form-control regUsername" type="text" data-toggle="tooltip" data-placement="right" title="username" name="username" placeholder="username">
                  </div>
                </div>
                <div class="form-group">
                  <label for="password" class="col-md-5 control-label">Password: </label>
                  <div class="col-md-4">
                    <input class="form-control regPassword" type="password" data-toggle="tooltip" data-placement="right" title="password" name="password" placeholder="password">
                  </div>
                </div>
                <div class="form-group">
                  <label for="repassword" class="col-md-5 control-label">Repeat Password: </label>
                  <div class="col-md-4">
                    <input class="form-control regRepassword" type="password" data-toggle="tooltip" data-placement="right" title="repassword" name="repassword" placeholder="repeat password">
                  </div>
                </div>
                <div class="form-group">
                  <label for="email" class="col-md-5 control-label">Email Address: </label>
                  <div class="col-md-4">
                    <input class="form-control regEmail" type="email" data-toggle="tooltip" data-placement="right" title="email" name="email" placeholder="Email Address">
                  </div>
                </div>
                <div class="form-group">
                  <label for="gender" class="col-md-5 control-label">Gender: </label>
                  <div class="col-md-4">
                    <label class="radio-inline">
                      <input type="radio" name="sex" value="male" checked class="male" /> Male
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="sex" value="female" class="female" /> Female
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-offset-6">
                    <input type="submit" value="Sign Up" class="btn btn-success btn-sm regBtn" />
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- SignIn -->
        <div class="item SignIn">
          <div class="jumbotron">
            <div class="container">
              <form class="form-horizontal">
                <div class="form-group">
                  <label for="username" class="col-md-5 control-label">Username: </label>
                  <div class="col-md-4">
                    <input class="form-control username" type="text" data-toggle="tooltip" data-placement="right" title="username" name="username" placeholder="Username"/>
                  </div>
                </div>
                <div class="form-group">
                  <label for="password" class="col-md-5 control-label">Password: </label>
                  <div class="col-md-4">
                    <input class="form-control password" type="text" data-toggle="tooltip" data-placement="right" title="password" name="password" placeholder="Password"/>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-offset-6">
                    <input type="submit" value="Sign In" class="btn btn-success btn-sm signInBtn" />
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="AboutUs">
      <div class="container">
        <h2>About Us</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae erat nulla. Proin viverra dui ut ligula varius, at auctor nibh porttitor.</p>
        <div class="row">
          <div class="col-md-4">
            <div class="thumbnail">
              <img src="http://dotcommate.com/wp-content/uploads/2015/05/websites-for-photographers.jpg">
            </div>
            <div class="thumbnail">
              <img src="http://netnz.org/wp-content/uploads/2014/12/Photography-Camera-HD-Wallpaper1.jpg">
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <img src="http://fliptroniks.com/wp-content/uploads/2015/07/photogtraphy.jpg">
            </div>
            <div class="thumbnail">
              <img src="http://7-themes.com/data_images/out/11/6805459-photography-wallpaper.jpg">
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <img src="http://www.ehiyo.com/wp-content/uploads/2015/06/photography-awesome-full-hd-wallpaper-2smlcnp453.jpg">
            </div>
            <div class="thumbnail">
              <img src="http://7-themes.com/data_images/out/31/6876390-photography-wallpaper.jpg">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="events">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3>Public Events</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae erat nulla. Proin viverra dui ut ligula varius, at auctor nibh porttitor.</p>
          </div>
          <div class="col-md-6">
            <h3>Private Events</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae erat nulla. Proin viverra dui ut ligula varius, at auctor nibh porttitor.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="ContactUs">
      <div class="container">
        <div class="row">
          <div class="col-md-7 form">
            <div class="well">
              <form class="form">
                <legend class="text-center header">Contact Us</legend>
                <div class="form-group">
                  <label for="firstname">Firstname:</label>
                  <input class="form-control" type="text" name="firstname" id="firstname" placeholder="Maor">
                </div>
                <div class="form-group">
                  <label for="lastname">Lastname:</label>
                  <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Kern">
                </div>
                <div class="form-group">
                  <label for="email">Email Address:</label>
                  <input class="form-control" type="email" name="email" id="email" placeholder="Kern@FuckMaor.com">
                </div>
                <div class="form-group">
                  <label for="message">Message:</label>
                  <textarea class="form-control" name="message" id="message" rows="3" placeholder="Enter your massage for us here. We will get back to you within 2 business days."></textarea>
                </div>
                <div class="text-center">
                  <button class="btn btn-primary btn-lg">Submit</button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-4 col-md-offset-1 info">
            <div class="panel panel-default">
              <div class="text-center header">Information</div>
              <div class="panel-body text-center">
                <h4>Adress</h4>
                <div>
                  5047 schneler A10
                  <br>
                  Israel, Nazareth
                  <br>
                  #(972) 558 832 286
                  <br>
                  Contact@GrouPic.photos
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer">
      <div class="container">
        Copyright GrouPic &copy; 2015
      </div>
    </div>

    <!-- script references -->
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script> -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.11.2.min.js"></script>
    <script src="<?php echo base_url(); ?>js/homeForms.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
  </html>