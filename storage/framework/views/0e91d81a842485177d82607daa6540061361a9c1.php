<?php $__env->startSection('content'); ?>
<div class="container-fluid">
  <h3>Tìm Kiếm Giảng Viên</h3>
  <div class="row">
    <div class="col-sm-5">
      <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'dvct')" id="defaultOpen">Đơn Vị Công Tác</button>
        <button class="tablinks" onclick="openCity(event, 'lvqt')">Lĩnh Vực Quan Tâm</button>
      </div>

      <div id="dvct" class="tabcontent">
        <ul style="list-style-type:none; padding-left: 2%">
          <?php $__currentLoopData = $department; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li class="department" data-iddep="<?php echo e($d->id); ?>"><p><?php echo e($d->department_name); ?></p></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>  
      </div>

      <div id="lvqt" class="tabcontent">
        <ul id="tree1" class="tree"> 
          <?php $__currentLoopData = $research_field; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <li class="branch"><a><?php echo e($r->research_field); ?></a> 
          <ul>
            <?php $__currentLoopData = $r->lecture_qt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <li class="lecture_qt" data-idlec="<?php echo e($l->id); ?>"><?php echo e($l->name); ?></li>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul> 
         </li>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>
    </div>

    <div class="col-sm-7 ttgv">
      <p>Danh Sách Giảng Viên:</p>            
      <table class="table">
        <thead>
          <tr>
            <th>HHHV</th>
            <th>Tên Giảng Viên</th>
            <th>Đơn Vị</th>
          </tr>
        </thead>
        <tbody>
        <!--   <tr>
            <td>Thạc Sĩ</td>
            <td>Giang Viên A</td>
            <td>Khoa học máy tính</td>
          </tr> -->
        </tbody>
      </table>
    </div>
  </div>
</div>
<input type="hidden" value="<?php echo e(csrf_token()); ?>" id="token"/>
<script type="text/javascript" src="source/js/searchteacher.js"></script>

<script type="text/javascript">
  $(document).ready(function() {

    $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    //ajax search by department
    $('.department').click(function(e) {
    e.preventDefault();
    var id = ($(this).attr("data-iddep"));
    var token = $('#token').val();
    $.ajax({
      type : 'POST',
      url : '/searchbydep',
      data: {'id':id, '_token': token},
      dataType: 'json',
      success: function (data) {
        $(".table tbody").html("");
        $.each(data, function (i) {                
         $(".table tbody").append("<tr " + "class=" +'"infoteacher"' + 'data-iduser=' +  data[i].id + ">" +
                              "<td>" + data[i].hocvi + "</td>" +
                              "<td>" + data[i].fullname + "</td>" +
                              "<td>" + data[i].department_name + "</td>" +
                          "</tr>");
        })  
      },
      error: function (data) {
       console.log('Error:', data);
      }
      });
    });

    //ajax search by lecture_qt
    $('.lecture_qt').click(function(e) {
    e.preventDefault();
    var idlec = ($(this).attr("data-idlec"));
    var token = $('#token').val();
    $.ajax({
      type : 'POST',
      url : '/searchbylec',
      data: {'idlec':idlec, '_token': token},
      dataType: 'json',
      success: function (data) {
        $(".table tbody").html("");
        $.each(data, function (i) {                
         $(".table tbody").append("<tr " + "class=" +'"infoteacher"' + 'data-iduser=' +  data[i].id + ">" +
                              "<td>" + data[i].hocvi + "</td>" +
                              "<td>" + data[i].fullname + "</td>" +
                              "<td>" + data[i].department_name + "</td>" +
                          "</tr>");
        })  
      },
      error: function (data) {
       console.log('Error:', data);
      }
      });
    });

   // click to detals
   $(document).on("click", ".infoteacher", function() {
    var iduser = ($(this).attr("data-iduser"));
    var url = '/teacher/info/' + iduser
    window.location.href = url;
  });
});  
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/quanlygiaovien-master/resources/views/student/searchTeacher.blade.php ENDPATH**/ ?>