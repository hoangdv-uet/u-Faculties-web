<?php $__env->startSection('content'); ?>
<div class="container-fluid">
<hr>
  <div class="row">
  	<div class="col-sm-2"></div>
    <div class="col-sm-5" >
    	<div id="info-gv" style="padding-left: 30px">
    		<p class="title-tt"><?php echo e($user->hocvi); ?>. <?php echo e($user->fullname); ?></p>
	    	<p> <i class="fa fa-university" aria-hidden="true"></i> Đơn vị: <?php echo e($user->department->department_name); ?></p>
	    	<p><i class="fa fa-graduation-cap" aria-hidden="true"></i> Học vị, hàm vị: <?php echo e($user->hocvi); ?></p>
			<p><i class="fa fa-envelope-open-o" aria-hidden="true"></i> Email: <?php echo e($user->email); ?></p>
			<p><i class="fa fa-phone" aria-hidden="true"></i> Phone: <?php echo e($user->phone); ?></p>
	    	<p><i class="fa fa-telegram" aria-hidden="true"></i>  Website: <?php echo e($user->maCB); ?>.com</p>
    	</div>
    	<hr>
    	<div id="topic" style="padding-left: 30px">
    		<p class="title-tt">Chủ đề nghiên cứu</p>
	    	<ul style="list-style-type: none; padding: 0;">
	    		<?php $__currentLoopData = $research; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	    		<li><?php echo e($r->lecture_research->name); ?></li>
	    		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	    	</ul>
    	</div>
    	<hr>
    	<div id="field" style="padding-left: 30px">
    		<p class="title-tt">Lĩnh Vực Quan Tâm</p>
	    	<ul>
	    		<?php $__currentLoopData = $lecture; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	    		<li><?php echo e($l->lecture_qt->name); ?></li>
	    		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	    	</ul>
    	</div>
    	<hr>
    	<div class="col-lg-12">
    		<button class="btn btn-success btnBack" onclick="window.history.back();" > << Quay Lại </button>
		  </div>
    </div>

    <div class="col-sm-5">
       <img src="source/img/<?php echo e($user->avatar); ?>" width="30%" >
    </div>
    <div class="col-sm-1"></div>
  </div>

  	
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/quanlygiaovien-master/resources/views/student/infoteacher.blade.php ENDPATH**/ ?>