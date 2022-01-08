<?php $__env->startSection('content'); ?>
<div class="col-lg-12">
                        <h1 class="page-header">Liên hệ
                            <small>Detail
</small>
                        </h1>
                    </div>
 <div class="col-lg-7" style="padding-bottom:120px">
            

                        <form action="" method="POST">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                                <fieldset>
                        
                              <div class="form-group">
                                <label>Tên khách hàng</label>
                                <input class="form-control" name="TennhaCC"  readonly value="<?php echo e($data->hoten); ?>" />
                            </div>
                              <div class="form-group">
                                <label>Địa chỉ</label>
                              <textarea id="mota" name="Diachi" cols="80" rows="10" >                       
                               <?php echo e($data->noidung); ?>

                               </textarea>                        
                                
                                </div>
                                  <div class="form-group">
                                <label>Ngày liên hệ</label>
                                <input class="form-control" name="TennhaCC"  readonly value="<?php echo e($data->ngaylienhe); ?>" />
                            </div>
                             
                              <div class="form-actions">
                              
                                <a href="<?php echo route('admin.lienhe.list'); ?>" class="btn btn-primary">Trở về</a>
                              </div>

                            </fieldset>
                            
                        <form>
                    </div>
                 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>