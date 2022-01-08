<?php $__env->startSection('content'); ?>
<div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>ADD</small>
                        </h1>
                    </div>
 <div class="col-lg-7" style="padding-bottom:120px">
            

                        <form action="<?php echo e(route('admin.nguoidung.getAdd')); ?>" method="POST">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                                <fieldset>
                        
                           
                              <div class="form-group">
                                <label>Tên Nguòi dùng</label>
                                <input class="form-control" name="HoTen" placeholder="Nhập Tên Sản Người dùng"  required />
                            </div>
                               
                              <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="email" placeholder="Email" required />
                            </div>
                             
                              <div class="form-group">
                                <label>Số điện thoại</label>
                                <input class="form-control" name="SDT" placeholder="Số điện thoại" required />
                            </div>
                              
                             <div class="form-group">
                                <label>Địa chỉ</label>
                                <input class="form-control" name="DiaChi" placeholder="Địa chỉ" required />
                            </div>
                               <div class="controls">
                                      <label>Giới tính</label>
                                  <select id="selectError3" name="Gioitinh" class="form-control">                                              
                                          <option>Nam</option>
                                          <option>Nữ</option>           
                                                       
                                  </select>
                                 
                                </div>
                                  <div class="form-group">
                                <label>Tài khoản</label>
                                <input class="form-control" name="TaiKhoan" placeholder="Tên đăng nhập"  required/>
                            </div>
                                 <div class="form-group">
                                <label>Password</label>
                                <input class="form-control"  type="password" name="password" placeholder="Password" required/>
                            </div>
                              <div class="form-group">
                                <label>Level</label>
                                <select id="selectError3" name="level" class="form-control">                                              
                                          <option value="1">Nhân Viên</option>
                                          <option value="2">Khách hàng</option>           
                                                       
                                  </select>
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