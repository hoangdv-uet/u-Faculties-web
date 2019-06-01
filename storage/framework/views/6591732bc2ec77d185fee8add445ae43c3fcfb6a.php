<div class="w3-bar w3-top w3-blue w3-large" style="z-index:4;">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey"><i class="fa fa-bars"></i>  Menu</button>
  	<span class="w3-bar-item w3-left"> <a href="search-teacher">UET</a></span>
		<?php if(Auth::check()): ?>
		 
  	<span class="w3-bar-item w3-right"> <a href='#'>Xin chào: <?php echo e(Auth::user()->fullname); ?></a> |<a href="update/teacher" style="font-size: 15px;" title="Cập nhật Thông tin"> Cập Nhật...</a> | <a href="/teacher/logout" style="font-size: 15px;">Đăng xuất</a></span>
	<?php else: ?>
	<span class="w3-bar-item w3-right"> <a href="teacher/login" style="font-size: 15px;" >Đăng Nhập</a></span>
	<?php endif; ?>
</div><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/quanlygiaovien-master/resources/views/header.blade.php ENDPATH**/ ?>