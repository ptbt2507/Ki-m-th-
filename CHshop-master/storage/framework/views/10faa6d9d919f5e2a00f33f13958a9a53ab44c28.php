<?php $__env->startSection('content'); ?>

<div class="col-lg-12">
                        <h1 class="page-header">Liên hệ
                            <small>List</small>
                        </h1>
                    </div>
                         
                    <div class="box-content">
                    <table class="table table-striped table-bordered bootstrap-datatable datatable">
                      <thead>
                        <tr>
                          <th>id liên hệ</th>
                          <th>Họ tên</th>
                          <th>Công ty liên hệ</th>
                          <th>Email</th>
                          <th>Điện thoại</th>
                          
                          <th>Địa chỉ</th>
                         
                            <th>Chi tiêt</th>
                            <th>Xóa</th>
                          
                        </tr>
                      </thead>   
                        <tbody>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                        <td><?php echo e($sh->id_lienhe); ?></td>
                                        <td><?php echo e($sh->hoten); ?></td>
                                        <td><?php echo e($sh->cty); ?></td>
                                         <td><?php echo e($sh->email); ?></td>
                                        <td><?php echo e($sh->dienthoai); ?></td>         
                                           
                                        <td><?php echo e($sh->diachi); ?></td>               
                                       
                               
                                  <td class="center"><i class="fa fa-pencil fa-fw"></i> <a   href="<?php echo URL::route('admin.lienhe.getEdit',$sh['id_lienhe']); ?>" >Chi tiết</a></td>
                                           
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a  onclick="return xacnhanxoa('Bạn Có Chắc Muốn Xóa Không')" href="<?php echo URL::route('admin.lienhe.getDeletes',$sh['id_lienhe']); ?>" >Xóa</a></td>
                                           
                                
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