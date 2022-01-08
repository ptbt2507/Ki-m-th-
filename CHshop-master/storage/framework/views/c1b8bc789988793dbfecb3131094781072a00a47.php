          

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
    
    <section id="slider"><!--slider-->
       <div class="container" style=" border: 1px solid #E0E0E1;border-top-left-radius: 35px;
    border-top-right-radius: 35px;border-bottom-left-radius: 35px;
    border-bottom-right-radius: 35px;">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                             <li data-target="#slider-carousel" data-slide-to="3"></li>
                        </ol>
                        
                       <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1>CH SHOP</h1>
                                    <h2>Chuyên bán laptop </h2>
                                    
                                    
                                </div>
                                <div class="col-sm-6">
                                    <img src="<?php echo e(url ('user/images/CHShop.png')); ?>" class="girl img-responsive" alt="" width="350px" height="200px"/>
                                    
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>CH Shop</span></h1>
                                    <h2>Giá hợp lý, chất lượng tốt</h2>
                                    <p></p>
                                   
                                </div>
                               <div class="col-sm-6">
                                    <img src="<?php echo e(url ('user/images/cam-ket-hoan-tien.jpg')); ?>" class="girl img-responsive" alt="" width="350px" height="200px" style="width: 300px; height: 308px;"/>
                                    
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1>CH Shop</h1>
                                    <h2>Chính sách bảo hành toàn quốc</h2>
                                    <p></p>           
                                </div>
                               <div class="col-sm-6">
                                    <img src="<?php echo e(url ('user/images/baohanh1.png')); ?>" class="girl img-responsive" alt="" width="350px" height="200px" style="width: 500px; height: 308px;"/>
                                    
                                </div>
                            </div>
                             <div class="item">
                                <div class="col-sm-4">
                                  <h1><span>Giao Hàng Tận Nơi</span></h1>
                                   <h4><span>Liên hệ: 0965600364</span></h4>
                                   
                                </div>
                                <div class="col-sm-8">
                                    <img src="<?php echo e(url ('user/images/giao-hang.png')); ?>" class="girl img-responsive" alt="" width="350px" height="200px" style="width: 500px; height: 308px;" />
                                    
                                </div>
                            </div>
                            
                        </div>
                        
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section><!--/slider-->
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Danh mục sản phẩm</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                                    
                                                <!--  Noi chua danh muc    -->
                                                           <div class="panel panel-default">
                                             <?php 
                                                $menu=DB::table('loaihang')->get();

                                             ?>              
                                             <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><a href="<?php echo route('loaisanpham',[ $mn->MaLoai]); ?>">
                                                <i class="fa fa-star"></i><?php echo e($mn->TenLoai); ?></a>                                             

                                             </h4>
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </div>

                        </div><!--/category-products-->
                              <h2>Sản phẩm mới nhất</h2>      
                                <div class="brands_products">
                                       <?php $__currentLoopData = $moinhat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                                       <div class="brands-name">           
                                       <div class="text-center">
                                    <img src="<?php echo e(url ('user/images/Icon_new.gif')); ?>" class="girl img-responsive" alt="" style="    margin-left: 121px;" />
                                 <a href="<?php echo route('chitietsanpham',[ $sp->MaSP]); ?>"><img src="<?php echo asset('admin/img/'.$sp->img); ?>" width="100px" height="100px"  ></a>
                                       <h6><?php echo e($sp->DonGia); ?><span style="color: #746B6B; font-size: 8px;">VNĐ</span></h6>
                                     <h6><?php echo e($sp->TenSP); ?></h6>  
                                       </div>
                                       </div>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>          
                                       
                               
                                </div>
                            
                         <br>
                        <div class="brands_products"><!--brands_products-->
                            <h2>Chi nhánh của chúng tôi</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#"> <span class="pull-right"></span><i class="fa fa-home"></i> 78 Trần Cao Vân, Tp Đà Nẵng </a></li>
                                    
                                    <li><a href="#"> <span class="pull-right"></span><i class="fa fa-home"></i> 02 Trần Cao Vân, Tp Đà Nẵng</a></li>
                                </ul>
                            </div>
                        </div><!--/brands_products-->
                        
                        
                        
                        <div class="text-center"><!--shipping-->
                           
                            <br><br><br><br>
                             <img src="<?php echo e(url ('user/images/best.jpg')); ?>" alt="" />
                               
                                  <br><br><br><br>
                                 <img src="<?php echo e(url ('user/images/hihi.jpg')); ?>" alt="" style="" />
                        </div><!--/shipping-->
                    
                    </div>
                </div>
                                <div class="col-sm-9 padding-right">
                        <div class="features_items"><!--features_items-->
                            <h2 class="title text-center">Sản Phẩm</h2>
                           
                                         <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                             <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                       
                                       <img src="<?php echo asset('admin/img/'.$item->img); ?>" style="   width: 200px; height: 200px;    ">
                                       <h5 style="text-decoration: line-through;"> Giá gốc: <?php echo e($item->giakm); ?></h5>
                                         <h2><?php echo e(number_format($item->DonGia,0,",",".")); ?><span style="color: #746B6B; font-size: 10px;">VNĐ</span></h2>
                                        <p><?php echo e($item->TenSP); ?></p>
                                        <a href="" class="btn btn-default add-to-cart"><i class="fa fa-tags" aria-hidden="true"></i>Chi Tiết</a>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                    
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                               <img src="<?php echo asset('admin/img/'.$item->img); ?>" width="180px" height="180px">
                                             <p  style="color: black"><?php echo e($item->chuthich); ?></p>
                                            <h2 style="color: black"><span style="color: black ; font-size: 18px">Price: </span><?php echo e(number_format($item->DonGia,0,",",".")); ?><span style="font-size: 10px">VNĐ</span></h2>
                                           <p  style="color: black"><?php echo e($item->TenSP); ?></p>
                                           <a href="<?php echo route('chitietsanpham',[ $item->MaSP]); ?>" class="btn btn-default add-to-cart"><i class="fa fa-tags" aria-hidden="true"></i>Chi Tiết</a>
                                            <a href="<?php echo url('muahang',[$item->MaSP]); ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                          

                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   
                                
                            

                        </div><!--features_items-->
                        
                    
                     <div class="pagination pull-right">
                                    <div class="row" >
                                     <ul class="list-inline">
                                       <?php if($product->currentPage()!=1): ?>
                        <li ><a href="<?php echo e(str_replace('/?','?',$product->url($product->currentPage()-1) )); ?>">Prew</a></li> 
              <?php endif; ?>
              <?php for($i=1;$i<=$product->lastPage();$i=$i+1): ?>
              
              <li class="<?php echo e($product->currentPage()==$i); ?> ? ' active' ' '">
                <a href="<?php echo e(str_replace('/?','?',$product->url($i))); ?>"><?php echo e($i); ?></a>
              </li> 
              <?php endfor; ?>
                <?php if($product->currentPage()!=$product->lastPage()): ?>
                        <li><a href="<?php echo e(str_replace('/?','?',$product->url($product->currentPage()+1) )); ?>">Next</a></li>
                        <?php endif; ?>
                                                        
                                     </ul>
                                    </div>
                             </div>
                    
                    
                </div>
                <div class="col-sm-9 padding-right">
                        <div class="features_items"><!--features_items-->
                            <h2 class="title text-center">Sản Phẩm đưọc mua nhiều </h2>

                            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="item active"> 
                   
                        <?php $__currentLoopData = $banchay; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
                  <div class="col-sm-4">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                                      <a href="<?php echo route('chitietsanpham',[ $bc->MaSP]); ?>" class="btn btn-default add-to-cart"><img src="<?php echo asset('admin/img/'.$bc->img); ?>" style="width: 100px; height: 100px"></a>
                                <h2><?php echo e(number_format($bc->DonGia,0,",",".")); ?><span style="color: #746B6B; font-size: 10px;">VNĐ</span></h2>
                          <p><?php echo e($bc->TenSP); ?></p>
                           <a href="<?php echo url('muahang',[$item->MaSP]); ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>   
                      </div>
                    </div>
                  </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                

                </div>
                <div class="item">  
                  
                        <?php $__currentLoopData = $banchay; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
                  <div class="col-sm-4">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                                        <a href="<?php echo route('chitietsanpham',[ $bc->MaSP]); ?>" class="btn btn-default add-to-cart"> <img src="<?php echo asset('admin/img/'.$bc->img); ?>" style="width: 100px; height: 100px"></a>
                           <h2><?php echo e(number_format($bc->DonGia,0,",",".")); ?><span style="color: #746B6B; font-size: 10px;">VNĐ</span></h2>
                          <p><?php echo e($bc->TenSP); ?></p>
                        <a href="<?php echo url('muahang',[$bc->MaSP]); ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>   
                      </div>
                    </div>
                  </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 
                 
                </div>
              </div>
               <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                </a>
                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                </a>      
            </div>
                            </div>
                            </div>
                         
        </div>

    </section>
    
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
   <?php  
            DB::table('truycap')->
        increment('truycap',1);


    ?>
    <script src="<?php echo e(url ('user/js/jquery.js')); ?>"></script>
    <script src="<?php echo e(url ('user/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(url ('user/js/jquery.scrollUp.min.js')); ?>"></script>
    <script src="<?php echo e(url ('user/js/price-range.js')); ?>"></script>
    <script src="<?php echo e(url ('user/js/jquery.prettyPhoto.js')); ?>"></script>
    <script src="<?php echo e(url ('user/js/main.js')); ?>"></script>
</body>
</html>
