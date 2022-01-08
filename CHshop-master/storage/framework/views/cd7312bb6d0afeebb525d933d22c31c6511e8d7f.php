<?php $__env->startSection('content'); ?>

<div class="col-lg-12">
                        <h1 class="page-header">Quản lí
                            <small>Đơn hàng</small>
                        </h1>

                    </div>
                           
                    <div class="box-content">
                    <table class="table table-striped table-bordered bootstrap-datatable datatable">
                      <thead>
                        <tr>
                          <th>Mã Đơn Hàng</th>
                          <th>Tên Khách hàng </th>
                          <th>SĐT</th>
                          <th>Ngày đặt</th>
                          <th>Tình trạng</th>
                          <th>Tổng tiền</th>
                          <th>Địa chỉ</th>
                          <th>Chi tiết</th>
                           <th>Xóa</th>
                         
                          
                        </tr>
                      </thead>   
                        <tbody>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                      <td><?php echo e($sh->MaDH); ?></td>
                                       <td><?php echo e($sh->TenKH); ?></td>
                                        <td><?php echo e($sh->sdt); ?></td>
                                         <td><?php echo e($sh->NgDat); ?></td>
                                         <?php


                                                  $tinhtrang=$sh->TinhTrang;
                                                  if($tinhtrang==1){
                                                    echo "<td><span class='label label-default'>Chưa duyệt</span></td>";
                                                  }
                                                  elseif($tinhtrang==2){
                                                    echo "<td><span class='label label-warning'>Đã Xem</span></td>";
                                                  }
                                                  elseif($tinhtrang==3){
                                                        echo "<td><span class='label label-success'>Đang giao hàng</span></td>";
                                                  }
                                                  elseif($tinhtrang==4){
                                                    echo "<td><span class='label label-danger'>Đã giao/ Đã thanh toán</td>";
                                                  }


                                         ?>







                                          <td><?php echo e($sh->Tongtien); ?></td>
                                            <td><?php echo e($sh->DiaChiGH); ?></td>
                                                    
                                                  

                                          <td class="center"><a href=" <?php echo URL::route('admin.donhang.getEdit',$sh['MaDH']); ?>"> <i class="fa fa-pencil fa-fw"></i> </a></td>
                                <td class="center"><a onclick="return xacnhanxoa('Bạn Có Chắc Muốn Xóa Không')" href="<?php echo URL::route('admin.donhang.getDelete',$sh['MaDH']); ?>" ><i class="fa fa-trash-o  fa-fw"></i></a></td>
                                           
                                
                                </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                              
                        </table>

                         <div class="example">
       <div class="pagination pull-right">
            <div class="row" >
                <ul class="list-inline">
                    <?php if($data->currentPage()!=1): ?>
                        <li ><a href="<?php echo e(str_replace('/?','?',$data->url($data->currentPage()-1) )); ?>">Prew</a></li> 
              <?php endif; ?>
              <?php for($i=1;$i<=$data->lastPage();$i=$i+1): ?>
              
              <li class="<?php echo e($data->currentPage()==$i); ?> ? ' active' ' '">
                <a href="<?php echo e(str_replace('/?','?',$data->url($i))); ?>"><?php echo e($i); ?></a>
              </li> 
              <?php endfor; ?>
                <?php if($data->currentPage()!=$data->lastPage()): ?>
                        <li><a href="<?php echo e(str_replace('/?','?',$data->url($data->currentPage()+1) )); ?>">Next</a></li>
                        <?php endif; ?>
                        </ul>
                </ul>
            </div>
        </div>
</div>
                 
        
              

                        <script type="text/javascript">
        function xacnhanxoa(msg) {
            if (window.confirm(msg)) {
                return true;
            }
            return false;
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>