﻿<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>داروخانه دکتر آل احمد - صفحه اصلی</title>

    <!-- CSS -->
    <link href="../fonts/farsi.css" rel="stylesheet" type="text/css" />
    <link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="../css/page/pageFeature.css" rel="stylesheet">
    <link href="../css/page/animate.css" rel="stylesheet">
    <link href="../css/bootstrap/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" />
    <link href="../css/shop/shopHomepage.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<!--JavaScript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>
    <script src="../js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
    <script src="../js/memberHandler/logoutM.js" type="text/javascript"></script>
    <!--<script src="js/jquery.js" type="text/javascript"></script>-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <?php
	session_start();
	if(isset($_SESSION['name']) && !empty($_SESSION['name']))
	{
		$user = $_SESSION['name'] . ' ' . $_SESSION['family'] ;
		$status = "خروج";
		$login = 1;
	}
	else
	{
		$user = "حساب شخصی";
		$status = "ورود";
		$login = 0;
	}
	?>
	<script>
		login = <?php echo $login; ?>
	</script>
    <!-- Navigation -->
    <div class="container">
                <img src="../images/logo.png" alt="Nevia Premium Template" width="70" height="78" />
                        <font size="5"><b style="font-family:IranNastaliq">داروخانه دکتر سادات آل احمد</b></font>
				<button type="button" style="float:left" class="btn btn-default btncolor" id="lgname"><?php echo $user; ?><i class="fa fa-user"></i></button>
                <button type="button"  style="float:left" class="btn btn-default btncolor" id="myBtn">
                    خروج<i class="fa fa-lock"></i></button>
                
                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog" >
                   <div class="modal-dialog">
    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" >
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4><span class="glyphicon glyphicon-lock"></span> ورود</h4>
                        </div>
                        <div class="modal-body" style="padding:40px 50px;">
                          <form role="form">
                            <div class="form-group">
                              <label for="usrname"><span class="glyphicon glyphicon-user"></span> نام کاربری</label>
                              <input type="text" class="form-control" id="usrname" placeholder="نام کاربری یا ایمیل خود را وارد کنید">
                            </div>
                            <div class="form-group">
                              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> رمز عبور</label>
                              <input type="text" class="form-control" id="psw" placeholder="رمز عبور را وارد کنید">
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox" value="" checked>مرا به خاطر بسپار</label>
                            </div>
                              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span>ورود</button>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> لغو</button>
                          <p>عضو نیستید؟  <a href="../memberHandler/register.php">ثبت نام</a></p>
                          <p>رمز خود را فراموش کرده اید؟ <a href="#">رمز عبور</a></p>
                        </div>
                      </div>
      
                    </div>
                  </div> 
    </div>

    <nav class=" navbar navbar-inverse navbar-center col-md-12" role="navigation" style="background-color:darkgreen; width:98%; padding-right:1%;" id="navtitr" >
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<a class="navbar-brand navbar-right" href="#">داروخانه دکتر سادات آل احمد</a>-->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right" style="font-size:large; font-family:'B Mitra'">
                    <li class="active">
                        <a href="manageEmployer.php">مدیریت کارمندان<i class="fa fa-home"></i></a>
                    </li>
                    <li>
                        <a href="manageProduct.php">مدیریت کالاها<i class="fa fa-medkit"></i></a>
                    </li>
                    <li>
                        <a href="manageComment.php">مشاهده نظرات<i class="fa fa-commenting"></i></a>
                    </li>
                </ul>
                <!--search mitune inja ham bashe!-->
            </div>
            <!-- /.navbar-collapse -->
          </div>
    </nav>

    <!-- Page Content -->
<div class="row" >
    <div class="col-md-2 hidden-xs hidden-sm" >       
         <div id="Div1" class="affix" style="width: 212px;">
            <div id="Div2">
                <ul class="nav nav-pills nav-stacked">
                   <li class="activ">
                    <a href="#navtitr" style="color:darkgreen; font-weight:bold">افزودن کارمندان</a>
                   </li>
                   <li class="">
                    <a href="#edit" style="color:darkgreen; font-weight:bold">ویرایش اطلاعات کارمندان</a>
                   </li>
                   <li class="">
                    <a href="#report" style="color:darkgreen; font-weight:bold">مشاهده گزارش کارمندان</a>
                   </li>
              </ul>            
            </div>
            <ul class="nav nav-pills nav-stacked">
            <li>
            <a href="#navtitr" class="small" style="color:darkgreen; font-weight:bold">بازگشت به ابتدای صفحه</a>
            </li>
            </ul>        
         </div>
    </div>
    
    <div class="col-md-8 col-sm-8 col-lg-8">
        <div class="panel panel-default" style="background-color:#a7d4a7" id="add">
            <h1 style="text-align:center">افزودن کارمند جدید</h1>
            <div class="panel-body">
                <form role="form">
                    <div class="col-sm-12 col-lg-12 col-md-12 right" style="font-size:large">
                        <div class="form-group col-md-3">
                            <label>نام:</label>
                            <input class="form-control" type="text" name="" value="" />
                        </div>
                        <div class="form-group col-md-3">
                            <label>نام خانوادگی:</label>
                            <input class="form-control" type="text" name="" value="" />
                        </div>
                        <div class="form-group col-md-3">
                            <label> نام پدر:</label>
                            <input class="form-control" type="text" name="" value="" />
                        </div>
                        <div class="form-group col-md-3">
                            <label> شماره شناسنامه:</label>
                            <input class="form-control" type="text" name="" value="" />
                        </div>
                        <div class="form-group col-md-3">
                            <label> تلفن ثابت:</label>
                            <input class="form-control" type="text" name="" value="" />
                        </div>
                        <div class="form-group col-md-3">
                            <label> شماره همراه:</label>
                            <input class="form-control" type="text" name="" value="" />
                        </div>
                        <div class="form-group col-md-3">
                            <label> نام کاربری:</label>
                            <input class="form-control" type="text" name="" value="" />
                        </div>
                        <div class="form-group col-md-3">
                            <label> کلمه عبور اولیه:</label>
                            <input class="form-control" type="text" name="" value="" />
                        </div>
                        <div class="form-group col-md-3">
                            <label>ایمیل:</label>
                            <input class="form-control" type="text" name="" value="" />
                        </div>
                        <div class="form-group col-md-3">
                            <label> تحصیلات:</label>
                            <input class="form-control" type="text" name="" value="" />
                        </div>
                        <div class="form-group col-md-3">
                            <label> آدرس:</label>
                            <input class="form-control" type="text" name="" value="" />
                        </div>
                        <div class="form-group col-md-3">
                            <label> شماره حساب:</label>
                            <input class="form-control" type="text" name="" value="" />
                        </div>
                        <div class="checkbox col-md-4 ">
                            <label style="font-weight:bold">سطح دست رسی:</label>
                            <label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox">دست رسی کامل</label>
                            <label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox">دست رسی قسمت فروش</label>
                            <label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox">دست رسی پرسش و پاسخ</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!--style="padding-top:3%;"-->
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button type="submit" class="btn btn-default left">تایید و افزودن</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="panel panel-default" style="background-color:#a7d4a7" id="edit">
            <h1 style="text-align:center">ویرایش اطلاعات کارمند</h1>
            <div class="panel-body">
                <form role="form">
                    <div class="col-sm-12 col-lg-12 col-md-12 right" style="font-size:large">
                        <div class="form-group col-md-3">
                            <label>نام:</label>
                            <input class="form-control" type="text" name="" value="" />
                        </div>
                        <div class="form-group col-md-3">
                            <label>نام خانوادگی:</label>
                            <input class="form-control" type="text" name="" value="" />
                        </div>
                        <div class="form-group col-md-3">
                            <label> نام پدر:</label>
                            <input class="form-control" type="text" name="" value="" />
                        </div>
                        <div class="form-group col-md-3">
                            <label> شماره شناسنامه:</label>
                            <input class="form-control" type="text" name="" value="" />
                        </div>
                        <div class="form-group col-md-3">
                            <label> تلفن ثابت:</label>
                            <input class="form-control" type="text" name="" value="" />
                        </div>
                        <div class="form-group col-md-3">
                            <label> شماره همراه:</label>
                            <input class="form-control" type="text" name="" value="" />
                        </div>
                        <div class="form-group col-md-3">
                            <label> نام کاربری:</label>
                            <input class="form-control" type="text" name="" value="" />
                        </div>
                        <div class="form-group col-md-3">
                            <label> کلمه عبور اولیه:</label>
                            <input class="form-control" type="text" name="" value="" />
                        </div>
                        <div class="form-group col-md-3">
                            <label>ایمیل:</label>
                            <input class="form-control" type="text" name="" value="" />
                        </div>
                        <div class="form-group col-md-3">
                            <label> تحصیلات:</label>
                            <input class="form-control" type="text" name="" value="" />
                        </div>
                        <div class="form-group col-md-3">
                            <label> آدرس:</label>
                            <input class="form-control" type="text" name="" value="" />
                        </div>
                        <div class="form-group col-md-3">
                            <label> شماره حساب:</label>
                            <input class="form-control" type="text" name="" value="" />
                        </div>
                        <div class="checkbox col-md-4 ">
                            <label style="font-weight:bold">سطح دست رسی:</label>
                            <label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox">دست رسی کامل</label>
                            <label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox">دست رسی قسمت فروش</label>
                            <label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox">دست رسی پرسش و پاسخ</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!--style="padding-top:3%;"-->
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button type="submit" class="btn btn-default left">اصلاح اطلاعات</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="panel panel-default" style="background-color:#a7d4a7" id="report">
            <h1 style="text-align:center">مشاهده گزارش کارمندان</h1>
            <div class="panel-body">
                <form role="form">
                    <div class="container table-responsive col-md-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ردیف</th>
                                    <th>نام</th>
                                    <th>نام خانوادگی</th>
                                    <th>سمت</th>
                                    <th>ساعات کار در ماه اخیر</th>
                                    <th>ساعات مرخصی در ماه اخیر</th>
                                    <th>کیفیت کاری در ماه اخیر</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <th>حسن</th>
                                    <th>محمدی</th>
                                    <th>مسئول فروش</th>
                                    <th style="text-align:center">34</th>
                                    <th style="text-align:center">6</th>
                                    <th style="text-align:center">70%</th>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <th>زهره</th>
                                    <th>صرافی</th>
                                    <th>پزشک</th>
                                    <th style="text-align:center">23</th>
                                    <th style="text-align:center">5</th>
                                    <th style="text-align:center">80</th>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <th>نیوشا</th>
                                    <th>عطار</th>
                                    <th>پشتیبان فنی</th>
                                    <th style="text-align:center">12</th>
                                    <th style="text-align:center">0.5</th>
                                    <th style="text-align:center">90</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
    <!--<div class="col-md-1" style=" float:left" ></div>-->
    
    <!-- jQuery -->
    

    <!-- Bootstrap Core JavaScript -->
    
    <!-- log out from management -->
    <script type="text/javascript">
        function myclose() {
            var retVal = confirm("آیا می خواهید از پنل مدیریت خارج شوید؟")
            if (retVal == true) {
                window.close(this);
            }
        }
    </script>
</body>

</html>
