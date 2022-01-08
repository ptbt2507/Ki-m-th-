<?php $__env->startSection('content'); ?>
<div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>Edit</small>
                        </h1>
                    </div>
 <div class="col-lg-7" style="padding-bottom:120px">
            

                        <form action="" method="POST">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                                <fieldset>
                        
                           
                              <div class="form-group">
                                <label>Tên Sản Phẩm</label>
                                <input class="form-control" name="TenSP"   required />
                            </div>
                               <div class="form-group">
                                <label>Nhà cung cấp</label>
                                   <select id="selectError3" name='manhacc' class="form-control">
                                        <?php $__currentLoopData = $nhacungcap; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ncc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($ncc->ManhaCC); ?>"><?php echo e($ncc->TennhaCC); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>
                            </div>
                              <div class="form-group">
                                <label>Ram</label>
                                <input class="form-control" name="Ram"  required />
                            </div>
                             
                              <div class="form-group">
                                <label>Card Màn hình</label>
                                <input class="form-control" name="vga" required />
                            </div>
                              
                             <div class="form-group">
                                <label>CPU</label>
                                <input class="form-control" name="cpu"  required />
                            </div>
                              <div class="form-group">
                                <label>Hệ điều hành</label>
                                   <select id="selectError3" name='hedieuhanh' class="form-control">
                                    <option>Win 7</option>
                                    <option>Win 8.1</option>
                                    <option>Win 10</option>
                                    <option>Mac OS</option>
                                     <option>Ubuntu</option>
                                  </select>
                            </div>
                                  <div class="form-group">
                                <label>Gía gốc</label>
                                <input class="form-control" name="giakm" required/>
                            </div>
                                 <div class="form-group">
                                <label>Số lượng</label>
                                <input class="form-control" name="Sluongcon" required/>
                            </div>
                              <div class="form-group">
                                <label>Gía bán</label>
                                <input class="form-control" name="DonGia"required />
                            </div>
                               <div class="form-group">
                                <label>Loại sản phẩm</label>
                                   <select id="selectError3" name='MaLoai' class="form-control">
                                        <?php $__currentLoopData = $loaihang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ncc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($ncc->MaLoai); ?>"><?php echo e($ncc->TenLoai); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>
                            </div>
                              <div class="control-group">
                                  
                                  <label class="control-label" for="fileInput">Hình ảnh</label>
                                  <div class="controls">
                                     <input type="file" min="0" class="form-control" name="hinh" value=""   required />

                                  </div>
                              </div>
                 <div class="form-group">
                                <label>Bảo hành</label>
                                <select id="selectError3" name='baohanh' class="form-control">
                                    <option>6 tháng</option>
                                    <option>1 năm</option>
                                    <option>2 năm</option>
                                    <option>4 tháng</option>
                                     <option>Không bảo hành</option>
                                  </select>
                            </div>
                          

                              
                                <div class="control-group">
                                <label class="control-label" for="focusedInput"><h3>Mô Tả sản phẩm</h3></label>
                              </div>
                                <textarea id="mota" name="mota" cols="80" rows="10" >                       
                               </textarea>                        
                               <script type="text/javascript">                  
                                   CKEDITOR.replace( 'mota',
                                    {
                                        filebrowserBrowseUrl : '../../admin/ckfinder/ckfinder.html',
                                        filebrowserImageBrowseUrl : '../../admin/ckfinder/ckfinder.html?Type=Images',
                                        filebrowserFlashBrowseUrl : '../../admin/ckfinder/ckfinder.html?Type=Flash',
                                        filebrowserUploadUrl : '../../admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                                        filebrowserImageUploadUrl : '../../admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                        filebrowserFlashUploadUrl : '../../admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                                    });
                               </script>  
                              <div class="form-actions">
                                <button type="submit" class="btn btn-primary" name="luu">Lưu</button>
                                <a href="<?php echo e(asset('admin/cate/list')); ?>" class="btn btn-primary">Hủy</a>
                              </div>

                            </fieldset>
                            
                        <form>
                    </div>
                  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>