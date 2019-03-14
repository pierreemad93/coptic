<?php
      ob_start();
       session_start();
       include  "connect.php";
       include  "includes/header.inc" ;
       if ($_SERVER['REQUEST_METHOD']  == 'POST'){
           $username=$_POST['adminName'];
           $password=$_POST['adminPassword'];
           $hashedPass =sha1($password);

           $stmt=$con->prepare("SELECT username , password FROM users WHERE username=? AND password=?");
           $stmt->execute(array($username , $hashedPass));
           $count =$stmt->rowCount();
           if ($count > 0 ){
               //$_SESSION['adminId']=$row['id'];
               $_SESSION['adminUsername']=$username;
               header('Location:dashboard.php');
               exit();
           }
       }
?>

<div id="" role="main">
    <!-- MAIN CONTENT -->
    <div id="content" class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4 col-lg-offset-4 col-md-offset-3 ">
                    <div class="well no-padding">
                        <form action="<?php  echo $_SERVER['PHP_SELF']?>" method="post" id="login-form" class="smart-form client-form">
                            <header>
                            تسجيل الدخول
                            </header>
                            <fieldset>
                                <section>
                                    <label class="label" class="pull-right">اسم المستخدم</label>
                                    <label class="input"> <i class="icon-append fa fa-user"></i>
                                        <input type="text" name="adminName" placeholder="برجاء ادخال اسم المستخدم ">
                                    </label>
                                </section>
                                <section>
                                    <label class="label">كلمه السر </label>
                                    <label class="input"> <i class="icon-append fa fa-lock"></i>
                                    <input type="password" name="adminPassword" placeholder="تسجيل كلمة المرور">
                                    <b class="tooltip tooltip-top-right"><i class="fa fa-lock txt-color-teal"></i> Enter your password</b> </label>
                                    <div class="note">
                                        <a href="forgotpassword.html">نسيت كلمه السر</a>
                                    </div>
                                </section>
                            </fieldset>
                            <footer>
                                <button type="submit" class="btn btn-primary">
                                تسجيل الدخول
                                </button>
                            </footer>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>




<?php  include  "includes/footer.inc" ;?>
