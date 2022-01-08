          

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
                                                      <li><a href="">Thông tin</a></li><br>
                                                      <li><a href="">Đơn hàng cũ</a></li><br>
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
              
                        <div class="brands_products"><!--brands_products-->
                            <h2>Chi nhánh</h2>
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
                                            <div class="col-sm-4">
                                                
                                               
                                            <img id="zoom_07" src="<?php echo asset('admin/img/'.$chitiet->img); ?>" data-zoom-image="<?php echo asset('admin/img/'.$chitiet->img); ?>"  width="250px" height="380px" > 
                                            </div>



                                            <div class="col-sm-8">

                                            <h2><?php echo e($chitiet->TenSP); ?></h2>
                                            <p><b>Mã Số:   </b><?php echo e($chitiet->MaSP); ?> </p>
                                                <h2 style="color: black; font-size: 12px;" >Giá khuyến mãi <span style="text-decoration: line-through;"><?php echo e(number_format($chitiet->giakm,0,",",".")); ?></span><span style="font-size: 8px">VNĐ</span></h2>
                                         <h2 style="color: black"><span style="color: black ; font-size: 18px">Giá bán: </span><?php echo e(number_format($chitiet->DonGia,0,",",".")); ?><span style="font-size: 10px">VNĐ</span></h2>
                                            
                                            <h3>Tình trạng: 
                                                    <?php
                                                        $tinhtrang=$chitiet->Sluongcon;
                                                        if($tinhtrang>0) 
                                                        {
                                                    ?>
                                                    <span style="color: #E35959">Còn hàng</span> <i class="fa fa-hand-o-right" aria-hidden="true" style="font-size: 15px; padding: 5px"></i><a href="<?php echo url('muahang',[$chitiet->MaSP]); ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            <?php } else { ?>
                                                        <span style="color: #656262">Hết hàng</span><?php 
                                                        }
                                                        ?>

                                             </h3>
                                            </span>
                                
                                <h4>Hệ điều hành: <?php echo e($chitiet->hedieuhanh); ?></h4>
                                <h4>Bảo hành: <?php echo e($chitiet->baohanh); ?></h4>
                                 <h4>Ram: <?php echo e($chitiet->Ram); ?></h4>
                                 <h4>CPU: <?php echo e($chitiet->cpu); ?></h4>
                                <h4>Card màn hình : <?php echo e($chitiet->vga); ?></h4>
                                            </div>
                                        
                                
                 
                    <div class="col-sm-9 padding-right">
                        <h3><p>Thông số kĩ thuật</p></h3>                
                            <?php
                        echo htmlspecialchars_decode( $chitiet->mota);  
                             ?>                 
                                      
    

                   </div>
                    
                            
                        </div><!--features_items-->
                        
                    
                    
                    
                    
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
  
    <script src="<?php echo e(url ('user/js/jquery.js')); ?>"></script>
    <script src="<?php echo e(url ('user/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(url ('user/js/jquery.scrollUp.min.js')); ?>"></script>
    <script src="<?php echo e(url ('user/js/price-range.js')); ?>"></script>
    <script src="<?php echo e(url ('user/js/jquery.prettyPhoto.js')); ?>"></script>
   
     <script src="<?php echo e(url ('user/js/sua.js')); ?>"></script>
     <script src="<?php echo e(url ('user/js/jquery.elevatezoom.js')); ?>"></script>
      <script src="<?php echo e(url ('user/js/jquery-1.8.3.min.js')); ?>"></script>
       <script src="<?php echo e(url ('user/js/jquery.elevateZoom-3.0.8.min.js')); ?>"></script>
      <script>
   $("#zoom_07").elevateZoom({
  zoomType              : "lens",
  lensShape : "round",
  lensSize    : 150
});
</script>
</body>
</html>
