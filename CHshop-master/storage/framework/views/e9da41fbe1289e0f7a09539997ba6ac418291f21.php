          

<!DOCTYPE html>                 
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Trang chủ | LAPSTORE</title>
    <link rel="icon" href="<?php echo e(url ('user/images/laptop.png')); ?>">
    <link href="<?php echo e(url ('user/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url ('user/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url ('user/css/prettyPhoto.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url ('user/css/price-range.css')); ?>" rel="stylesheet">
      <link href="<?php echo e(url ('user/css/font-awesome.min.css')); ?>" rel="stylesheet">
  	<link href="<?php echo e(url ('user/css/main.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url ('user/css/responsive.css')); ?>" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo e(url ('user/images/ico/apple-touch-icon-144-precomposed.png')); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo e(url ('user/images/ico/apple-touch-icon-114-precomposed.png')); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo e(url ('user/images/ico/apple-touch-icon-72-precomposed.png')); ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo e(url ('user/images/ico/apple-touch-icon-57-precomposed.png')); ?>">
</head><!--/head-->

<body>
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +0965600364</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> phamducpho14t1@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div><!--/header_top-->
        
       <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                               <li> <a href="<?php echo route('CHshop'); ?>"><img src="<?php echo e(url ('user/images/laptop.png')); ?>" style="width: 20px; height: 20px;"></a></li>
                                <li ><a href="<?php echo route('CHshop'); ?>">Lap Store</a></li> 

                                   
                                <li class='dropdown'>
                                                    <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
                                                       Sản phẩm
                                                    <ul class='dropdown-menu'>                     

                                                    <li style="padding-left: 17px"><a href="<?php echo route('motrieu'); ?>">Từ 1->2 triệu</a></li><br>
                                                      <li><a href="<?php echo route('haitrieu'); ?>">Từ 2->3 triệu</a></li><br>
                                                      <li><a href="<?php echo route('batrieu'); ?>">Trên 3 triệu</a></li>
                                                    </ul>
                                                  </li>
                                <li><a href="<?php echo route('lienhe'); ?>">Liên hệ</a></li>
                               
                                <div class="col-sm-3">
                                     <div class="search_box pull-right-1">
                                 <form method="post" action="<?php echo route('timkiem'); ?>">
                                   <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                                   <input type="text" name="timkiem" placeholder="Tìm kiếm"/>

                                </form>
                            </div> 
                            </div>                     
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="shop-menu pull-right">

                            <ul class="nav navbar-nav">


                                
                                
                                <li><a href="<?php echo route('giohang'); ?>"><i class="fa fa-shopping-cart"></i>(<?php
                                   $dem= Cart::content()->count();
                                   echo $dem;
                                    ?>)Món trong giỏ</a></li>
                                            
                            <?php 
                                  if(Auth::check()){
                                    $users=Auth::user();

                            ?>

                                <li class='dropdown'>
                                                    <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
                                                    <i class='fa fa-user'></i> <?php echo e($users->HoTen); ?> <span class='caret'></span></a>
                                                    <ul class='dropdown-menu'>
                                                      <li><a href="<?php echo route('thongtin'); ?>">Cập nhật tài khoản</a></li><br>
                                                      <li><a href="<?php echo route('donhangcu'); ?>">Thông tin đơn hàng</a></li><br>
                                                      <li><a href="<?php echo e(asset('thoat')); ?>">Đăng xuất</a></li>
                                                    </ul>
                                                  </li>
                               <?php
                           }
                            else{

                               ?>


                                <li><a href="<?php echo route('dangnhap1'); ?>"><i  class="fa fa-lock "></i>Đăng nhập</a></li>

                                 <li><a href="<?php echo route('dangki'); ?>"><i  class="fa fa-user" ></i>Đăng kí</a></li><?php

                                 }
                                 ?>
                                 
                          


                                
                                
                 
                                
                                
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->
      <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                    </div>
                   
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->
    
    <div class="header-bottom"><!--header-bottom-->
		
		</div><!--/header-bottom-->
	</header><!--/header-->
	 
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	
    		<div class="row">  	
	    		<div class="col-sm-12">
                                        <div class="col-sm-4 col-sm-offset-3">
                
                    <div class="signup-form"><!--sign up form-->
                        <h2>Đăng Nhập!</h2>
                        <form action="" method ="post">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                                    <?php if(count($errors) >0): ?>
                                       <div class="alert alert-danger">
                                          <ul>
                                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo $error; ?></li>
                                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                          </ul>
                                          </div>
                                     <?php endif; ?>
                            <input type="text" placeholder="Tài Khoản" name="TaiKhoan"/>
                            <input type="password" placeholder="Mật Khẩu" name="password"/>
                            <button type="submit" class="btn btn-default">Đăng Nhậ̣p</button>
                        </form>
                    </div><!--/sign up form-->
                </div>
                                    
                 </div>
	    				
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
  
   
  
    <script src="<?php echo e(url ('user/js/jquery.js')); ?>"></script>
    <script src="<?php echo e(url ('user/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(url ('user/js/jquery.scrollUp.min.js')); ?>"></script>
    <script src="<?php echo e(url ('user/js/price-range.js')); ?>"></script>
    <script src="<?php echo e(url ('user/js/jquery.prettyPhoto.js')); ?>"></script>
    <script src="<?php echo e(url ('user/js/main.js')); ?>"></script>
</body>
</html>
