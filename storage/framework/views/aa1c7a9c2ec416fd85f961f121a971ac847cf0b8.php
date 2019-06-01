<?php $__env->startSection('content'); ?>
<div id="wrapper">

    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">
                        <!-- BASIC TABLE -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Danh Sách Giáo Viên</h3>
                                <?php if(count($errors) > 0): ?>
                                <div class="alert alert-danger">
                                  <ul>
                                     <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     <li><?php echo e($error); ?></li>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 </ul>
                             </div>
                             <?php endif; ?>

                             <?php if($message = Session::get('success')): ?>
                             <div class="alert alert-success alert-block">
                               <button type="button" class="close" data-dismiss="alert">×</button>
                               <strong><?php echo e($message); ?></strong>
                           </div>
                           <?php endif; ?>
                           <?php if(Session::has('message')): ?>
                           <div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
                           <?php endif; ?>
                       </div>
                       <div>
                           <form method="post" enctype="multipart/form-data" action="<?php echo e(url('importexcel')); ?>">
                               <?php echo e(csrf_field()); ?>

                               <div class="form-group">
                                  <table class="table">
                                     <tr>
                                        <td width="30%">
                                           <input type="file" name="select_file" required />
                                       </td>
                                       <td width="30%" align="left">
                                           <input type="submit" name="upload" class="btn btn-primary" value="Import excel">
                                       </td>
                                       <td width="40%" align="right">
                                          <button class="btn btn-primary"><a href="addteacher" style="color: white">Thêm Mới</a></button>
                                      </td>
                                  </tr>
                              </table>
                          </div>
                      </form>
                  </div>
                  <div class="panel-body">
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>STT</th>
                                <th>Mã CB</th>
                                <th>Họ Tên</th>
                                <th>Tên Tài Khoản</th>
                                <th>Email</th>
                                <th>Học Vị</th>
                                <th>Đơn Vị Công Tác</th>
                                <th>Hành động </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=0; ?>
                        	<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="odd gradeX" align="center">
                                <td><?php echo e(++$i); ?></td>
                                <td style="width: 10px"><?php echo e($u->maCB); ?></td>
                                <td><?php echo e($u->fullname); ?></td>
                                <td><?php echo e($u->username); ?></td>
                                <td><?php echo e($u->email); ?></td>
                                <td><?php echo e($u->hocvi); ?></td>
                                <td><?php echo e($u->department->department_name); ?></td>
                                <td class="center">
                                 <a href="editteacher/<?php echo e($u->id); ?>" title="Sửa"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> |
                                 <a href="deleteteacher/<?php echo e($u->id); ?>" title="Xóa"> <i class="fa fa-trash-o" aria-hidden="true"></i></a> 
                                </td>
                             </tr>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </tbody>
                 </table>
             </div>
         </div>      
     </div>
 </div>   
</div>
</div>         
<!-- /.container-fluid -->
</div>
</div>   

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/quanlygiaovien-master/resources/views/admin/page/listteacher.blade.php ENDPATH**/ ?>