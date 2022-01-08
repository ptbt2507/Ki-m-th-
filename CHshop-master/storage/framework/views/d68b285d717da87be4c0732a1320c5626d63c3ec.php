<?php $__env->startSection('content'); ?>
    <br></br>
 <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php
                                                       $tt=DB::table('nguoidung')->count('MaND');
                                            echo  $tt;
                                            ?>
                                        </div>
                                        <div>Số Thành Viên</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo e(route('admin.thongke.getEdit')); ?>">
                                <div class="panel-footer">
                                    <span class="pull-left">Xem chi tiết</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-3">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php
                                                       $tt=DB::table('donhang')->count('MaDH');
                                            echo  $tt;
                                            ?>
                                        </div>
                                        <div>Số Đơn hàng</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo e(route('admin.donhang.getList')); ?>">
                                <div class="panel-footer">
                                    <span class="pull-left">Xem chi tiết</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-3">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php
                                                       $tt=DB::table('sanpham')->count('MaSP');
                                            echo  $tt;
                                            ?>
                                        </div>
                                        <div>Số Sản phẩm</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo e(route('admin.cate.getList')); ?>">
                                <div class="panel-footer">
                                    <span class="pull-left">Xem chi tiết</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                            <div class="col-lg-3 col-md-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php
                                                       $tt=DB::table('truycap')->first();
                                            echo  $tt->truycap;
                                            ?>
                                        </div>
                                        <div>Số lượt truy cập</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo e(route('admin.cate.getList')); ?>">
                                <div class="panel-footer">
                                    <span class="pull-left">Xem chi tiết</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    </div>
                    
                 <div class="col-lg-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Doanh Thu theo ngày</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-line-chart">
                   <?php
                                  $users = DB::table('donhang')
                                ->select(DB::raw('sum(Tongtien) as DoanhThu, NgTT as Ngay'))
                                ->where('TinhTrang', '>=',3 )
                                ->groupBy('NgTT')
                                ->ORDERBY('NgTT')
                                ->take(3)
                                ->get();

                                $userss = DB::table('donhang')->sum('Tongtien');
                             

                                ?>
                    
                                         
                   <table class="table table-striped table-bordered bootstrap-datatable ">
                      <thead>
                        <tr>
                          <th>Tổng tiền</th>
                          <th>Ngày thu</th>
                          
                          
                        </tr>
                      </thead>   
                        <tbody>
                               <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $db): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                                   
                                       <td> <?php echo e(number_format($db->DoanhThu,6,".",",")); ?>VNĐ</td>
                                       <td><?php echo e($db->Ngay); ?></td>
                              
                                           
                                
                                </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
    
                        </table>


                                </div>
                                
                            </div>
                        </div>
                       
                      
                    </div>
                         <div class="col-lg-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Tổng doanh thu của công ty</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-line-chart">
                   <?php
                                  $users = DB::table('donhang')
                                ->select(DB::raw('sum(Tongtien) as DoanhThu, NgTT as Ngay'))
                                ->where('TinhTrang', '>=',3 )
                                ->groupBy('NgTT')
                                ->ORDERBY('NgTT')
                                ->take(3)
                                ->get();

                                $userss = DB::table('donhang')->sum('Tongtien');
                             

                                ?>
                    
                                         
                   <table class="table table-striped table-bordered bootstrap-datatable ">
                      <thead>
                        <tr>
                          <th>Tổng tiền</th>
                          
                          
                          
                        </tr>
                      </thead>   
                        <tbody>
                            <tr> <td> <?php echo e(number_format($userss,6,".",",")); ?>VNĐ</td></tr>
                              
                                           
                     
                        </tbody>
    
                        </table>
                        

                                </div>
                                
                            </div>
                        </div>
                       
                      
                    </div>
                    
                            <div class="col-lg-4"></div>
                        
        <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
           
        <div id="container1" style="min-width: 310px; height: 400px; max-width: 600px; margin-top:250px;"  ></div>
             

<?php
        $dd =   DB::table('loaihang')->select('TenLoai')->get();   
        $cc=DB::table('sanpham')->select('Sluongban','TenSP','Sluongcon')->get();

            $user = DB::table('sanpham')
            ->join('loaihang', 'loaihang.MaLoai', '=', 'sanpham.MaLoai')
            ->select('loaihang.TenLoai', DB::raw('SUM(sanpham.Sluongban) sluong '))
             ->groupBy('sanpham.MaLoai')
            ->get();
     
             $users1 = DB::table('donhang')
                                ->select(DB::raw('sum(Tongtien) as DoanhThu, NgTT as Ngay'))
                                ->where('TinhTrang', '>=',3 )
                                ->groupBy('NgTT')
                                ->ORDERBY('NgTT')
                                ->take(3)
                                ->get();    
    
?>
     
<script type="text/javascript">
    Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Số lượng bán ra của mỗi sản phẩm'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: [
           
           
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: ''
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [
         
                    <?php $__currentLoopData = $cc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $db): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo "{name:'".    $db->TenSP.       " ' ,data: [   ". $db->Sluongban  .     "]}," ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        ]
});
</script>
<script type="text/javascript">
   Highcharts.chart('container1', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Doanh thu hãng sản phẩm'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [
            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $db): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo "{name:'". $db->TenLoai."',y:". $db->sluong."}," ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        ]
    }]
}); 

</script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>