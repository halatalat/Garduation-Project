<?php session_start(); 
include_once('../includes/config.php');
// Code for login 
if(isset($_POST['login']))
{
$adminusername=$_POST['username'];
$pass=$_POST['password'];
$ret=mysqli_query($con,"SELECT id,username FROM admin WHERE username='$adminusername' and password='$pass'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="dashboard.php";
$_SESSION['login']=$_POST['username'];
$_SESSION['adminid']=$num['id'];
echo "<script>window.location.href='".$extra."'</script>";
exit();
}
else
{
echo "<script>alert('Invalid username or password');</script>";
$extra="index.php";
echo "<script>window.location.href='".$extra."'</script>";
exit();
}
}
?>




<!DOCTYPE html>
<html style="font-size: 16px;" lang="ar"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Login Form">
    <meta name="description" content="">
    <title>Login</title>
    <link rel="stylesheet" href="../css/nicepage.css" media="screen">
<link rel="stylesheet" href="../css/Login.css" media="screen">
    <script class="u-script" type="text/javascript" src="../js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.6.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"sameAs": []
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Login">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body class="u-body u-xl-mode" data-lang="en"> 
    <section class="u-align-center u-clearfix u-image u-section-1" id="sec-babb" data-image-width="1669" data-image-height="1080">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-custom-font u-font-montserrat u-text u-text-default u-text-palette-3-base u-text-1">تسجيل الدخول</h2>
        <div class="u-align-center u-border-11 u-border-no-left u-border-no-right u-border-no-top u-border-palette-3-base u-container-style u-custom-border u-expanded-width-xs u-grey-15 u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-valign-top u-container-layout-1">
            <div class="u-form u-login-control u-form-1">
    
              <form method="post" class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 0px;">
                <div class="u-form-group u-form-name u-label-top">
                  <label style="float: right;" for="username-a30d" class="u-label u-label-1">اسم المستخدم</label>
                  <input style="text-align: center;" type="text" placeholder="أدخل الأسم" id="username-a30d"  name="username" class="u-border-8 u-border-white u-input u-input-rectangle u-radius-50 u-input-1" required="">
                </div>
                <div class="u-form-group u-form-password u-label-top">
                  <label style="float: right;" for="password-a30d" class="u-label u-label-2">الرقم السري</label>
                  <input style="text-align: center;" type="password" placeholder="أدخل الرقم السري" id="password-a30d" name="password" class="u-border-8 u-border-white u-input u-input-rectangle u-radius-50 u-input-2" required="">
                </div>
                <div class="u-form-checkbox u-form-group u-label-top">
                  <input type="checkbox" id="checkbox-a30d" name="remember" value="On" class="u-field-input">
                  <label for="checkbox-a30d" class="u-block-cee6-14 u-field-label" style="font-size: 1rem; letter-spacing: 0px; text-transform: none">تذكرني لاحقا</label>
                </div>
                <div class="u-align-left u-form-group u-form-submit u-label-top">
                  <button name="login" type="submit"  class="u-active-white u-border-none btn btn-round btn-submit u-button-style u-hover-palette-3-light-1 u-palette-3-base u-radius-50 u-text-active-palette-2-base u-text-hover-palette-2-base u-btn-1">دخول</button>
                
                </div>
                <input type="hidden" value="" name="recaptchaResponse">
              </form>
            </div>
            <div class="u-align-center-xs u-container-style u-expanded-width u-group u-white u-group-2">
              <div class="u-container-layout u-container-layout-2">
                <a href="password-recovery.php" class="u-border-1 u-border-active-palette-2-light-2 u-border-hover-palette-2-light-2 u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-login-control u-login-create-account u-none u-text-active-palette-2-light-2 u-text-hover-palette-2-light-2 u-text-palette-2-base u-btn-2" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">هل نسيت كلمة السر؟</a>
                <a href="signup.php" class="u-border-1 u-border-active-palette-2-light-2 u-border-hover-palette-2-light-2 u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-login-control u-login-create-account u-none u-text-active-palette-2-light-2 u-text-hover-palette-2-light-2 u-text-palette-2-base u-btn-3">إنشاء حساب جديد</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
    
  
</body></html>









<!-- 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Login | Registration and Login System</title>
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">

<div class="card-header">
<h2 align="center">Registration and Login System</h2>
<hr />
    <h3 class="text-center font-weight-light my-4">Admin Login</h3></div>
                                    <div class="card-body">
                                        
                                        <form method="post">
                                            
<div class="form-floating mb-3">
<input class="form-control" name="username" type="text" placeholder="Username"  required/>
<label for="inputEmail">Username</label>
</div>
                                            

<div class="form-floating mb-3">
<input class="form-control" name="password" type="password" placeholder="Password" required />
<label for="inputPassword">Password</label>
</div>


<div class="d-flex align-items-center justify-content-between mt-4 mb-0">
<a class="small" href="password-recovery.php">Forgot Password?</a>
<button class="btn btn-primary" name="login" type="submit">Login</button>
</div>
</form>
</div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="../index.php">Back to Home Page</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
<?php include('../includes/footer.php');?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
    </body>
</html> -->



