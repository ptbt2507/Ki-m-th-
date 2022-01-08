<?php $__env->startSection('content'); ?>
<div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>ADD</small>
                        </h1>
                    </div>
 <div class="col-lg-7" style="padding-bottom:120px">
            

                        <form action="" method="POST">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                                <fieldset>
                        
                           <input class="form-control" name="HoTen" placeholder="Nhập Tên Sản Người dùng"  value="<?php echo e($sua->MaND); ?>"  />
                              <div class="form-group">
                                <label>Tên Nguòi dùng</label>
                                <input class="form-control" name="HoTen" placeholder="Nhập Tên Sản Người dùng"  value="<?php echo e($sua->HoTen); ?>"  />
                            </div>
                               
                              <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="email" placeholder="Email"    value="<?php echo e($sua->email); ?>"/>
                            </div>
                             
                              <div class="form-group">
                                <label>Số điện thoại</label>
                                <input class="form-control" name="SDT" placeholder="Số điện thoại"   value="<?php echo e($sua->SDT); ?> "/>
                            </div>
                              
                             <div class="form-group">
                                <label>Địa chỉ</label>
                                <input class="form-control" name="DiaChi" placeholder="Địa chỉ"    value="<?php echo e($sua->DiaChi); ?>"/>
                            </div>
                               <div class="controls">
                                      <label>Giới tính</label>
                                  <select id="selectError3" name="Gioitinh" class="form-control" >                                              
                                          <option>Nam</option>
                                          <option >Nữ</option>           
                                                       
                                  </select>
                                 
                                </div>
                                  <div class="form-group">
                                <label>Tài khoản</label>
                                <input class="form-control" name="TaiKhoan" placeholder="Tên đăng nhập"   value="<?php echo e($sua->TaiKhoan); ?>"/>
                            </div>
                                 <div class="form-group">
                                <label>Password</label>
                                <input class="form-control"  type="password" name="password" placeholder="Password" value="<?php echo e($sua->password); ?>" />
                            </div>
                              <div class="form-group">
                                <label>Level</label>
                                <label class="radio-inline">
                                      <input type="radio" name="level" value="1" 
                                          <?php if($sua['level'] ==1): ?>
                                            checked="checked"
                                            <?php endif; ?> 
                                          >Nhân Viên


                                </label>
                                <label class="radio-inline">
                                      <input type="radio" name="level"  value="2"
                                             <?php if($sua['level'] ==2): ?>
                                            checked="checked"
                                            <?php endif; ?> 
                                                
                                      >Người dùng

                                </label>
                            </div>
                              <div class="form-actions">
                                <button type="submit" class="btn btn-primary" name="luu">Lưu</button>
                                <a href="<?php echo e(asset('admin/nguoidung/list')); ?>" class="btn btn-primary">Hủy</a>
                              </div>

                            </fieldset>
                            
                        <form>
                    </div>
                 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>