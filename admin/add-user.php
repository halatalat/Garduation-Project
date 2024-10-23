<?php session_start();
require_once('../includes/config.php');

//Code for Registration 
if(isset($_POST['submit']))
{
  
    $username=$_POST['username'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $password=$_POST['password'];

$sql=mysqli_query($con,"select id from users where email='$email'");
$row=mysqli_num_rows($sql);
if($row>0)
{
    echo "<script>alert('Email id already exist with another account. Please try with other email id');</script>";
} else{
    $msg=mysqli_query($con,"insert into users(fullName,address,city,gender,email,password) values('$username','$address',$city,$gender,'$email','$password')");

if($msg)
{
    echo "<script>alert('addition successfully');</script>";
    echo "<script type='text/javascript'> document.location = 'manage-users.php'; </script>";
}
}
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Between Dates report date selection | Registration and Login System</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>


    </head>
    <body class="sb-nav-fixed">
      <?php include_once('includes/navbar.php');?>
        <div id="layoutSidenav">
          <?php include_once('includes/sidebar.php');?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        

                        <h1 class="mt-4" style="text-align:center ;">اضافة مستخدم</h1>
                        <div class="card mb-4">
                     <form method="post" name="bwdatesreport" action="bwdates-report-result.php" >
                            <div class="card-body">
                                <table class="table table-bordered " dir="rtl">
                                   <!-- <tr>
                                    <th>From Date</th>
                                       <td><input class="form-control" id="fromdate" name="fromdate" type="date" value="" required /></td>
                                   </tr>
                                   <tr>
                                       <th>To Date</th>
                                       <td><input class="form-control" id="todate" name="todate" type="date" value=""  required /></td>
                                   </tr>
                                      
                  
                               -->


                                   <th> الاسم</th>
                                       <td><input class="form-control" id="username" name="username" type="text" value="" required /></td>
                                   </tr>
                                   <tr>
                                       <th>العنوان </th>
                                       <td><input class="form-control" id="address" name="address" type="text" value=""  required /></td>
                                   </tr>
                                   <tr>
                                       <th>المدينة </th>
                                       <td><input class="form-control" id="city" name="city" type="text" value=""  required /></td>
                                   </tr>
                                   <tr>
                                       <th>النوع </th>
                                       <td>
                                       <select style="text-align: center;" id="gender" name="gender" >
                                            <option value="ذكر" data-calc="">ذكر</option>
                                            <option value="أنثي" data-calc="">أنثي</option>
                                        </select>                                    
                                    </td>
                                   </tr>
                                   <tr>
                                       <th>البريد الالكتروني </th>
                                       <td><input class="form-control" id="email" name="email" type="email" value=""  required /></td>

                                   </tr>
                                   <tr>
                                       <th>كلمة السر </th>
                                       <td><input class="form-control" id="password" name="password" type="password" value=""  required /></td>
                                   </tr>

                                       <tr>
                                    
                                       <td colspan="4" style="text-align:center ;"><button type="submit" class="btn btn-primary btn-block" name="submit">حفظ</button></td>

                                   </tr> 
                                    </tbody>
                                </table>
                            </div>
                            </form>
                        </div>


                    </div>
                </main>
          <?php include('../includes/footer.php');?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>
</html>

<?php  ?>
