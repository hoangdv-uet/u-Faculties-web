<?php $__env->startSection('content'); ?>
<!-- Page Content -->
<div id="wrapper">
    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thêm Mới Giáo Viên
                        </h1>
                        <?php if(count($errors)>0): ?>
                        <div class="alert alert-danger">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($err); ?><br>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <?php endif; ?>
                        <?php if(Session::has('message')): ?>
                        <div class="alert alert-danger"><?php echo e(Session::get('message')); ?></div>
                        <?php endif; ?>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">

                     <form name="ajax-form" id="contact-form2" action="addteacher" method="post" >
                         <?php echo csrf_field(); ?>


                         <div class="form-group">
                            <label>Tài Khoản</label>
                            <input class="form-control" name="username" placeholder="Please Enter Name" required />
                        </div>
                        <div class="form-group">
                            <label>Mã Cán Bộ</label>
                            <input class="form-control" name="maCB" placeholder="Please Enter Name" required />
                        </div>

                        <div class="form-group">
                            <label>Tên Đầy Đủ</label>
                            <input class="form-control" name="fullname" placeholder="Please Enter Name" required />
                        </div>
                        <div class="form-group">
                           <label>Email</label>
                           <input class="form-control" name="email" placeholder="Please Enter Email" required type="email" />
                       </div>

                       <div class="form-group">
                           <label>Password</label>
                           <input class="form-control" id="password" name="password" required="" placeholder="Mật Khẩu" type="password">							
                       </div>
                       <div class="form-group">
                        <label>Phòng Ban</label>
                        <select class="form-control" name="id_department" id="category">
                            <?php $__currentLoopData = $dep; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($c->id); ?>"><?php echo e($c->department_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                        </select>
                    </div>

                    <div class="form-group">
                       <label>Học Vị</label>
                       <input class="form-control" name="hocvi" placeholder="Please Enter Address" required />
                   </div>
                   <div class="form-group">
                       <label>Số Điện Thoại</label>
                       <input class="form-control" name="phone" placeholder="Please Enter Avatar" required />
                   </div>

                   <div class="form-group">
                    <input name="submit" class="btn btn-primary" value="Thêm" id="send" type="submit">
                </div>

            </form>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
</div>
</div>
<!-- /#page-wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/quanlygiaovien-master/resources/views/admin/page/addteacher.blade.php ENDPATH**/ ?>