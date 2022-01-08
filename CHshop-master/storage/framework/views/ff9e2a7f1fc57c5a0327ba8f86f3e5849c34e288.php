<?php $__env->startSection('content'); ?>

<div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>List</small>
                        </h1>
                    </div>
                            <a href="add"  style="color: green">Thêm Sản phẩm</a><br><br>

                            
                              <div class="col-md-6" style=" padding: 10px;">
                              <?php if(session('loi')): ?>
                              <h5 style="background: #8ee1a7;padding: 10px 20px;"><?php echo e(session('loi')); ?></h5>
                              <?php endif; ?>
                                                                  </div>
                  </div>
                    <div class="box-content">
                    <table class="table table-striped table-bordered bootstrap-datatable datatable">
                      <thead>
                        <tr>
                        
                          <th>Mã sản phẩm</th>
                          <th>Tên sản phẩm</th>
                          <th>Đơn Gía</th>
                          <th>Sluongcon</th>
                          <th>Hình ảnh</th>
                          <th>Ram</th>
                          <th>Bảo hành</th>
                          <th>Xóa</th>
                           <th>Sửa</th>
                          
                        </tr>
                      </thead>   
                        <tbody>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                        <td><?php echo e($sh->MaSP); ?></td>
                                        <td><?php echo e($sh->TenSP); ?></td>
                                        <td><?php echo e($sh->DonGia); ?></td>
                                        <td><?php echo e($sh->Sluongcon); ?></td>                     
                                <td><img src="<?php echo asset('admin/img/'.$sh['img']); ?>" width="60px;" height="50px" alt=""></td>             
                                    <td><?php echo e($sh->Ram); ?></td>
                                         <td><?php echo e($sh->baohanh); ?></td>                                 
                                          <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href=" <?php echo e(route('admin.cate.getEdit',$sh['MaSP'])); ?>"> Sửa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a onclick="return xacnhanxoa('Bạn Có Chắc Muốn Xóa Không')" href="<?php echo URL::route('admin.cate.getDelete',$sh['MaSP']); ?>" >Xóa</a></td>
                                           
                                
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