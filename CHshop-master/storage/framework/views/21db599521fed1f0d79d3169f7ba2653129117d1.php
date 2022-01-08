          

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
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="https://www.facebook.com/NguHoHung"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
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
    
    
    
    <section>
      

  <section id="cart_items">
    <form method = "post" action="<?php echo e(route('tinhtien')); ?>">

                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                <fieldset>

    <div class="container">
      <div class="breadcrumbs">
        <ol class="breadcrumb">
          <li><a href="<?php echo e(route('CHshop')); ?>">Shop</a></li>
          <li class="active">Giỏ hàng</li>
        </ol>
      </div>
      <div class="table-responsive cart_info">
        <table class="table table-condensed">
          <thead>
            <tr class="cart_menu">
              <td class="image">Hình ảnh</td>
              <td class="description">Tên sản phẩm</td>
              <td class="price">Số lưọng</td>
              <td class="quantity">Đơn gía</td>
              <td class="total">Tổng</td>
              <td class="total">Thao tác</td>

              <td></td>
            </tr>
          </thead>
          <tbody>
                      
                      <form method="post">
                       <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                            <?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                      <tr>
                    <td class='cart_product'>
                      <img src="<?php echo e(asset('admin/img/'.$item->options->img)); ?>" width="50px" height="50px">
                    </td>
                    <td class='cart_description'>
                      <h4><a href=''></a></h4>
                      <p><?php echo e($item->name); ?></p>

                    </td>
                  
                    <td class='cart_quantity'>
                     <!-- <input  class="qty" style="width: 100px;"  type="text" size="1" value="<?php echo $item->qty; ?>" name=""> -->
                     <input class=' qty cart_quantity_input' type='number' min ="1" max='<?php echo $item->options->slc; ?>' name='' value='<?php echo $item->qty; ?>' autocomplete='off' size='2'>
                    </td>
                    <td class='cart_total'>
                      <p class='cart_total_price'><?php echo e(number_format($item->price,0,",",".")); ?></p>
                    </td>
                     <td class='cart_total'>
                      <p class='cart_total_price'><?php echo e(number_format($item->price*$item->qty,0,",",".")); ?></p>
                    </td>

                     <td> <a href=" <?php echo URL::route('xoasanpham',$item->rowId); ?>" class="moa"><i class="fa fa-trash-o" aria-hidden="true" ></i></a></td>
                     <td> <a  class="updatecart moa" id="<?php echo $item->rowId; ?>"  href=""><i class="fa fa-refresh" aria-hidden="true"  ></i></a></td>
                      <input type="hidden" name="maosp" value="<?php echo e($item->id); ?>">
                  </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
                    
            
          
            
          </tbody>
        </table>
      </div>

    </div>

  </section> <!--/#cart_items-->

  <section id="do_action">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h3><p>Thông tin khách hàng</p></h3>
          <div class="total_area">
              
           <?php
                   if(Auth::check()){
                  $ten=Auth::user();

                ?>             
            <div class="signup-form col-sm-6" style='margin-top: 10px;'>  
          
                <input  class="form-control" style="margin-bottom: 8px;"  type="text" name='ten' placeholder="Họ Và Tên"  value="
                  <?php echo e($ten->HoTen); ?>" />
                <input class="form-control" style="margin-bottom: 8px;" type="email" name='email' placeholder="Địa chỉ Email"  value="<?php echo e($ten->email); ?>" />
                <input  class="form-control" style="margin-bottom: 8px;" type="text" name='sdt' placeholder="Số điện thoại" value="<?php echo e($ten->SDT); ?>"  />
                <input  class="form-control" style="margin-bottom: 8px;"  type="text" name='diachi' placeholder="Địa chỉ giao hàng" value="<?php echo e($ten->DiaChi); ?>"  />         
            </div><!--/sign up form-->
             <?php }
                else{
             ?>
            <div class="signup-form col-sm-6" style='margin-top: 10px;'>  
          
                <input  class="form-control" style="margin-bottom: 8px;"  type="text" name='ten' placeholder="Họ Và Tên" />
                <input class="form-control" style="margin-bottom: 8px;" type="email" name='email' placeholder="Địa chỉ Email"  />
                <input  class="form-control" style="margin-bottom: 8px;" type="text" name='sdt' placeholder="Số điện thoại"  />
                <input  class="form-control" style="margin-bottom: 8px;"  type="text" name='diachi' placeholder="Địa chỉ giao hàng"  />            
            </div><!--/sign up form-->
            <?php }?>  
            <div class="col-sm-6">
              <ul>
               
                <li>Thuế GTGT <span>12,1%</span></li>
                <li>Phí Vận chuyển <span>Free</span></li>
                <li>Tống tiền:<span><?php echo e($tongtien); ?></span></li>
        
              </ul>
              
            </div>
            <div align="right">
              <button type="submit" name="checkout" class="btn btn-default check_out" >Mua</button>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section><!--/#do_action-->
</fieldset>
    
  </form>
	

	<footer id="footer"><!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="companyinfo">
                            <h2><span>c</span>HShop</h2>
                            <p>Nơi đáng tin cậy để mua sản phẩm chính hãng với chất lưọng tốt nhất </p>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="address">
                            
                            <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-widget">
         
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
                    <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
                </div>
            </div>
        </div>
        
    </footer><!--/Footer-->
	
	


    <script src="<?php echo e(url ('user/js/jquery.js')); ?>"></script>
    <script src="<?php echo e(url ('user/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(url ('user/js/jquery.scrollUp.min.js')); ?>"></script>
    <script src="<?php echo e(url ('user/js/price-range.js')); ?>"></script>
    <script src="<?php echo e(url ('user/js/jquery.prettyPhoto.js')); ?>"></script>
    <script src="<?php echo e(url ('user/js/main.js')); ?>"></script>
     <script src="<?php echo e(url ('user/js/sua.js')); ?>"></script>
</body>
</html>
