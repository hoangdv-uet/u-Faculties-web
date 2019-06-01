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
                                <h3 class="panel-title">Đơn Vị</h3>
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

                        <div class="form-group">
                         <table class="table">
                          <tr>
                            <td width="40%" align="right">
                                <button class="btn btn-primary"><a href="adddep" style="color: white">Thêm Mới</a></button>
                            </td>
                        </tr>
                    </table>
                </div>

            </div>
            <div class="panel-body">
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Tên Đơn Vị</th>
                            <th>Loại Đơn Vị</th>
                            <th>Địa Chỉ</th>
                            <th>Số Điện Thoại </th>
                            <th>Website </th>
                            <th>Hành Động </th>
                        </tr>
                    </thead>
                    <tbody>
                     <?php $__currentLoopData = $dep; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <tr class="odd gradeX" align="center">
                        <td><?php echo e($d->id); ?></td>
                        <td><?php echo e($d->department_name); ?></td>
                        <td><?php echo e($d->typedepartment); ?></td>
                        <td><?php echo e($d->address); ?></td>
                        <td><?php echo e($d->phone); ?></td>
                        <td><?php echo e($d->website); ?></td>
                        <td class="center">
                            <a href="editdep/<?php echo e($d->id); ?>" title="Sửa"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> |
                            <a href="deletedep/<?php echo e($d->id); ?>" title="Xóa"> <i class="fa fa-trash-o" aria-hidden="true"></i></a> 
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
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/quanlygiaovien-master/resources/views/admin/page/quanlydonvi.blade.php ENDPATH**/ ?>