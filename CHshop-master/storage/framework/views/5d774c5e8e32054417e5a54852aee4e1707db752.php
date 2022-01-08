<?php $__env->startSection('content'); ?>

<div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>List</small>
                        </h1>
                    </div>
                           <a href="<?php echo e(route('admin.thongke.list')); ?>"  style="color: green"><i class="fa fa-arrow-left">Trở Về</i></a><br><br>
                    <div class="box-content">
                      <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                                <fieldset>
                        
                           
                              <div class="form-group">
                                <label>Mã đơn hàng</label>
                                <input class="form-control" name="TenSP"  value="<?php echo $sua->MaDH; ?>" />
                            </div>
                               
                              <div class="form-group">
                                <label>Tên khách hàng</label>
                                <input class="form-control" name="Ram" value="<?php echo e($sua->TenKH); ?>"  />
                            </div>
                             
                              <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="hedieuhanh" value="<?php echo $sua->email; ?>"  />
                            </div>
                              <div class="form-group">
                                <label>Số điện thoại</label>
                                <input class="form-control" name="giakm" value="<?php echo $sua->sdt; ?>" />
                            </div>
                                  <div class="form-group">
                                <label>Nhân viên Xử lí</label>
                                <input class="form-control" name="NhanVienTT"  value="<?php echo e($ten->HoTen); ?>"  readonly />
                            </div>
                                <div class="form-group">
                                <label>Nhân viên giao hàng</label>
                                   <select id="selectError3" name='NhanVienGH' class="form-control">
                                       <?php 
                                                $chitiet=DB::table('nguoidung')->select('MaND','HoTen')->where('MaND',37)->first();                                
                                       ?>
                                                <option><?php echo e($chitiet->HoTen); ?></option>                             
                                  </select>
                            </div>
                              <div class="form-group">
                                <label>Địa chỉ</label>
                                <input class="form-control" name="DonGia" value="<?php echo $sua->DiaChiGH; ?>"  />
                            </div>
                            
                              <div class="form-group">
                                <label>Ngày thanh toán</label><br>
                             <input type='text' class='input-xlarge datepicker' id='date01' name='ngtt' value="<?php echo e($sua->NgTT); ?>">
                            </div>
                              
                             <div class="form-group">
                                <label>Ngày giao hàng</label><br>
                                <input type='text' class='input-xlarge datepicker' id='date02' name='nggh' value="<?php echo e($sua->NgGH); ?>">
                            </div>

                             <div class="form-group">
                                <label>Xử lí</label>
                                   <select id="selectError3" name='TinhTrang' class="form-control" >                         
                                                <option  value=" <?php echo e($sua->TinhTrang); ?>">
                                                  <?php
                                                              $lao=$sua->TinhTrang;
                                                               if($lao==2){
                                                                echo "Đã Xem";
                                                               }
                                                               elseif($lao==3){
                                                                echo "Đang giao hàng";
                                                               }
                                                               elseif($lao==4){
                                                                echo "Đã giao/ Đã thanh toán";
                                                               }


                                                   ?>


                                                </option>     
                                                <option value="3">Đang giao hàng</option>
                                                 <option value="4">Đã giao/ Đã thanh toán</option>
                                               
                                  </select>
                            </div>
                            <button type="submit" class="btn btn-primary" name="luu">Lưu</button>
                                <a href="<?php echo e(asset('admin/donhang/list')); ?>" class="btn btn-primary">Hủy</a>
                            </fieldset>
                            
                        </form>

                   </div>
                            <div class="col-lg-12">
                              <h3><i class="halflings-icon user"></i><span class="break"></span>Chi tiết đơn hàng</h3>
                              <a href=" <?php echo URL::route('admin.donhang.indonhang',$sua['MaDH']); ?>" style="font-size: 20px;"> <i class="fa fa-file-text-o" aria-hidden="true"></i>  In hóa đơn </a>
                        <table class="table table-striped table-bordered bootstrap-datatable datatable">
                      <thead>
                        <tr>
                          <th>STT</th>
                          <th>Mã đơn hàng</th>
                          <th>Tên hàng</th>              
                          <th>Số lưọng</th>
                          <th>Đơn gía</th>
                          <th>Thành tiền</th>
                          
                         
                          
                   
                      </thead>   
                        <tbody>
                                    
                                 <?php 
                                               $cc=$sua->MaDH; 
                                               $stt=0;
                                                 $chitiet=DB::table('chitietdh')->select('MaDH','MaSP','GiaSP','Soluong')->where('MaDH',$cc)->get();

                                       ?>
                                       <?php $__currentLoopData = $chitiet; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <?php 
                                           $stt++;
                                          $cc=$ct->MaSP;
                                           $tensanpham=DB::table('sanpham')->select('MaSP','TenSP')->where('MaSP',$cc)->first();
                                           $sl=$ct->Soluong;
                                           $dg=$ct->GiaSP;


                                           $thanhtien=$sl*$dg;
                                           $tongtien=$thanhtien* 1.1;
                                             ?>
                                        <tr>
                                        <td><?php echo e($stt); ?></td>
                                       <td><?php echo e($ct->MaDH); ?></td>
                                        <td><option value="<?php echo e($ct->MaSP); ?>"><?php echo e($tensanpham->TenSP); ?></option></td>
                                        <td><?php echo e($ct->Soluong); ?></td>
                                           <td><?php echo e($ct->GiaSP); ?></td>
                                           <td><?php echo e($thanhtien); ?></td>
                                   
                                          

                                           </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  

           
                                               
                              <tr>
                      <td class='center'><h4><p>Tổng tiền</p></h3></td>
                      <td class='center'></td>
                      <td class='center'></td>
                      <td class='center'></td>
                      <td class='center'><h3><p><?php echo e($tongtien); ?></p></h3></td>
                      <td class='center'></td>
                    </tr>
                      <tr>
                      <td class='center'><h3><p></p>Thuế GTGT</h3></td>
                      <td class='center'></td>
                      <td class='center'></td>
                      <td class='center'></td>
                      <td class='center'><h3><p></p>12.1%</h3></td>
                      <td class='center'></td>
                    </tr>
                    
                            
                       
                        </tbody>

                        </table>
                     
                             

                   </div>
                       
      
        
              

                
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>