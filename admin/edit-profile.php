<?php session_start();
include_once('../includes/config.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{
//Code for Updation 
if(isset($_POST['update']))
{
    $username=$_POST['username'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $gender=$_POST['gender'];
    $userid=$_GET['uid'];
    $msg=mysqli_query($con,"update users set username='$username',address='$address',city='$city',gender='$gender' where id='$userid'");

if($msg)
{
    echo "<script>alert('Profile updated successfully');</script>";
       echo "<script type='text/javascript'> document.location = 'manage-users.php'; </script>";
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
        <title>Edit Profile | Registration and Login System</title>
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
                        
<?php 
$userid=$_GET['uid'];
$query=mysqli_query($con,"select * from users where id='$userid'");
while($result=mysqli_fetch_array($query))
{?>
                        <h1 class="mt-4" style="text-align:center ;"><?php echo $result['fullName'];?></h1>
                        <div class="card mb-4">
                     <form method="post">
                            <div class="card-body">
                                <table class="table table-bordered" dir="rtl">
                                   <tr>
                                    <th>الاسم</th>
                                       <td><input class="form-control" id="username" name="username" type="text" value="<?php echo $result['fullName'];?>" required /></td>
                                   </tr>
                                   <tr>
                                       <th>العنوان</th>
                                       <td><input class="form-control" id="address" name="address" type="text" value="<?php echo $result['address'];?>"  required /></td>
                                   </tr>
                                         <tr>
                                       <th>المدينة</th>
                                       <td colspan="3"><input class="form-control" id="city" name="city" type="text" value="<?php echo $result['city'];?>"  required /></td>
                                   </tr>
                                   <tr>
                                       <th>النوع</th>
                                       <td colspan="3"> <select style="text-align: center;" id="gender" name="gender" >
                                       <!-- <option selected="true" data-calc="">value="<?php echo $result['gender'];?>"</option> -->
                                            <option value="ذكر" data-calc="">ذكر</option>
                                            <option value="أنثي" data-calc="">أنثي</option>
                                        </select></td>
                                   </tr>
                               
                                   <tr>
                                       <th>البريد الالكتروني</th>
                                       <td colspan="3"><?php echo $result['email'];?></td>
                                   </tr>
                                        <tr>
                                       <th>تاريخ التسجيل</th>
                                       <td colspan="3"><?php echo $result['regDate'];?></td>
                                   </tr>
                                   <tr>
                                       <td colspan="4" style="text-align:center ;"><button type="submit" class="btn btn-primary btn-block" name="update">تحديث</button></td>

                                   </tr>
                                    </tbody>
                                </table>
                            </div>
                            </form>
                        </div>
<?php } ?>

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
<?php } ?>
