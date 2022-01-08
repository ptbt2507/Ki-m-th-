<?php $__env->startSection('content'); ?>

<div class="col-lg-12">
                        <h1 class="page-header">Quản lí
                            <small>Danh mục</small>
                        </h1>
                      
                    </div>
                            <a href="add"  style="color: green">Thêm danh mục</a><br><br>
                            <div class="row">
                          <div class="col-sm-10"></div>
                              <div class="col-sm-2">
                                    <?php if(session('loi')): ?>
                                      <h5 style="background: #DCCFCF"><?php echo e(session('loi')); ?></h5>
                                      <?php endif; ?>
                            </div>
                          </div>
                      
                    <div class="box-content">
                    <table class="table table-striped table-bordered bootstrap-datatable datatable">
                      <thead>
                        <tr>
                          <th>Mã  Loại hàng</th>
                          <th>Tên </th>
                          <th>Mô tả</th>
             
                          <th>Xóa</th>
            
                        </tr>
                      </thead>   
                        <tbody>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                        <td><?php echo e($sh->MaLoai); ?></td>
                                        <td><?php echo e($sh->TenLoai); ?></td>
                                        <td><?php echo e($sh->mota); ?></td>
                               
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a onclick="return xacnhanxoa('Bạn Có Chắc Muốn Xóa Không')" href="<?php echo URL::route('admin.loaihang.getDelete',$sh['MaLoai']); ?>" >Xóa</a></td>
                                           
                                
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