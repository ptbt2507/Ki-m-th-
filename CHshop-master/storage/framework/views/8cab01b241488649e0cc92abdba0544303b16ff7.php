<?php $__env->startSection('content'); ?>

<div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>List</small>
                        </h1>
                    </div>
                           <a href="<?php echo e(route('admin.thongke.list')); ?>"  style="color: green"><i class="fa fa-arrow-left">Trở Về</i></a><br><br>
                    <div class="box-content">
                    <table class="table table-striped table-bordered bootstrap-datatable">
                      <thead>
                        <tr>
                          <th>STT</th>
                          <th>Họ và tên</th>
                          <th>Ngày tạo</th>
                          <th>Vai trò</th>
                          <th>Trạng thái</th>                          
                        </tr>
                      </thead>   
                        <tbody>
                          <?php 
                              $stt=0;
                        ?>
                                   <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $db): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <?php 
                                       $stt++;
                                        ?>
                                <tr>
                                     <td><?php echo e($stt); ?></td>
                                     <td><?php echo e($db->HoTen); ?></td>
                                     <td><?php echo e($db->created_at); ?></td>
                                     <td><?php echo e($db->TaiKhoan); ?></td>
                
                                        <td><?php echo e($db->trangthai); ?></td>
                                     
                                     
                                
                                </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
    
                        </table>
                    
       
</div>
                 
        
              

                
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>