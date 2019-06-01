<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quản lý Giảng Viên</title>
  <base href="<?php echo e(asset('')); ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="source/css/style.css">
  <link rel="stylesheet" type="text/css" href="source/css/w3.css">
  <!-- fonts awesome -->
  <link rel="stylesheet" href="source/assets/font/css/font-awesome.min.css" type="text/css">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <!-- <script src="source/js/jquery-1.11.1.min.js"></script> -->

  <style type="text/css">
  </style>

</head>
<body>
	<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php echo $__env->yieldContent('content'); ?>

  <script src="source/js/jquery.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="source/js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/quanlygiaovien-master/resources/views/master.blade.php ENDPATH**/ ?>